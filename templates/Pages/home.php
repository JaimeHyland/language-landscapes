<?php
declare(strict_types=1);

/** @var \App\View\AppView $this */
$language = $language ?? 'eng';
$isGerman = $language === 'deu';
$this->disableAutoLayout();
$sidebarServiceLinks = [
    ['slug' => 'internationalization', 'label' => $isGerman ? 'Beratung zur Intnernationalisierung' : 'Internationalization support'],
    ['slug' => 'web-localization', 'label' => $isGerman ? 'Weblocalisierung' : 'Web localization'],
    ['slug' => 'software-localization', 'label' => $isGerman ? 'Softwarelokalisierung' : 'Software localization'],
    ['slug' => 'translation', 'label' => $isGerman ? 'Übersetzung' : 'Translation'],
    ['slug' => 'terminology-management', 'label' => $isGerman ? 'Terminologiemanagement' : 'Terminology management'],
    ['slug' => 'edit-and-adapt', 'label' => $isGerman ? 'Textkorrektur und Anpassung' : 'Text correction and adjustment'],
    ['slug' => 'review', 'label' => $isGerman ? 'Inhaltsbewertung' : 'Content evaluation'],
];
?>
<!DOCTYPE html>
<html lang="<?= $isGerman ? 'de' : 'en' ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Language Landscapes: <?= $isGerman ? 'Internationalisierung aus einer Hand' : 'quality internationalization' ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap.min', 'fresh', 'ekko-lightbox.min', 'home']) ?>
    <?= $this->Html->script(['jquery-2.0.3.min', 'bootstrap.min', 'ekko-lightbox.min', 'main']) ?>
</head>
<body>
    <div class="shell">
        <header class="site-header">
            <a href="<?= $this->Url->build(['_name' => 'language-home', 'language' => $language]) ?>"><img class="logo" src="<?= $this->Url->image('language_landscapes_logo.png') ?>" alt="Language Landscapes"></a>
            <div class="language-switcher" aria-label="Language selection">
                <a class="language-bubble language-bubble-en <?= !$isGerman ? 'selected' : '' ?>" href="<?= $this->Url->build(['_name' => 'language-home', 'language' => 'eng']) ?>" aria-label="English"></a>
                <a class="language-bubble language-bubble-de <?= $isGerman ? 'selected' : '' ?>" href="<?= $this->Url->build(['_name' => 'language-home', 'language' => 'deu']) ?>" aria-label="Deutsch"></a>
            </div>
        </header>

        <?= $this->element('banner_nav', ['language' => $language, 'active' => 'home']) ?>

        <main>
            <div class="page-columns row">
                <aside class="contact-column col-md-3">
                    <?= $this->element('sidebar_services', ['language' => $language]) ?>
                </aside>
                <div class="content-column col-md-9">
            <section class="intro" id="about">
                <h1><strong>Language Landscapes</strong>: <?= $isGerman ? 'Ihre Wahl für hochwertige Internationalisierung aus einer Hand' : 'your one-stop provider of quality internationalization' ?></h1>
                <?php if ($isGerman) : ?>
                    <p>Herzlich willkommen bei Language Landscapes, Ihrem Anbieter für internationale Kommunikation im Internet. Wir bieten Ihnen alles, was Sie brauchen, um die Sprache Ihrer Kunden zu sprechen.</p>
                    <p>Sie möchten sicher sein, dass Ihre Internetpräsenz und Ihre gedruckten Veröffentlichungen effektiv und professionell kommunizieren?</p>
                    <p>Wir bieten Ihnen diese Sicherheit.</p>
                <?php else : ?>
                    <p>Welcome to Language Landscapes, your provider of <a class="glossary-term" href="#glossary-internationalization" data-toggle="modal" data-target="#glossary-internationalization">internationalized</a> communication on the web. We provide everything you need to ensure that you're speaking the language of your customers.</p>
                    <p>You need to be sure that your internet presence and printed publications communicate effectively and professionally, and that your message doesn't get lost in <a class="glossary-term" href="#glossary-translation" data-toggle="modal" data-target="#glossary-translation">translation</a>.</p>
                    <p>We provide that security.</p>
                <?php endif; ?>
            </section>

            <section class="service-tree" id="services">
                <h2><?= $isGerman ? 'Unsere Leistungen' : 'Our services' ?></h2>
                <div class="tree-layout">
                    <div class="tree-image">
                        <img src="<?= $this->Url->image($isGerman ? 'baummenue_de_all.png' : 'baummenue_en_all.png') ?>" alt="<?= $isGerman ? 'Leistungsübersicht' : 'Service overview' ?>">
                    </div>
                </div>
            </section>

            <section class="contact-strip" id="contact">
                <div><h2><?= $isGerman ? 'Lassen Sie uns sprechen.' : 'Let’s talk.' ?></h2><p><?= $isGerman ? 'Erzählen Sie uns, was Sie vorhaben.' : 'Tell us what you are working on.' ?></p></div>
                <a class="button" href="<?= $this->Url->build(['_name' => 'contact', 'language' => $language]) ?>" data-contact-email="105,110,102,111,64,108,97,110,103,117,97,103,101,45,108,97,110,100,115,99,97,112,101,115,46,99,111,109">Email</a>
            </section>
                </div>
            </div>
        </main>

        <?= $this->element('glossary', ['isGerman' => $isGerman]) ?>

        <?= $this->element('footer', ['language' => $language]) ?>
    </div>
</body>
</html>
