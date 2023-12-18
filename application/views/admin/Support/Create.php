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
                                <h4>Support</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('admin/support-create-action'); ?>" method="POST" enctype="multipart/form-data" id="crud_form">
                                <div class="form-group">
                                    <label for="support_time_label">Time</label>
                                    <input name="support_time" type="text" class="form-control" id="support_time_label" placeholder="Enter support time">
                                </div>
                                <div class="form-group">
                                    <label for="support_current_label">Current</label>
                                    <input name="support_current" type="text" class="form-control" id="support_current_label" placeholder="Enter support current">
                                </div>
                                <div class="form-group">
                                    <label for="support_number_label">Number</label>
                                    <input name="support_number" type="text" class="form-control" id="support_number_label" placeholder="Enter support number">
                                </div>
                                <div class="form-group">
                                    <label for="support_email_label">Email</label>
                                    <input name="support_email" type="text" class="form-control" id="support_email_label" placeholder="Enter support email">
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