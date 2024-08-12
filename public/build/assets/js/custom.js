// Image preview
document.getElementById('imageUpload').addEventListener('change', function(event) {
    var reader = new FileReader();
    var imagePreview = document.getElementById('imagePreview');

    reader.onload = function() {
        imagePreview.src = reader.result;
        imagePreview.style.display = 'block';
    };

    if (event.target.files[0]) {
        reader.readAsDataURL(event.target.files[0]);
    } else {
        imagePreview.style.display = 'none';
    }
});


document.addEventListener('livewire:load', function () {
    Livewire.on('swal', (event) => {
        Swal.fire(event);
    });

    const imageInput = document.getElementById('imageUpload');
    const imagePreview = document.getElementById('imagePreview');

    imageInput.addEventListener('change', () => {
        const file = imageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.style.display = 'none';
        }
    });
});

