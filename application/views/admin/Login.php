<?php
if ($this->session->has_userdata("admin_auth")) {
    redirect(base_url("admin/dashboard"));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FLASH.AZ - ADMIN PANEL</title>
    <link rel="shortcut icon" href="<?php echo base_url('public/admin/assets/dist/img/ico/favicon.png'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url('public/admin/assets/dist/img/ico/apple-touch-icon-57-precomposed.png'); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url('public/admin/assets/dist/img/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url('public/admin/assets/dist/img/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url('public/admin/assets/dist/img/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link href="<?php echo base_url('public/admin/assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('public/admin/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('public/admin/assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('public/admin/assets/dist/css/component_ui.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('public/admin/assets/dist/css/custom.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="login-wrapper">
        <div class="container-center">
            <div class="panel panel-bd">
                <div class="panel-body">
                    <form action="<?php echo base_url('admin/login-action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                        <div class="form-group">
                            <label for="admin_username_label" class="control-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input name="admin_username" type="text" class="form-control" id="admin_username_label" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="admin_password_label" class="control-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-key"></i>
                                </span>
                                <input name="admin_password" type="password" class="form-control" id="admin_password_label" placeholder="******">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('public/admin/assets/plugins/jQuery/jquery-1.12.4.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('public/admin/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
</body>

</html>