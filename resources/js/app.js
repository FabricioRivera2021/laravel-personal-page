import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/**',
    '../files/**',
  ]);

import Alpine from 'alpinejs' 
window.Alpine = Alpine
Alpine.start()

import Editor from '@toast-ui/editor'
import '@toast-ui/editor/dist/toastui-editor.css';

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
  //-----------------------------------------------Previsualizar la imagen------------------------------------------------------
  document.getElementById('imgUpload').addEventListener('change', function (e) {
      e.preventDefault();
      let formData = new FormData(), key;
      formData.append('img', document.getElementById('imgUpload').files[0]);

      // const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      // Create a FormData object to send the file
      // Send the Fetch request
      fetch('/uploadImg', { //esta ruta guarda la imagen y devuelve la ruta donde quedo guardada
        method: 'POST',
        body: formData,
      })
      .then(response => response.json())
      .then(data => {
          // A esta altura la imagen ya esta guardada en el storage
          let imgMarkdown = document.getElementById('imageUrl').textContent = '<img src="' + data.url + '" alt="img" />';
          let imgPrev = document.getElementById('imagePreview').src = data.url;
          //-----------------------------------------------Añadir al markdown----------------------------------------------------------
          document.getElementById('uploadImageButton').addEventListener('click', function (e) {   
              e.preventDefault();
              if (imgPrev) {
                editor.insertText(imgMarkdown);

                imgMarkdown = ''
                formData.delete('img')
                return document.getElementById('imagePreview').src = '';
              }
          });
          document.getElementById('clearImageButton').addEventListener('click', function (e) {   
              e.preventDefault();
              if (imgPrev) {
                let formData = new FormData();
                formData.append('_method', "DELETE");

                const id = imgPrev.replace('/storage/img', '');
                // const match = imgPrev.match(/\/([^\/]+)\.jpg/);
                // const id = match
        
                fetch('/deleteImg' + id, {
                  method: 'POST',
                  body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    // Display the public URL of the stored file
                    console.log(data);
                })
                .catch(error => {
                    // Handle errors if any
                    console.error('Error:', error);
                });
                return document.getElementById('imagePreview').src = '';
              }
          });
      })
      .catch(error => {
          // Handle errors if any
          console.error('Error:', error);
      });

      this.removeEventListener
  });

  // cancelar
  // document.getElementById('clearImageButton').addEventListener('click', function (e) {
  //   img = document.getElementById('imageUrl')
  //   //verificar que tenga algo  
  //   if (img.textContent) 
  //     { 
  //       const file = img.textContent
  //       const match = file.match(/\/([^\/]+)\.jpg/);
  //       // console.log(match);
  //       const id = match

  //       fetch('/deleteImg', {
  //         method: 'DELETE',
  //         body: id,
  //       })
  //       .then(response => response.json())
  //       .then(data => {
  //           // Display the public URL of the stored file
  //           console.log(data.url);
  //           // editor.deleteSelection;
  //           img.textContent = ''
  //       })
  //       .catch(error => {
  //           // Handle errors if any
  //           console.error('Error:', error);
  //       });
  //     }
  // });
});
