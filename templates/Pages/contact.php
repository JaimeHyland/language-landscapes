<?php
declare(strict_types=1);

/** @var \App\View\AppView $this */
$language = $language ?? 'eng';
$isGerman = $language === 'deu';
$this->disableAutoLayout();
$data = $data ?? [];
$errors = $errors ?? [];
?>
<!DOCTYPE html>
<html lang="<?= $isGerman ? 'de' : 'en' ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $isGerman ? 'Kontakt' : 'Contact' ?> | Language Landscapes</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap.min', 'fresh', 'home']) ?>
    <?= $this->Html->script(['jquery-2.0.3.min', 'bootstrap.min', 'ekko-lightbox.min', 'main']) ?>
</head>
<body>
    <div class="shell">
        <header class="site-header">
            <a href="<?= $this->Url->build(['_name' => 'language-home', 'language' => $language]) ?>"><img class="logo" src="<?= $this->Url->image('language_landscapes_logo.png') ?>" alt="Language Landscapes"></a>
            <div class="language-switcher"><a class="language-bubble language-bubble-en <?= !$isGerman ? 'selected' : '' ?>" href="<?= $this->Url->build(['_name' => 'contact', 'language' => 'eng']) ?>" aria-label="English"></a><a class="language-bubble language-bubble-de <?= $isGerman ? 'selected' : '' ?>" href="<?= $this->Url->build(['_name' => 'contact', 'language' => 'deu']) ?>" aria-label="Deutsch"></a></div>
        </header>
        <?= $this->element('banner_nav', ['language' => $language, 'active' => 'contact']) ?>
        <main class="page-columns row child-page" id="content">
            <aside class="contact-column col-md-3"><?= $this->element('sidebar_services', ['language' => $language]) ?></aside>
            <div class="content-column col-md-9 contact-page">
                <h1><?= $isGerman ? 'Kontakt aufnehmen' : 'Get in touch' ?></h1>
                <p class="service-summary"><?= $isGerman ? 'Erzählen Sie uns, woran Sie arbeiten.' : 'Tell us what you are working on.' ?></p>
                <?php if (!empty($success)) : ?><div class="contact-success"><?= h($success) ?></div><?php endif; ?>
                <?php if (!empty($errors['form'])) : ?><div class="contact-error"><?= h($errors['form']) ?></div><?php endif; ?>
                <p class="contact-privacy"><?= $isGerman ? 'Ihre Angaben werden ausschließlich zur Beantwortung Ihrer Anfrage verwendet. Weitere Informationen finden Sie in der ' : 'Your details are used only to respond to your enquiry. See our ' ?><a href="<?= $this->Url->build(['_name' => 'privacy-policy', 'language' => $language]) ?>"><?= $isGerman ? 'Datenschutzerklärung' : 'Privacy policy' ?></a>.</p>
                <?= $this->Form->create(null, ['url' => ['_name' => 'contact', 'language' => $language], 'class' => 'contact-form']) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $this->Form->control('first_name', ['label' => $isGerman ? 'Vorname' : 'First name', 'value' => $data['first_name'] ?? '', 'error' => $errors['first_name'] ?? false]) ?>
                            <?= $this->Form->control('job_title', ['label' => $isGerman ? 'Position' : 'Job title', 'value' => $data['job_title'] ?? '']) ?>
                            <?= $this->Form->control('company', ['label' => $isGerman ? 'Unternehmen' : 'Company', 'value' => $data['company'] ?? '']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $this->Form->control('last_name', ['label' => $isGerman ? 'Nachname' : 'Last name', 'value' => $data['last_name'] ?? '', 'error' => $errors['last_name'] ?? false]) ?>
                            <?= $this->Form->control('email', ['type' => 'email', 'label' => 'Email *', 'required' => true, 'value' => $data['email'] ?? '', 'error' => $errors['email'] ?? false]) ?>
                            <?= $this->Form->control('phone', ['label' => $isGerman ? 'Telefon' : 'Phone', 'value' => $data['phone'] ?? '']) ?>
                        </div>
                    </div>
                    <?= $this->Form->control('message', ['type' => 'textarea', 'label' => $isGerman ? 'Nachricht' : 'Message', 'value' => $data['message'] ?? '', 'error' => $errors['message'] ?? false]) ?>
                    <span class="send-button-hint" title="<?= $isGerman ? 'Geben Sie eine gültige E-Mail-Adresse und einen Nachrichtentext ein, bevor Sie die Nachricht senden können.' : 'Provide a valid email address and a message body before you can send a message.' ?>">
                        <button class="button" type="submit" disabled aria-label="<?= $isGerman ? 'Nachricht senden. Eine gültige E-Mail-Adresse und ein Nachrichtentext sind erforderlich.' : 'Send message. A valid email address and message body are required.' ?>"><?= $isGerman ? 'Nachricht senden' : 'Send message' ?></button>
                    </span>
                <?= $this->Form->end() ?>
                <p class="required-note">* <?= $isGerman ? 'Ohne E-Mail-Adresse können wir Ihnen nicht antworten.' : 'We cannot reply if we do not have an email address.' ?></p>
            </div>
        </main>
        <?= $this->element('footer', ['language' => $language]) ?>
    </div>
</body>
</html>
