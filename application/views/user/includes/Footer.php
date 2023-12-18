<div class="scroll-up dflex-column justify-content-center align-items-center">
    <i class="fa-solid fa-angles-up fa-flesh-up"></i>
</div>
<div id="Contact" class="footer">
    <div class="f-header dflex-row justify-content-center align-items-center">
        <div class="wrapper wrapper-f-header dflex-row justify-content-between align-items-start wow animate__animated animate__fadeInUp">
            <div class="f-h-moreinfo dflex-column">
                <h3>Company summary</h3>
                <p><?php echo $footer["f_about"]; ?></p>
                <p><?php echo $footer["f_about_copyright"]; ?></p>
            </div>
            <div class="f-h-social dflex-column justify-content-start align-items-start">
                <h3>Keep connected</h3>
                <a href="<?php echo $footer['f_instagram_link']; ?>">
                    <div class="f-s-icons dflex-row justify-content-center align-items-center">
                        <i class="fa-brands fa-instagram fa-flash-social-footer"></i>
                        <p>Instagram</p>
                    </div>
                </a>
            </div>
            <div class="f-h-contact dflex-column justify-content-start align-items-start">
                <h3>Contact information</h3>
                <a href="tel:<?php echo $footer['f_number']; ?>">
                    <div class="f-c-icons dflex-row justify-content-center align-items-center">
                        <i class="fa-solid fa-phone fa-flash-contact-footer"></i>
                        <h3><?php echo $footer["f_number"]; ?></h3>
                    </div>
                </a>
                <a href="mailto:<?php echo $footer['f_mail']; ?>">
                    <div class="f-c-icons dflex-row justify-content-center align-items-center">
                        <i class="fa-solid fa-envelope fa-flash-contact-footer"></i>
                        <h3><?php echo $footer["f_mail"]; ?></h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>