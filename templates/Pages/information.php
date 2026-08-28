<?php
declare(strict_types=1);

/** @var \App\View\AppView $this */
$language = $language ?? 'eng';
$isGerman = $language === 'deu';
$this->disableAutoLayout();
$page = $page ?? ['title' => '', 'summary' => '', 'body' => ''];
$pageSlug = $pageSlug ?? 'who-we-are';
$pageRoute = in_array($pageSlug, ['work-with-us', 'impressum', 'privacy-policy'], true) ? $pageSlug : 'who-we-are';
?>
<!DOCTYPE html>
<html lang="<?= $isGerman ? 'de' : 'en' ?>">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= h($page['title']) ?> | Language Landscapes</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap.min', 'fresh', 'ekko-lightbox.min', 'home']) ?>
    <?= $this->Html->script(['jquery-2.0.3.min', 'bootstrap.min', 'ekko-lightbox.min', 'main']) ?>
</head>
<body>
    <div class="shell">
        <header class="site-header">
            <a href="<?= $this->Url->build(['_name' => 'language-home', 'language' => $language]) ?>"><img class="logo" src="<?= $this->Url->image('language_landscapes_logo.png') ?>" alt="Language Landscapes"></a>
            <div class="language-switcher"><a class="language-bubble language-bubble-en <?= !$isGerman ? 'selected' : '' ?>" href="<?= $this->Url->build(['_name' => $pageRoute, 'language' => 'eng']) ?>" aria-label="English"></a><a class="language-bubble language-bubble-de <?= $isGerman ? 'selected' : '' ?>" href="<?= $this->Url->build(['_name' => $pageRoute, 'language' => 'deu']) ?>" aria-label="Deutsch"></a></div>
        </header>
        <?= $this->element('banner_nav', ['language' => $language, 'active' => $pageSlug]) ?>
        <main class="page-columns row child-page" id="content">
            <aside class="contact-column col-md-3"><?= $this->element('sidebar_services', ['language' => $language]) ?></aside>
            <div class="content-column col-md-9 service-page information-page"><h1><?= h($page['title']) ?></h1><p class="service-summary"><?= h($page['summary']) ?></p>
            <?php if ($pageSlug === 'who-we-are' && !empty($page['image'])) : ?>
                <a class="profile-photo" href="<?= $this->Url->image($page['imageLarge']) ?>" data-toggle="lightbox" data-title="<?= h($page['title']) ?>">
                    <img src="<?= $this->Url->image($page['image']) ?>" alt="Jaime Hyland">
                </a>
            <?php endif; ?>
            <div class="information-body"><?= $page['body'] ?></div></div>
        </main>
        <?= $this->element('glossary', ['isGerman' => $isGerman]) ?>
        <?= $this->element('footer', ['language' => $language]) ?>
    </div>
</body>
</html>
