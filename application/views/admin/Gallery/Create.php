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
                                <h4>Gallery</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('admin/gallery-create-action'); ?>" method="POST" enctype="multipart/form-data" id="crud_form">
                                <div class="form-group">
                                    <label for="gallery_category_label">Gallery Category</label>
                                    <select name="gallery_category" class="form-control" id="gallery_category_label">
                                        <option value="warehouse">Warehouse</option>
                                        <option value="delivery">Delivery</option>
                                        <option value="partners">Partners</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gallery_img_label">Gallery Image</label>
                                    <input name="gallery_img" type="file" id="gallery_img_label">
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