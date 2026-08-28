<?php
declare(strict_types=1);

/** @var \App\View\AppView $this */
$language = $language ?? 'eng';
$isGerman = $language === 'deu';
$this->disableAutoLayout();
$service = $service ?? ['title' => '', 'summary' => '', 'body' => ''];
?>
<!DOCTYPE html>
<html lang="<?= $isGerman ? 'de' : 'en' ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= h($service['title']) ?> | Language Landscapes</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap.min', 'fresh', 'ekko-lightbox.min', 'home']) ?>
    <?= $this->Html->script(['jquery-2.0.3.min', 'bootstrap.min', 'ekko-lightbox.min', 'main']) ?>
</head>
<body>
    <div class="shell">
        <header class="site-header">
            <a href="<?= $this->Url->build(['_name' => 'language-home', 'language' => $language]) ?>"><img class="logo" src="<?= $this->Url->image('language_landscapes_logo.png') ?>" alt="Language Landscapes"></a>
            <div class="language-switcher"><a class="language-bubble language-bubble-en <?= !$isGerman ? 'selected' : '' ?>" href="<?= $this->Url->build(['_name' => 'service', 'language' => 'eng', 'slug' => $slug]) ?>" aria-label="English"></a><a class="language-bubble language-bubble-de <?= $isGerman ? 'selected' : '' ?>" href="<?= $this->Url->build(['_name' => 'service', 'language' => 'deu', 'slug' => $slug]) ?>" aria-label="Deutsch"></a></div>
        </header>
        <?= $this->element('banner_nav', ['language' => $language, 'active' => 'service']) ?>
        <main class="page-columns row child-page" id="content">
            <aside class="contact-column col-md-3"><?= $this->element('sidebar_services', ['language' => $language]) ?></aside>
            <div class="content-column col-md-9 service-page"><h1><?= h($service['title']) ?></h1><p class="service-summary"><?= h($service['summary']) ?></p><p class="service-body"><?= h($service['body']) ?></p><p class="specialist-terms"><?= $isGerman ? 'Fachbegriffe: ' : 'Specialist terms: ' ?><a class="glossary-term" href="#glossary-localization" data-toggle="modal" data-target="#glossary-localization"><?= $isGerman ? 'Lokalisierung' : 'localization' ?></a>, <a class="glossary-term" href="#glossary-internationalization" data-toggle="modal" data-target="#glossary-internationalization"><?= $isGerman ? 'Internationalisierung' : 'internationalization' ?></a>, <a class="glossary-term" href="#glossary-globalization" data-toggle="modal" data-target="#glossary-globalization"><?= $isGerman ? 'Globalisierung' : 'globalization' ?></a></p><a class="button" href="<?= $this->Url->build(['_name' => 'contact', 'language' => $language]) ?>"><?= $isGerman ? 'Kontakt aufnehmen' : 'Get in touch' ?> <span aria-hidden="true">→</span></a></div>
        </main>
        <?= $this->element('glossary', ['isGerman' => $isGerman]) ?>
        <?= $this->element('footer', ['language' => $language]) ?>
    </div>
</body>
</html>
