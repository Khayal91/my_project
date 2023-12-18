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
                                <h4>Lending</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url('admin/lending-edit-action/' . $lending_target['l_uid']); ?>" method="POST" enctype="multipart/form-data" id="crud_form">
                                <div class="form-group">
                                    <label for="lending_icon_label">Lending Icon</label>
                                    <input value="<?php echo $lending_target['l_icon']; ?>" name="lending_icon" type="text" class="form-control" id="lending_icon_label" placeholder="Enter lending icon">
                                </div>
                                <div class="form-group">
                                    <label for="lending_title_label">Lending Title</label>
                                    <input value="<?php echo $lending_target['l_title']; ?>" name="lending_title" type="text" class="form-control" id="lending_title_label" placeholder="Enter lending title">
                                </div>
                                <div class="form-group">
                                    <label for="lending_desc_label">Lending Description</label>
                                    <input value="<?php echo $lending_target['l_desc']; ?>" name="lending_desc" type="text" class="form-control" id="lending_desc_label" placeholder="Enter lending description">
                                </div>
                                <div class="form-group">
                                    <label for="lending_img_label">Lending Image</label>
                                    <input name="lending_img" type="file" id="lending_img_label">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" form="crud_form" class="btn btn-warning w-md m-b-5">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/includes/FooterScripts"); ?>