<?php
$language = $language ?? 'eng';
$isGerman = $language === 'deu';
$active = $active ?? '';
$serviceLinks = [
    ['slug' => 'internationalization', 'label' => $isGerman ? 'Beratung zur Intnernationalisierung' : 'Internationalization support'],
    ['slug' => 'web-localization', 'label' => $isGerman ? 'Weblocalisierung' : 'Web localization'],
    ['slug' => 'software-localization', 'label' => $isGerman ? 'Softwarelokalisierung' : 'Software localization'],
    ['slug' => 'translation', 'label' => $isGerman ? 'Übersetzung' : 'Translation'],
    ['slug' => 'terminology-management', 'label' => $isGerman ? 'Terminologieverwaltung' : 'Terminology management'],
    ['slug' => 'edit-and-adapt', 'label' => $isGerman ? 'Textnachbearbeutung & -anpassung' : 'Text editing and adaptation'],
    ['slug' => 'review', 'label' => $isGerman ? 'Bewertung vorhandener Inhalte' : 'Review of existing localizations'],
];
?>
<nav class="main-nav" aria-label="Main navigation">
    <ul class="nav nav-pills">
        <li class="<?= $active === 'home' ? 'active' : '' ?>"><a href="<?= $this->Url->build(['_name' => 'language-home', 'language' => $language]) ?>"><?= $isGerman ? 'Startseite' : 'Home' ?></a></li>
        <li class="dropdown <?= $active === 'service' ? 'active' : '' ?>"><a class="dropdown-toggle" href="#services" data-toggle="dropdown"><?= $isGerman ? 'Leistungen' : 'Our services' ?></a>
            <ul class="dropdown-menu">
                <?php foreach ($serviceLinks as $service) : ?>
                    <li><a href="<?= $this->Url->build(['_name' => 'service', 'language' => $language, 'slug' => $service['slug']]) ?>"><?= h($service['label']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="<?= $active === 'who-we-are' ? 'active' : '' ?>"><a href="<?= $this->Url->build(['_name' => 'who-we-are', 'language' => $language]) ?>"><?= $isGerman ? 'Über uns' : 'Who we are' ?></a></li>
        <li class="<?= $active === 'work-with-us' ? 'active' : '' ?>"><a href="<?= $this->Url->build(['_name' => 'work-with-us', 'language' => $language]) ?>"><?= $isGerman ? 'Mit uns arbeiten' : 'Work with us' ?></a></li>
    </ul>
</nav>
