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

//update image preview
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


// copy to clipboard uuid

function copyToClipboard(text) {
    var tempInput = document.createElement("input");
    tempInput.style.position = "absolute";
    tempInput.style.left = "-9999px";
    tempInput.value = text;

    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);

    Swal.fire({
        title: 'Copied!',
        text: `Copied to clipboard: ${text}`,
        icon: 'success',
        confirmButtonColor: '#3085d6',
    });
}

