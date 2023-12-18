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
                                <h4>Slider</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('admin/slider-create-action'); ?>" method="POST" enctype="multipart/form-data" id="crud_form">
                                <div class="form-group">
                                    <label for="slider_name_label">Slider Name</label>
                                    <input name="slider_name" type="text" class="form-control" id="slider_name_label" placeholder="Enter slider name">
                                </div>
                                <div class="form-group">
                                    <label for="slider_img_label">Slider Image</label>
                                    <input name="slider_img" type="file" id="slider_img_label">
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