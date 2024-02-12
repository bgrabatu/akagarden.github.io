/**
 * ===================================
 *    Product Description Editor 
 * ===================================
*/
var quill = new Quill('#project-description', {
    modules: {
        toolbar: [
            [{ 'header': [false, 6, 5, 4, 3, 2, 1] }],
            [{ 'font': [] }],
            ['bold', 'italic', 'underline'],
            ['image', { 'link': 'a' }, 'code-block',],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'list': 'check' }], // Numaralı ve düzenli liste seçenekleri
            [{ 'align': [] }]
        ]
    },
    placeholder: '',
    theme: 'snow'  // or 'bubble'
});

var productDescriptionInputForm = document.querySelector('#product_add_form');
var productDescriptionInput = document.getElementById('project-description-quill');

productDescriptionInputForm.addEventListener('submit', function (e) {
    e.preventDefault();
    var quillContentProductDescription = quill.root.innerHTML; // Quill içeriğini al
    productDescriptionInput.value = quillContentProductDescription; // Gizli input'a koy
    productDescriptionInputForm.submit();
});

var quill2 = new Quill('#project-result-description', {
    modules: {
        toolbar: [
            [{ 'header': [false, 6, 5, 4, 3, 2, 1] }],
            [{ 'font': [] }],
            ['bold', 'italic', 'underline'],
            ['image', { 'link': 'a' }, 'code-block',],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'list': 'check' }], // Numaralı ve düzenli liste seçenekleri
            [{ 'align': [] }]
        ]
    },
    placeholder: '',
    theme: 'snow'  // or 'bubble'
});

var productAdditionalTextForm = document.querySelector('#product_add_form');
var productAdditionalTextInput = document.getElementById('project-result-description-quill');

productAdditionalTextForm.addEventListener('submit', function (e) {
    e.preventDefault();
    var quillContentProductAdditionalText = quill2.root.innerHTML; // Quill içeriğini al
    productAdditionalTextInput.value = quillContentProductAdditionalText; // Gizli input'a koy
    productAdditionalTextForm.submit();
});





/**
 * ====================
 *      File Pond 
 * ====================
*/

// We want to preview images, so we register
// the Image Preview plugin, We also register 
// exif orientation (to correct mobile image
// orientation) and size validation, to prevent
// large files from being added
document.addEventListener('DOMContentLoaded', function () {
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize
    );

    var ecommerce = FilePond.create(document.querySelector('.file-upload-single'));

    FilePond.parse(document.body).on('fileadd', function (e) {
        // Dosya seçildiğinde buradaki kod çalışacak
        console.log('Dosya seçildi: ' + e.file.filename);
        // Dosya seçildikten sonra bu dosyayı işlemek veya diğer işlemleri yapmak için burada devam edebilirsiniz
    });
});


/**
 * =====================
 *      Product Tags 
 * =====================
*/
