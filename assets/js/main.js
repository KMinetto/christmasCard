// JavaScript for disabling form submissions if there are invalid fields
const title = document.getElementById('titleContent');

(function () {
    'use strict';

    window.addEventListener('load', () => {
        //Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        let validation = Array.prototype.filter.call(forms, (form) => {
            form.addEventListener('submit', (e) => {
                if (form.checkValidity() === false) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

const form = document.querySelector('form');

form.addEventListener('submit', (e) => {

    e.preventDefault();

    const formData = new FormData(form);

    fetch('assets/php/mail.php', {
        method: 'POST',
        body: formData
    })
        .then(res =>
            form.reset())
        .catch(error => {
            console.error(error);
        });

    fetch('wishCard.php', {
        method: 'POST',
        body: formData
    })
        .then(res => {

        })
        .then(data => {
        })
        .catch(error => {
            console.error(error);
        })
});