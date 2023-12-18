<h3 id="Gallery" class="heading-text wow animate__animated animate__fadeInUp">Gallery</h3>
<div class="wrapper dflex-column justify-content-center align-items-center">
    <div class="m-gallery-control wow animate__animated animate__fadeInLeft">
        <ul class="btns dflex-row justify-content-center align-items-center">
            <li>All</li>
            <li>Warehouse</li>
            <li>Delivery</li>
            <li>Partners</li>
        </ul>
    </div>
    <div class="m-gallery-images wow animate__animated animate__fadeInRight">
        <?php foreach ($gallery as $gallery_img) : ?>
            <div data-unique-name="<?php echo $gallery_img['g_category']; ?>" class="m-gallery-img m-gallery-img-visible">
                <img src="<?php echo base_url('uploads/gallery/' . $gallery_img['g_img']); ?>" alt="<?php echo $gallery_img['g_category']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
    <div class="modal-container dflex-row justify-content-center align-items-center">
        <div class="modal-content dflex-row justify-content-between align-items-center">
            <i id="modal-img-close-btn" class="fa-solid fa-xmark fa-modal-close"></i>
            <i id="modal-img-left-btn" class="fa-solid fa-chevron-left fa-modal-type"></i>
            <img src="<?php echo base_url('public/user/assets/img/content/gallery/partners-img.jpg'); ?>" alt="Modal Image">
            <i id="modal-img-right-btn" class="fa-solid fa-chevron-right fa-modal-type"></i>
        </div>
    </div>
</div>