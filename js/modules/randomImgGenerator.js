//==============================
// Random Image Demo
//==============================
const demoImage = document.getElementById('demo-image');
const demoImageStatus = document.getElementById('demo-image-status');
const demoNewImageButton = document.getElementById('demo-new-image');

// Only run this demo on pages containing its HTML.
if (demoImage && demoImageStatus && demoNewImageButton) {

    function loadDemoImage() {
        const seed = Math.floor(Math.random() * 1000000);

        demoImage.hidden = true;
        demoImageStatus.textContent = 'Loading...';
        demoNewImageButton.disabled = true;

        demoImage.src = `https://picsum.photos/seed/${seed}/900/600`;
    }

    demoImage.addEventListener('load', () => {
        demoImage.hidden = false;
        demoImageStatus.textContent = 'Photo loaded. Press New Image for a new image.';
        demoNewImageButton.disabled = false;
    });

    demoImage.addEventListener('error', () => {
        demoImage.hidden = true;
        demoImageStatus.textContent = 'Unable to load the photo. Please try again.';
        demoNewImageButton.disabled = false;
    });

    demoNewImageButton.addEventListener('click', loadDemoImage);

    loadDemoImage();
}
