import './bootstrap';

import bootstrap from 'bootstrap';
import Alpine from 'alpinejs';
import Quill from 'quill';

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

const editorElt = document.querySelector('.rich-editor');
if (editorElt) {
    const form = document.getElementById('form_edit');
    const toolbarOptions = [
        ['bold', 'italic'],        // toggled buttons
        
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        
        [{ 'header': [2, 3, 4, false] }],
        [ 'link', 'image', 'video' ],          // add's image support
        [{ 'color': [] }],          // dropdown with defaults from theme
        [{ 'align': [] }],

        ['clean']                                         // remove formatting button
    ];
    const editor = new Quill(editorElt, {
        modules: {
            toolbar: toolbarOptions,
        },
        theme: 'snow'
    });
    const hiddenField = document.getElementById('content_hidden_field');

    form.addEventListener('submit', (e) => {
        hiddenField.value = editor.root.innerHTML; 
    });
    
}
