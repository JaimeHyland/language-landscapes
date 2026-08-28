(function () {
    function decode(value) {
        return value.split(',').map(function (part) {
            return String.fromCharCode(Number(part));
        }).join('');
    }

    document.querySelectorAll('[data-contact-email]').forEach(function (element) {
        var address = decode(element.getAttribute('data-contact-email'));
        element.textContent = address;
        if (element.tagName.toLowerCase() === 'a') {
            element.setAttribute('href', 'mailto:' + address);
        }
    });

    document.querySelectorAll('[data-contact-phone]').forEach(function (element) {
        element.textContent = decode(element.getAttribute('data-contact-phone'));
    });

    document.querySelectorAll('.contact-form').forEach(function (form) {
        var email = form.querySelector('[name="email"]');
        var message = form.querySelector('[name="message"]');
        var submit = form.querySelector('[type="submit"]');

        if (!email || !message || !submit) {
            return;
        }

        function updateSubmitState() {
            submit.disabled = !email.checkValidity() || message.value.trim().length < 1;
        }

        email.addEventListener('input', updateSubmitState);
        message.addEventListener('input', updateSubmitState);
        updateSubmitState();
    });
}());
