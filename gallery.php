<?php include('includes/header.php'); ?>

<style>
    /* Custom CSS for Gallery */
.gallery-item {
    opacity: 0;
    transition: opacity 0.3s;
}

.gallery-item a:hover {
    transform: scale(1.05);
}

/* Custom CSS for Modals */
.modal-body img {
    max-width: 100%;
    height: auto;
}

/* Custom CSS for Animations */
.fade-in {
    animation: fadeIn 0.5s;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

</style>
<div class="container">
    <h1 class="my-4 text-center">Advanced Bootstrap 5 Animated Gallery</h1>

    <div class="row">
        <!-- Image 1 -->
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="#modal1" data-bs-toggle="modal">
                    <img src="./assets/img/slide1.png" alt="Image 1" class="img-fluid">
                </a>
            </div>
        </div>

        <!-- Image 2 -->
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="#modal2" data-bs-toggle="modal">
                    <img src="./assets/img/slide2.png" alt="Image 2" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="#modal2" data-bs-toggle="modal">
                    <img src="./assets/img/slide3.jpg" alt="Image 2" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="#modal2" data-bs-toggle="modal">
                    <img src="./assets/img/slide4.jpg" alt="Image 2" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gallery-item">
                <a href="#modal2" data-bs-toggle="modal">
                    <img src="./assets/img/slide5.jpg" alt="Image 2" class="img-fluid">
                </a>
            </div>
        </div>

        <!-- Add more images as needed -->
    </div>
</div>

<!-- Modal for Image 1 -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img src="./assets/img/slide1.png" alt="Image 1" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Modal for Image 2 -->
<div class="modal fade" id="modal2" tabindex="-1"          aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img src="./assets/img/slide2.png" alt="Image 2" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1"          aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img src="./assets/img/slide3.jpg" alt="Image 2" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1"          aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img src="./assets/img/slide4.jpg" alt="Image 2" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1"          aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img src="./assets/img/slide5.jpg" alt="Image 2" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- Add modals for more images as needed -->

<script>// Add fade-in effect to gallery items
document.addEventListener("DOMContentLoaded", function () {
    const galleryItems = document.querySelectorAll(".gallery-item");
    galleryItems.forEach((item, index) => {
        setTimeout(() => {
            item.style.opacity = "1";
            item.classList.add("fade-in");
        }, index * 200); // Delay the animation for each item
    });
});
</script>

<?php include('includes/footer.php'); ?>