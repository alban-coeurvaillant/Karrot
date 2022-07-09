import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const deleteForms = document.querySelectorAll('form.delete-form');
deleteForms.forEach(form => {
    form.addEventListener('submit', evt => {
        if (!confirm('Delete ?')) {
            evt.preventDefault();
            evt.stopPropagation();
        }
    });
});
