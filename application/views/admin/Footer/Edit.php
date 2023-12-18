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
                                <h4>Footer</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('admin/footer-edit-action'); ?>" method="POST" enctype="multipart/form-data" id="crud_form">
                                <div class="form-group">
                                    <label for="footer_about_label">About</label>
                                    <input value="<?php echo $footer_data['f_about']; ?>" name="footer_about" type="text" class="form-control" id="footer_about_label" placeholder="Enter footer about">
                                </div>
                                <div class="form-group">
                                    <label for="footer_about_copyright_label">About Copyright</label>
                                    <input value="<?php echo $footer_data['f_about_copyright']; ?>" name="footer_about_copyright" type="text" class="form-control" id="footer_about_copyright_label" placeholder="Enter footer about copyright">
                                </div>
                                <div class="form-group">
                                    <label for="footer_instagram_link_label">Instagram Link</label>
                                    <input value="<?php echo $footer_data['f_instagram_link']; ?>" name="footer_instagram_link" type="text" class="form-control" id="footer_instagram_link_label" placeholder="Enter footer instagram link">
                                </div>
                                <div class="form-group">
                                    <label for="footer_number_label">Number</label>
                                    <input value="<?php echo $footer_data['f_number']; ?>" name="footer_number" type="text" class="form-control" id="footer_number_label" placeholder="Enter footer number">
                                </div>
                                <div class="form-group">
                                    <label for="footer_email_label">Email</label>
                                    <input value="<?php echo $footer_data['f_mail']; ?>" name="footer_email" type="text" class="form-control" id="footer_email_label" placeholder="Enter footer email">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" form="crud_form" class="btn btn-warning w-md m-b-5">Edit</button>
                            <a href="<?php echo base_url('admin/footer-delete'); ?>" class="btn btn-danger w-md m-b-5">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/includes/FooterScripts"); ?>