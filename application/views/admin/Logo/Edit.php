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
                                <h4>Logo</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('admin/logo-edit-action'); ?>" method="POST" enctype="multipart/form-data" id="crud_form">
                                <div class="form-group">
                                    <label for="logo_file_label">Logo</label>
                                    <input name="logo_file" type="file" id="logo_file_label">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" form="crud_form" class="btn btn-warning w-md m-b-5">Edit</button>
                            <a href="<?php echo base_url('admin/logo-delete'); ?>" class="btn btn-danger w-md m-b-5">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/includes/FooterScripts"); ?>