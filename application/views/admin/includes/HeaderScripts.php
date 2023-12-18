<?php
if (!$this->session->has_userdata("admin_auth")) {
    redirect(base_url("admin/login"));
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
    <link href="<?php echo base_url('public/admin/assets/dist/css/base.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url('public/admin/assets/dist/css/component_ui.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('public/admin/assets/dist/css/custom.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper animsition">
        <header class="main-header">