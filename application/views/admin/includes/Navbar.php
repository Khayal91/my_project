<nav class="navbar navbar-default navbar-mobile navbar-sticky bootsnav">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                <?php $current_segment = $this->uri->segment(2); ?>
                <li class="<?php echo str_contains($current_segment, 'dashboard') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('admin/dashboard'); ?>">
                        <i class="ti-home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="<?php echo str_contains($current_segment, 'logo') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('admin/logo-create'); ?>">
                        <i class="ti-star"></i>
                        Logo
                    </a>
                </li>
                <li class="dropdown <?php echo str_contains($current_segment, 'slider') ? 'active' : ''; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-sliders"></i>
                        Slider
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo str_contains($current_segment, 'slider-create') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url('admin/slider-create'); ?>">
                                <i class="fa fa-plus"></i>
                                Create
                            </a>
                        </li>
                        <li class="<?php echo str_contains($current_segment, 'slider-list') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url('admin/slider-list'); ?>">
                                <i class="fa fa-list-ul"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo str_contains($current_segment, 'about') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('admin/about-create'); ?>">
                        <i class="fa fa-drivers-license-o"></i>
                        About
                    </a>
                </li>
                <li class="dropdown <?php echo str_contains($current_segment, 'lending') ? 'active' : ''; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        Lending
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo str_contains($current_segment, 'lending-create') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url('admin/lending-create'); ?>">
                                <i class="fa fa-plus"></i>
                                Create
                            </a>
                        </li>
                        <li class="<?php echo str_contains($current_segment, 'lending-list') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url('admin/lending-list'); ?>">
                                <i class="fa fa-list-ul"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo str_contains($current_segment, 'service') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('admin/service-create'); ?>">
                        <i class="fa fa-sitemap"></i>
                        Service
                    </a>
                </li>
                <li class="<?php echo str_contains($current_segment, 'support') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('admin/support-create'); ?>">
                        <i class="fa fa-support"></i>
                        Support
                    </a>
                </li>
                <li class="dropdown <?php echo str_contains($current_segment, 'gallery') ? 'active' : ''; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-image"></i>
                        Gallery
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo str_contains($current_segment, 'gallery-create') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url('admin/gallery-create'); ?>">
                                <i class="fa fa-plus"></i>
                                Create
                            </a>
                        </li>
                        <li class="<?php echo str_contains($current_segment, 'gallery-list') ? 'active' : ''; ?>">
                            <a href="<?php echo base_url('admin/gallery-list'); ?>">
                                <i class="fa fa-list-ul"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo str_contains($current_segment, 'footer') ? 'active' : ''; ?>">
                    <a href="<?php echo base_url('admin/footer-create'); ?>">
                        <i class="fa fa-level-down"></i>
                        Footer
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/logout'); ?>" class="text-danger">
                        <i class="fa fa-user-times"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="clearfix"></div>
</header>