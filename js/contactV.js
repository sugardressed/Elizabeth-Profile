console.log('contactV.js loaded');

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phone');

    function formatPhone(value) {
        const digits = value.replace(/\D/g, '').substring(0, 10);

        if (digits.length === 0) return '';
        if (digits.length < 4) return '(' + digits;
        if (digits.length < 7) return '(' + digits.substring(0, 3) + ') ' + digits.substring(3);
        return '(' + digits.substring(0, 3) + ') ' + digits.substring(3, 6) + '-' + digits.substring(6, 10);
    }

    function isValidPhone(value) {
        const digits = value.replace(/\D/g, '');
        return digits.length === 10;
    }

    if (!form || !phoneInput) {
        console.log('Form or phone input not found');
        return;
    }

    phoneInput.addEventListener('input', function () {
        const cursorAtEnd = this.selectionStart === this.value.length;
        this.value = formatPhone(this.value);

        if (cursorAtEnd) {
            this.setSelectionRange(this.value.length, this.value.length);
        }

        if (this.value.trim() === '') {
            this.setCustomValidity('Please enter your phone number.');
            this.classList.remove('is-valid', 'is-invalid');
        } else if (!isValidPhone(this.value)) {
            this.setCustomValidity('Please enter a valid 10-digit phone number.');
            this.classList.add('is-invalid');
            this.classList.remove('is-valid');
        } else {
            this.setCustomValidity('');
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
    });

    form.addEventListener('submit', function (event) {
        const inputs = form.querySelectorAll('input, textarea');

        inputs.forEach(function (input) {
            if (input.id === 'phone') {
                if (input.value.trim() === '') {
                    input.setCustomValidity('Please enter your phone number.');
                } else if (!isValidPhone(input.value)) {
                    input.setCustomValidity('Please enter a valid 10-digit phone number.');
                } else {
                    input.setCustomValidity('');
                }
            }

            if (!input.checkValidity()) {
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');
            } else if (input.type !== 'hidden' && input.name !== 'website') {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            }
        });

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            form.reportValidity();
        }
    });
});