
import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/**',
    '../files/**',
  ]);

import Editor from '@toast-ui/editor'
import '@toast-ui/editor/dist/toastui-editor.css';

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

// Initialize the editor
const editor = new Editor({
    el: document.querySelector('#editor'),
    initialEditType: 'markdown',
    previewStyle: 'vertical',
    height: '600px',
    usageStatistics: false, // Optional: Disable tracking
});

document.querySelector('#form').addEventListener('submit', e => {
  e.preventDefault();
  document.querySelector('#body').value = editor.getMarkdown();
  e.target.submit();
});

document.addEventListener('DOMContentLoaded', function () {
  // Attach a click event to the button, AÑADIR IMAGEN
  document.getElementById('uploadImageButton').addEventListener('click', function (e) {
      let formData = new FormData(), key;
      formData.append('img', document.getElementById('imgUpload').files[0]);

      // const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      // Create a FormData object to send the file
      // Send the Fetch request
      fetch('/uploadImg', {
        method: 'POST',
        body: formData,
      })
      .then(response => response.json())
      .then(data => {
          // Display the public URL of the stored file
          let img = document.getElementById('imageUrl').textContent = '<img src="' + data.url + '" alt="img" />';
          editor.insertText(img);
      })
      .catch(error => {
          // Handle errors if any
          console.error('Error:', error);
      });
  });

  // cancelar
  img = document.getElementById('imageUrl')
  document.getElementById('clearImageButton').addEventListener('click', function (e) {
    //verificar que tenga algo  
    if (img.textContent) 
      { 
        const file = img.textContent
        const match = file.match(/\/([^\/]+)\.jpg/);
        // console.log(match);
        const id = match

        fetch('/deleteImg', {
          method: 'DELETE',
          body: id,
        })
        .then(response => response.json())
        .then(data => {
            // Display the public URL of the stored file
            console.log(data.url);
            // editor.deleteSelection;
            img.textContent = ''
        })
        .catch(error => {
            // Handle errors if any
            console.error('Error:', error);
        });
      }
  });
});
