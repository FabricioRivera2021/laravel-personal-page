
import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/**',
    '../files/**',
  ]);
  
import Editor from '@toast-ui/editor'
import '@toast-ui/editor/dist/toastui-editor.css';

// Step 1: Define the user plugin function for image upload
function imageUploadPlugin(e) {
  // This function will be called with the editor instance
  console.log('test')
  console.log(e);
  // return {
  //   // Define a function to handle image uploads
  //   uploadImageToServer(imageUrl) {
  //     const formData = new FormData();
  //     formData.append('image', imageUrl);

  //     return fetch('https://your-server/upload-image-endpoint', {
  //       method: 'POST',
  //       body: formData,
  //     })
  //     .then(response => response.json())
  //     .then(data => data.url)
  //     .catch(error => {
  //       console.error('Image upload error:', error);
  //       return imageUrl; // Return the original URL in case of an error
  //     });
  //   },
    // Override the default image rendering logic
    // toHTMLRenderers: {
    //   image(url) {
    //     // Call the custom image upload function
    //     const uploadedImageUrl = this.uploadImageToServer(url);

    //     // Return the image tag with the uploaded image URL
    //     return `<img src="${uploadedImageUrl}" alt="Uploaded Image" style="max-width:100%;" />`;
    //   },
    // },
  // };
  return 'hola';
}

const content = [
  // Your Markdown content here...
].join('\n');


// Initialize the editor
// const editor = new Editor({
//     el: document.querySelector('#editor'),
//     initialEditType: 'markdown',
//     previewStyle: 'vertical',
//     height: '600px',
//     usageStatistics: false, // Optional: Disable tracking
//     toolbarItems: [
//       ['heading', 'bold', 'italic', 'strike'],
//       ['hr', 'quote'],
//       ['ul', 'ol', 'task', 'indent', 'outdent'],
//       ['table', 'image', 'link'],
//       ['code', 'codeblock'],
//       // Using Option: Customize the last button
//       [{
//         el: createLastButton(),
//       }]
//     ],
//     plugins: [imageUploadPlugin],
//     hooks: {
//       addImageBlobHook: (blob, callback) => {
//         const uploadedImageURL = uploadImage(blob);
//         callback(uploadedImageURL, "alt text");
//         return false;
//       }
      // // Add Image Blob Hook
      // addImageBlobHook: (blob, callback) => {
      //   // Simulate image upload to a server endpoint (replace with your actual upload logic)
      //   const formData = new FormData();
      //   formData.append('image', blob);

      //   fetch('https://your-server/upload-endpoint', {
      //     method: 'POST',
      //     body: formData,
      //   })
      //   .then(response => response.json())
      //   .then(data => {
      //     // Callback with the URL of the uploaded image
      //     callback(data.url);
      //   })
      //   .catch(error => {
      //     console.error('Image upload error:', error);
      //   });
      // },
//     },
// });

editor = new Editor({
  el: document.querySelector('#editor'),
});

editor.removeToolbarItem('image')
let insertBodyHtml = document.createElement('div')
insertBodyHtml.innerHTML = `
      <label>Image URL</label>
      <input
        id="imageUrl"
        name='img'
        type="image"
      />
      <br/><br/>
      <div class="toastui-editor-button-container">
        <button type="button" class="toastui-editor-close-button" onClick="javascript:editor.eventEmitter.emit('closePopup'); editor.focus();">
          Cancel
        </button>
        <button type="button" class="toastui-editor-ok-button" onClick="javascript:editor.exec('addImage', { imageUrl: document.getElementById('imageUrl').value, altText: document.getElementById('imageAltText').value }); editor.eventEmitter.emit('closePopup'); editor.focus();">
          Insert
        </button>
      </div>
      `

editor.insertToolbarItem({ groupIndex: 3, itemIndex: 0 }, {
  name: 'imageUrl',
  tooltip: 'Insert image',
  popup: {
      body: insertBodyHtml
  },
  text: '',
  className: 'image toastui-editor-toolbar-icons',
  style: {  }
});




// //crear el boton de subir imagen
// function createLastButton() {
//   const button = document.createElement('button');
//   button.className = 'toastui-editor-toolbar-icons last whitespace-nowrap';
//   button.style.backgroundImage = 'none';
//   button.style.margin = '0';
//   button.type = 'button';
//   button.innerHTML = `<i>Image</i>`;
//   button.addEventListener('click', () => {
//     // editor.eventEmitter.emit('openPopup');
//     editor.exec('bold'); // Trigger the custom command directly
//   });

//   return button;
// }


document.querySelector('#form').addEventListener('submit', e => {
  e.preventDefault();
  document.querySelector('#body').value = editor.getMarkdown();
  e.target.submit();
});