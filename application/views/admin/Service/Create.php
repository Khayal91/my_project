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
                                <h4>Service</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('admin/service-create-action'); ?>" method="POST" enctype="multipart/form-data" id="crud_form">
                                <div class="form-group">
                                    <label for="employees_number_label">Employees Number</label>
                                    <input name="employees_number" class="form-control" type="number" id="employees_number_label">
                                </div>
                                <div class="form-group">
                                    <label for="miles_number_label">Miles Number</label>
                                    <input name="miles_number" class="form-control" type="number" id="miles_number_label">
                                </div>
                                <div class="form-group">
                                    <label for="customers_number_label">Customers Number</label>
                                    <input name="customers_number" class="form-control" type="number" id="customers_number_label">
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