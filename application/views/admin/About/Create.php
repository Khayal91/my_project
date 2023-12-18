<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>About</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('admin/about-create-action'); ?>" method="POST" enctype="multipart/form-data" id="crud_form">
                                <div class="form-group">
                                    <label for="about_desc_label">About Description</label>
                                    <textarea name="about_desc" id="about_desc_label" rows="3" class="form-control" placeholder="Enter about description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="about_slider_slogan_label">Slider Slogan</label>
                                    <input name="about_slider_slogan" type="text" class="form-control" id="about_slider_slogan_label" placeholder="Enter about slider slogan">
                                </div>
                                <div class="form-group">
                                    <label for="about_image_label">About Image</label>
                                    <input name="about_image" type="file" id="about_image_label">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" form="crud_form" class="btn btn-success w-md m-b-5">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/includes/FooterScripts"); ?>