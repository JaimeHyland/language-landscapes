<?php
$isGerman = $isGerman ?? false;
$terms = [
    'translation' => [
        'title' => $isGerman ? 'Übersetzung' : 'Translation',
        'body' => $isGerman ? 'Übersetzung ist die Übertragung eines Textes aus einer Sprache in eine andere. Ziel ist es, Bedeutung, Ton, Stil und Zweck des Ausgangstextes für die Leser der Zielsprache zu bewahren.' : 'Translation is the process of transferring a text from one language into another while preserving its meaning, tone, style, and purpose for readers of the target language.',
    ],
    'localization' => [
        'title' => $isGerman ? 'Lokalisierung' : 'Localization',
        'body' => $isGerman ? 'Lokalisierung ist die Anpassung eines Produkts, einer Website oder Software an einen bestimmten Zielmarkt. Dazu gehören unter anderem Sprache, Währungen, Maßeinheiten, Gestaltung, Bilder, Kontaktdaten und Links.' : 'Localization (l10n) is the process of adapting a product, website, or software for a particular target market. It can include language, currencies, measurements, design, images, contact details, and links.',
    ],
    'internationalization' => [
        'title' => $isGerman ? 'Internationalisierung' : 'Internationalization',
        'body' => $isGerman ? 'Internationalisierung ist die Vorbereitung einer Website oder Software, damit sie für einen oder mehrere andere Märkte lokalisiert werden kann. Sie ist der erste Schritt im Globalisierungsprozess.' : 'Internationalization (i18n) is the process of preparing a website or software product so that it can be localized for one or more other markets. It is the first step in globalization.',
    ],
    'globalization' => [
        'title' => $isGerman ? 'Globalisierung' : 'Globalization',
        'body' => $isGerman ? 'Globalisierung bezeichnet die Verbindung der Aufgaben Internationalisierung und Lokalisierung.' : 'Globalization is a term used to describe the combined tasks of internationalization and localization.',
    ],
];
?>
<?php foreach ($terms as $slug => $term) : ?>
    <div class="modal fade" id="glossary-<?= h($slug) ?>" tabindex="-1" role="dialog" aria-labelledby="glossary-<?= h($slug) ?>-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="glossary-<?= h($slug) ?>-title"><?= h($term['title']) ?></h4>
                </div>
                <div class="modal-body"><p><?= h($term['body']) ?></p></div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
