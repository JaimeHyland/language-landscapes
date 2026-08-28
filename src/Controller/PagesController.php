<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Log\Log;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\Mailer\Mailer;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/5/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    private const SERVICES = [
        'review' => [
            'eng' => ['title' => 'Review of existing localizations', 'summary' => 'A second pair of expert eyes.', 'body' => 'We evaluate translated and localized content for meaning, consistency, and quality before it reaches your customers.'],
            'deu' => ['title' => 'Bewertung vorhandener Inhalte', 'summary' => 'Ein zweites Paar fachkundiger Augen.', 'body' => 'Wir bewerten übersetzte und lokalisierte Inhalte auf Bedeutung, Konsistenz und Qualität, bevor sie Ihre Kunden erreichen.'],
        ],
        'internationalization' => [
            'eng' => ['title' => 'Internationalization support', 'summary' => 'Prepare your content for the world.', 'body' => 'We help you plan internationalization into your content, products, and processes from the beginning, reducing friction later.'],
            'deu' => ['title' => 'Beratung zur Intnernationalisierung', 'summary' => 'Inhalte für die Welt vorbereiten.', 'body' => 'Wir helfen Ihnen, Internationalisierung von Anfang an in Inhalte, Produkte und Prozesse einzubauen und späteren Aufwand zu vermeiden.'],
        ],
        'proofing' => [
            'eng' => ['title' => 'Proofing', 'summary' => 'Make every word work harder.', 'body' => 'We check your content for accuracy, clarity, consistency, and tone so your message reaches people exactly as intended.'],
            'deu' => ['title' => 'Korrekturlesen', 'summary' => 'Jedes Wort auf den Punkt bringen.', 'body' => 'Wir prüfen Ihre Inhalte auf Richtigkeit, Klarheit, Konsistenz und Tonalität, damit Ihre Botschaft genau so ankommt, wie sie gemeint ist.'],
        ],
        'web-localization' => [
            'eng' => ['title' => 'Web localization', 'summary' => 'Make your website feel at home anywhere.', 'body' => 'We help you adapt your web presence for new markets, from language and conventions to the details that make an experience feel native.'],
            'deu' => ['title' => 'Weblocalisierung', 'summary' => 'Ihre Website fühlt sich überall zu Hause an.', 'body' => 'Wir passen Ihren Internetauftritt an neue Märkte an: von Sprache und Konventionen bis zu den Details, die ein Erlebnis vertraut wirken lassen.'],
        ],
        'software-localization' => [
            'eng' => ['title' => 'Software localization', 'summary' => 'Build products people understand.', 'body' => 'We combine linguistic precision with an understanding of software so interfaces, documentation, and help content stay clear in every language.'],
            'deu' => ['title' => 'Softwarelokalisierung', 'summary' => 'Produkte entwickeln, die Menschen verstehen.', 'body' => 'Wir verbinden sprachliche Präzision mit Softwareverständnis, damit Benutzeroberflächen, Dokumentation und Hilfe in jeder Sprache klar bleiben.'],
        ],
        'translation' => [
            'eng' => ['title' => 'Translation', 'summary' => 'Carry your meaning across languages.', 'body' => 'Translation is a conversation. We ask the right questions and work with trusted language professionals to preserve your meaning, voice, and purpose.'],
            'deu' => ['title' => 'Übersetzung', 'summary' => 'Ihre Bedeutung über Sprachgrenzen hinweg tragen.', 'body' => 'Übersetzen ist ein Dialog. Wir stellen die richtigen Fragen und arbeiten mit vertrauenswürdigen Sprachexperten, um Bedeutung, Stimme und Zweck zu bewahren.'],
        ],
        'terminology-management' => [
            'eng' => ['title' => 'Terminology management', 'summary' => 'Keep it clear.', 'body' => 'We help you build a terminology system that improves consistency, speeds up knowledge transfer, and gives your organisation a shared vocabulary.'],
            'deu' => ['title' => 'Terminologieverwaltung', 'summary' => 'Für klare Kommunikation.', 'body' => 'Wir helfen Ihnen, ein Terminologiesystem aufzubauen, das Konsistenz verbessert, Wissen schneller vermittelt und Ihrer Organisation ein gemeinsames Vokabular gibt.'],
        ],
        'edit-and-adapt' => [
            'eng' => ['title' => 'Editing and adaptation', 'summary' => 'Give good content a sharper edge.', 'body' => 'We edit and adapt existing content so it reads naturally, communicates effectively, and fits the people and context it is meant for.'],
            'deu' => ['title' => 'Textnachbearbeutung & -anpassung', 'summary' => 'Guten Inhalten den letzten Schliff geben.', 'body' => 'Wir redigieren und adaptieren vorhandene Inhalte, damit sie natürlich klingen, wirksam kommunizieren und zu ihren Lesern und ihrem Kontext passen.'],
        ],
        'optimization' => [
            'eng' => ['title' => 'Optimization', 'summary' => 'Make existing translations work better.', 'body' => 'We review your existing translations and terminology to find practical improvements in quality, consistency, and turnaround time.'],
            'deu' => ['title' => 'Optimierung', 'summary' => 'Vorhandene Übersetzungen besser nutzen.', 'body' => 'Wir prüfen Ihre vorhandenen Übersetzungen und Terminologien und finden praktische Verbesserungen bei Qualität, Konsistenz und Bearbeitungszeit.'],
        ],
    ];

    private const INFORMATION_PAGES = [
        'privacy-policy' => [
            'eng' => ['title' => 'Privacy policy', 'summary' => 'A deliberately minimal approach to visitor data.', 'body' => '<h3>Anonymous visitor statistics</h3><p>Language Landscapes records only raw anonymous numbers: how many visits each page receives and anonymous jump statistics showing how visitors move from one page to another. These figures are used to understand which pages are useful and how the site is navigated.</p><p>We do not use analytics to identify or profile visitors. We do not intentionally collect IP addresses, names, advertising identifiers, device fingerprints, or browsing histories. We do not use tracking cookies for visitor statistics.</p><h3>Contact form</h3><p>If you use the contact form, we collect the return address and other information you voluntarily provide so that we can respond to your enquiry. We commit to deleting the return address and associated contact-form records from our records within one week of your request to do so, unless a longer retention period is required by law or is necessary to establish, exercise, or defend legal claims. Contact-form information is kept separate from the anonymous visitor statistics.</p><h3>First-visit notice</h3><p>We use a first-party client-side cookie named <code>ll_notice_seen</code> only to remember that the initial informational notice has been dismissed. It does not record consent, identify you, or track your activity, and expires after one year.</p><h3>Questions</h3><p>For questions about this policy, please use the contact page linked in the footer.</p>'],
            'deu' => ['title' => 'Datenschutzerklärung', 'summary' => 'Ein bewusst minimalistischer Umgang mit Besucherdaten.', 'body' => '<h3>Anonyme Besucherstatistik</h3><p>Language Landscapes erfasst ausschließlich rohe anonyme Zahlen: wie oft jede Seite besucht wird und anonyme Sprungstatistiken darüber, wie Besucher von einer Seite zur nächsten navigieren. Diese Zahlen helfen uns zu verstehen, welche Seiten nützlich sind und wie die Website genutzt wird.</p><p>Wir verwenden diese Statistik nicht zur Identifizierung oder Profilbildung. Wir erfassen nicht absichtlich IP-Adressen, Werbekennungen, Geräte-Fingerabdrücke oder vollständige Browserverläufe. Für die Besucherstatistik verwenden wir keine Tracking-Cookies.</p><h3>Kontaktformular</h3><p>Wenn Sie das Kontaktformular nutzen, erfassen wir die von Ihnen freiwillig angegebene Rücksendeadresse und weitere Angaben, damit wir Ihre Anfrage beantworten können. Wir verpflichten uns, die Rücksendeadresse und zugehörige Kontaktformular-Daten innerhalb einer Woche nach Ihrem Löschungsantrag aus unseren Unterlagen zu löschen, sofern keine längere Aufbewahrung gesetzlich vorgeschrieben oder zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen erforderlich ist. Kontaktformulardaten werden getrennt von der anonymen Besucherstatistik verarbeitet.</p><h3>Hinweis beim ersten Besuch</h3><p>Wir verwenden ein clientseitiges Cookie namens <code>ll_notice_seen</code> ausschließlich, um zu speichern, dass der anfängliche Informationshinweis geschlossen wurde. Es erfasst keine Einwilligung, identifiziert Sie nicht und verfolgt keine Aktivitäten. Es verfällt nach einem Jahr.</p><h3>Fragen</h3><p>Bei Fragen zu dieser Erklärung nutzen Sie bitte die Kontaktseite im Fußbereich.</p>'],
        ],
        'impressum' => [
            'eng' => ['title' => 'Legal notice', 'summary' => 'Legal information and data protection.', 'body' => '<h3>Language Landscapes</h3><p>James Hyland<br>Kuckhoffstr 108D<br>13156 Berlin<br><span data-contact-phone="48,49,55,55,32,50,53,55,48,55,51,52,53"></span></p><p>Email: <span data-contact-email="105,110,102,111,64,108,97,110,103,117,97,103,101,45,108,97,110,100,115,99,97,112,101,115,46,99,111,109"></span></p>'],
            'deu' => ['title' => 'Impressum', 'summary' => 'Rechtliche Hinweise und Datenschutz.', 'body' => '<h3>Language Landscapes</h3><p>James Hyland<br>Kuckhoffstr 108D<br>13156 Berlin<br><span data-contact-phone="48,49,55,55,32,50,53,55,48,55,51,52,53"></span></p><p>E-Mail: <span data-contact-email="105,110,102,111,64,108,97,110,103,117,97,103,101,45,108,97,110,100,115,99,97,112,101,115,46,99,111,109"></span></p><h3>Datenschutz</h3><p>Persönliche Angaben, die über diese Website übermittelt werden, verwenden wir ausschließlich zur Beantwortung von Anfragen und zur Erbringung gewünschter Leistungen. Bei Fragen zur Verarbeitung oder Löschung Ihrer Daten können Sie uns jederzeit kontaktieren.</p>'],
        ],
        'who-we-are' => [
            'eng' => ['title' => 'Who we are', 'summary' => 'A linguist and developer combining linguistic ability, technical knowledge, and a commitment to quality.', 'image' => 'jaime.jpg', 'imageLarge' => 'jaime_hd.jpg', 'body' => '<h3>Jaime Hyland</h3><p>Jaime is a linguist working in English, Spanish, and German, as well as a developer with many years of experience in software and web localization. Based in Berlin, he has worked extensively with European small and medium-sized businesses on translation, localization, and internationalization solutions.</p><h3>Our goal</h3><p>Language Landscapes was created to help European businesses communicate clearly and professionally across languages. We combine technical savvy, linguistic ability, market awareness, and a commitment to quality.</p>'],
            'deu' => ['title' => 'Über uns', 'summary' => 'Ein Linguist und Entwickler mit sprachlicher Kompetenz, technischem Know-how und Qualitätsbewusstsein.', 'image' => 'jaime.jpg', 'imageLarge' => 'jaime_hd.jpg', 'body' => '<h3>Jaime Hyland</h3><p>Jaime ist Linguist für Englisch, Spanisch und Deutsch sowie Entwickler mit langjähriger Erfahrung in Software- und Web-Lokalisierung. Er lebt in Berlin und hat umfassend an Übersetzungs-, Lokalisierungs- und Internationalisierungslösungen für kleine und mittlere Unternehmen gearbeitet.</p><h3>Unser Ziel</h3><p>Language Landscapes wurde gegründet, um europäischen Unternehmen zu klarer und professioneller Kommunikation über Sprachgrenzen hinweg zu verhelfen. Wir verbinden technisches Know-how, sprachliche Kompetenz, Marktbewusstsein und Qualitätsbewusstsein.</p>'],
        ],
        'work-with-us' => [
            'eng' => ['title' => 'Work with us', 'summary' => 'A partner that expects and appreciates the highest standards.', 'body' => '<p>We are always looking for talented freelancers who care about quality, understand web internationalisation, and deliver work on time and to specification.</p><h3>We work with</h3><ul><li>Translators</li><li>Localisation specialists</li><li>Copywriters</li><li>Editors</li><li>Reviewers</li><li>Web and software developers specialising in internationalisation</li></ul><p>We believe in long-term relationships with freelance partners who consistently deliver excellent work. We share our knowledge, technology, feedback, and the benefits of our work fairly.</p><h3>Enquire now</h3><p>Please tell us about your skills, language pairs, specialist areas, experience, and qualifications. Include a short CV or profile where relevant.</p>'],
            'deu' => ['title' => 'Mit uns arbeiten', 'summary' => 'Ein Partner, der höchste Standards erwartet und zu schätzen weiß.', 'body' => '<p>Wir suchen talentierte Freiberufler, denen Qualität wichtig ist, die den Prozess der Internationalisierung verstehen und fristgerecht sowie zuverlässig arbeiten.</p><h3>Wir arbeiten mit</h3><ul><li>Übersetzern</li><li>Lokalisierungsspezialisten</li><li>Redakteuren</li><li>Korrekturlesern</li><li>Lektoren</li><li>Programmierern mit Spezialisierung auf Internationalisierung</li></ul><p>Wir setzen auf langfristige Beziehungen mit Partnern, die konstant hervorragende Qualität liefern. Wissen, Technologie, Feedback und die Vorteile unserer Arbeit teilen wir fair.</p><h3>Jetzt anfragen</h3><p>Bitte nennen Sie Ihre Kompetenzen, Sprachkombinationen, Fachgebiete, Erfahrungen und Qualifikationen. Fügen Sie bei Bedarf einen kurzen Lebenslauf oder ein Kurzprofil bei.</p>'],
        ],
    ];

    public function testLogging()
    {
        Log::debug('Debug message - should appear in the terminal');
        Log::error('Error message - should be written to the error log');

        return $this->response->withStringBody('Logging test complete!');
    }

    public function home(string $language = 'eng'): ?Response
    {
        $this->set('language', $this->normaliseLanguage($language));
        return $this->render('home');
    }

    public function service(string $language, string $slug): ?Response
    {
        $language = $this->normaliseLanguage($language);
        if (!isset(self::SERVICES[$slug])) {
            throw new NotFoundException();
        }

        $this->set([
            'language' => $language,
            'service' => self::SERVICES[$slug][$language],
            'services' => self::SERVICES,
            'slug' => $slug,
        ]);

        return $this->render('service');
    }

    public function information(string $language, string $page): ?Response
    {
        $language = $this->normaliseLanguage($language);
        if (!isset(self::INFORMATION_PAGES[$page])) {
            throw new NotFoundException();
        }

        $this->set(['language' => $language, 'page' => self::INFORMATION_PAGES[$page][$language], 'pageSlug' => $page]);
        return $this->render('information');
    }

    public function contact(string $language = 'eng'): ?Response
    {
        $language = $this->normaliseLanguage($language);
        $data = $this->request->getData();
        $errors = [];
        $success = null;

        if ($this->request->is('post')) {
            foreach (['first_name', 'last_name', 'email', 'message'] as $field) {
                if (trim((string)($data[$field] ?? '')) === '') {
                    $errors[$field] = $language === 'deu' ? 'Dieses Feld ist erforderlich.' : 'This field is required.';
                }
            }
            if (!empty($data['email']) && !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = $language === 'deu' ? 'Bitte geben Sie eine gültige E-Mail-Adresse ein.' : 'Please enter a valid email address.';
            }
            if (!$errors) {
                $message = sprintf(
                    "First name: %s\nLast name: %s\nEmail: %s\nCompany: %s\nJob title: %s\nPhone: %s\n\nMessage:\n%s",
                    trim((string)($data['first_name'] ?? '')),
                    trim((string)($data['last_name'] ?? '')),
                    trim((string)($data['email'] ?? '')),
                    trim((string)($data['company'] ?? '')),
                    trim((string)($data['job_title'] ?? '')),
                    trim((string)($data['phone'] ?? '')),
                    trim((string)($data['message'] ?? '')),
                );

                try {
                    $mailer = new Mailer('default');
                    $mailer->setFrom(['info@language-landscapes.com' => 'Language Landscapes'])
                        ->setTo('info@language-landscapes.com')
                        ->setReplyTo((string)$data['email'])
                        ->setSubject('Language Landscapes: contact form enquiry')
                        ->deliver($message);
                    $success = $language === 'deu' ? 'Vielen Dank. Ihre Nachricht wurde gesendet.' : 'Thank you. Your message has been sent.';
                    $data = [];
                } catch (Throwable $exception) {
                    Log::error('Contact form email failed: ' . $exception->getMessage());
                    $errors['form'] = $language === 'deu' ? 'Ihre Nachricht konnte nicht gesendet werden. Bitte versuchen Sie es später erneut.' : 'Your message could not be sent. Please try again later.';
                }
            }
        }

        $this->set(compact('language', 'data', 'errors', 'success'));
        return $this->render('contact');
    }

    private function normaliseLanguage(string $language): string
    {
        return in_array($language, ['eng', 'deu'], true) ? $language : 'eng';
    }
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
}
