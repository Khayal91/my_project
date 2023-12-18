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
                                <h4>Slider List</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table">
                                <table id="crud_list" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Icon</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Img</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $counter = 1;
                                        foreach ($lending_list as $lending_item) :
                                        ?>
                                            <tr>
                                                <td><?php echo $counter++; ?></td>
                                                <td><?php echo $lending_item["l_icon"]; ?></td>
                                                <td><?php echo $lending_item["l_title"]; ?></td>
                                                <td><?php echo $lending_item["l_desc"]; ?></td>
                                                <td>
                                                    <img class="img-rounded" width="64" height="64" src="<?php echo base_url('uploads/lending/' . $lending_item['l_img']); ?>" alt="ListItem">
                                                </td>
                                                <td style="width: 100px;">
                                                    <a href="<?php echo base_url('admin/lending-edit/' . $lending_item["l_uid"]); ?>">
                                                        <button class="btn btn-warning btn-sm">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </button>
                                                    </a>
                                                    <a href="<?php echo base_url('admin/lending-delete/' . $lending_item["l_uid"]); ?>">
                                                        <button class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash-o"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/includes/FooterScripts"); ?>
<script src="<?php echo base_url('public/admin/assets/plugins/datatable/dataTables.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
        "use strict";
        $("#crud_list").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            buttons: [{
                    extend: 'copy',
                    className: 'btn-sm'
                },
                {
                    extend: 'csv',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'print',
                    className: 'btn-sm'
                }
            ]
        });
    });
</script>