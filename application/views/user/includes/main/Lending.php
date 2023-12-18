<div class="m-lending dflex-row justify-content-center align-items-center">
    <?php foreach ($lending as $lending_item) : ?>
        <div class="m-l-block wow animate__animated animate__fadeInLeft" style="background-image: url('../uploads/lending/<?php echo $lending_item['l_img']; ?>');">
            <div class="m-l-b-overlay"></div>
            <i class="<?php echo $lending_item['l_icon']; ?> fa-flash-lending-type"></i>
            <h3><?php echo $lending_item['l_title']; ?></h3>
            <p>
                <?php echo $lending_item['l_desc']; ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>