<?php $language = $language ?? 'eng'; $isGerman = $language === 'deu'; ?>
<footer class="site-footer">
    <span>Language Landscapes</span>
    <a href="<?= $this->Url->build(['_name' => 'impressum', 'language' => $language]) ?>"><?= $isGerman ? 'Impressum' : 'Legal notice' ?></a>
    <a href="<?= $this->Url->build(['_name' => 'privacy-policy', 'language' => $language]) ?>"><?= $isGerman ? 'Datenschutz' : 'Privacy policy' ?></a>
</footer>
<?= $this->element('first_visit_notice', ['language' => $language]) ?>
<?= $this->Html->script('contact') ?>