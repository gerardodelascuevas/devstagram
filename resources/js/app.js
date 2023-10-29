import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

// const dropzone = new Dropzone("#dropzone", {
//     dictDefaultMessage: "Sube aquí tu imagen",
//     acceptedFiles: ".png,.jpg,.jpeg,.gif",
//     addRemoveLinks: true,
//     dictRemoveFile: "Borrar Archivo",
//     maxFiles: 1,
//     uploadMultiple: false,
//     init: ()=> {
//         if(document.querySelector('[name="imagen"]').value.trim()){
//             const img = {};
//             img.size = 1234;
//             img.name = document.querySelector('[name="imagen"]').value;
//             console.log(111, img)
//             console.log(222, this)

//             this.options.addedfile.call(this, img);
//             this.options.thumbnail.call(this, img, `/uploads/${img.name}`);

//             img.previewEelement.classList.add('dz-success', 'dz-complete');
//         }
//     }
// });
const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube aquí tu imagen",
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: "Borrar Archivo",
    maxFiles: 1,
    uploadMultiple: false,

    init: function () {
        if (document.querySelector('[name="imagen"]').value.trim()) {
            const imagenPublicada = {};
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;

            this.options.addedfile.call(this, imagenPublicada);

            this.options.thumbnail.call(
                this,
                imagenPublicada,
                `/uploads/${imagenPublicada.name}`
            );

            imagenPublicada.previewElement.classList.add(
                "dz-success",
                "dz-complete"
            );
        }
    },
});

dropzone.on('sending', function(file, xhr, fomData){
    console.log(file)
})

dropzone.on('success', function(file, response){
    console.log(response.imagen);
    document.querySelector('[name="imagen"]').value = response.imagen;
})

dropzone.on('removedfile', ()=> {
    document.querySelector('[name="imagen]').value = '';
})
