<?php $isGerman = ($language ?? 'eng') === 'deu'; ?>
<div class="first-visit-modal" id="first-visit-modal" role="dialog" aria-modal="true" aria-labelledby="first-visit-title" aria-describedby="first-visit-description" hidden>
    <div class="first-visit-panel">
        <h2 id="first-visit-title"><?= $isGerman ? 'Willkommen bei Language Landscapes' : 'Welcome to Language Landscapes' ?></h2>
        <p id="first-visit-description"><?= $isGerman ? 'Bitte beachten Sie unsere ' : 'Please read our ' ?><a href="<?= $this->Url->build(['_name' => 'privacy-policy', 'language' => $language]) ?>"><?= $isGerman ? 'Datenschutzerklärung' : 'Privacy policy' ?></a><?= $isGerman ? ' und unser ' : ' and ' ?><a href="<?= $this->Url->build(['_name' => 'impressum', 'language' => $language]) ?>"><?= $isGerman ? 'Impressum' : 'Legal notice' ?></a>.</p>
        <p class="first-visit-note"><?= $isGerman ? 'Diese einmalige Anzeige wird mit einem clientseitigen Cookie ausgeblendet. Dies ist kein Einwilligungsmechanismus.' : 'This one-time notice is hidden with a client-side cookie. It is not a consent mechanism.' ?></p>
        <button class="button first-visit-close" type="button"><?= $isGerman ? 'Weiter' : 'Continue' ?></button>
    </div>
</div>
<script>
(function () {
    var modal = document.getElementById('first-visit-modal');
    var close = modal.querySelector('.first-visit-close');
    var cookieName = 'll_notice_seen=';
    var hasSeenNotice = document.cookie.split(';').some(function (cookie) {
        return cookie.trim().indexOf(cookieName) === 0;
    });

    if (!hasSeenNotice) {
        modal.hidden = false;
    }

    close.addEventListener('click', function () {
        document.cookie = cookieName + '1; path=/; max-age=31536000; SameSite=Lax';
        modal.hidden = true;
    });
}());
</script>
