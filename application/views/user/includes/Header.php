<div id="Home" class="header">
    <div class="h-navbar dflex-column justify-content-center align-items-center">
        <div class="wrapper wrapper-h-navbar dflex-row justify-content-between align-items-center">
            <div class="h-n-logo dflex-column justify-content-center align-items-center animate__animated animate__fadeInLeft">
                <a href="#Home">
                    <img src="<?php echo base_url('uploads/logo/' . $logo['l_img']); ?>" alt="Flash Logo">
                </a>
            </div>
            <div class="h-n-menu dflex-row justify-content-center align-items-center animate__animated animate__fadeInRight">
                <ul class="dflex-row justify-content-center align-items-center">
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#AboutUs">About us</a></li>
                    <li><a href="#Service">Service</a></li>
                    <li><a href="#Gallery">Gallery</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="h-description dflex-column justify-content-center align-items-center wow animate__animated animate__zoomIn">
        <h3><?php echo $about["a_slogan"]; ?></h3>
        <h4 id="typing-text"></h4>
    </div>
    <div class="h-info dflex-column justify-content-center align-items-center">
        <div class="wrapper wrapper-h-info dflex-row justify-content-between align-items-center">
            <div class="h-info-block dflex-row justify-content-center align-items-center wow animate__animated animate__fadeInLeft">
                <i class="fa-solid fa-clock-rotate-left fa-flash-info-type"></i>
                <div class="h-info-block-column dflex-column justify-content-start align-items-start">
                    <p>Support</p>
                    <a><?php echo $support["s_time"]; ?></a>
                    <a><?php echo $support["s_current"]; ?></a>
                </div>
            </div>
            <div class="h-info-block dflex-row justify-content-center align-items-center wow animate__animated animate__fadeInRight">
                <i class="fa-solid fa-headset fa-flash-info-type"></i>
                <div class="h-info-block-column dflex-column justify-content-start align-items-start">
                    <p>Contact us</p>
                    <a href="tel:<?php echo $support['s_number']; ?>"><?php echo $support['s_number']; ?></a>
                    <a href="mailto:<?php echo $support['s_email']; ?>"><?php echo $support['s_email']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>