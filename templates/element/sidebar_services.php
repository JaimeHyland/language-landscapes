<?php
$language = $language ?? 'eng';
$isGerman = $language === 'deu';
$links = [
    ['slug' => 'internationalization', 'label' => $isGerman ? 'Beratung zur Intnernationalisierung' : 'Internationalization support'],
    ['slug' => 'web-localization', 'label' => $isGerman ? 'Weblocalisierung' : 'Web localization'],
    ['slug' => 'software-localization', 'label' => $isGerman ? 'Softwarelokalisierung' : 'Software localization'],
    ['slug' => 'translation', 'label' => $isGerman ? 'Übersetzung' : 'Translation'],
    ['slug' => 'terminology-management', 'label' => $isGerman ? 'Terminologieverwaltung' : 'Terminology management'],
    ['slug' => 'edit-and-adapt', 'label' => $isGerman ? 'Textnachbearbeutung & -anpassung' : 'Text editing and adaptation'],
    ['slug' => 'review', 'label' => $isGerman ? 'Bewertung vorhandener Inhalte' : 'Review of existing localizations'],
];
$coordinates = [
    ['left' => 0, 'top' => 0, 'width' => 82, 'height' => 16],
    ['left' => 28, 'top' => 14, 'width' => 64, 'height' => 16],
    ['left' => 0, 'top' => 28, 'width' => 66, 'height' => 16],
    ['left' => 44, 'top' => 42, 'width' => 49, 'height' => 16],
    ['left' => 0, 'top' => 56, 'width' => 75, 'height' => 16],
    ['left' => 25, 'top' => 70, 'width' => 75, 'height' => 16],
    ['left' => 0, 'top' => 84, 'width' => 85, 'height' => 16],
];
?>
<h3 class="sidebar-services-title"><?= $isGerman ? 'Leistungen' : 'Our services' ?></h3>
<div class="sidebar-services">
    <img src="<?= $this->Url->image($isGerman ? 'menue_links_de_all.png' : 'menue_links_en_all.png') ?>" alt="<?= $isGerman ? 'Leistungen auswählen' : 'Choose a service' ?>">
    <?php foreach ($links as $index => $link) : ?>
        <?php $coordinate = $coordinates[$index]; ?>
        <a class="service-hit" href="<?= $this->Url->build(['_name' => 'service', 'language' => $language, 'slug' => $link['slug']]) ?>" aria-label="<?= h($link['label']) ?>" style="left:<?= $coordinate['left'] ?>%;top:<?= $coordinate['top'] ?>%;width:<?= $coordinate['width'] ?>%;height:<?= $coordinate['height'] ?>%"></a>
    <?php endforeach; ?>
</div>
<h2><?= $isGerman ? 'Kontakt' : 'Contact' ?></h2>
<p><a href="<?= $this->Url->build(['_name' => 'contact', 'language' => $language]) ?>" data-contact-email="105,110,102,111,64,108,97,110,103,117,97,103,101,45,108,97,110,100,115,99,97,112,101,115,46,99,111,109">Email</a></p>
<address><strong>Language Landscapes</strong><br>Berlin, Germany</address>
<p class="aside-note"><?= $isGerman ? 'Wir freuen uns auf Ihre Nachricht.' : 'We would be glad to hear from you.' ?></p>
