<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route["404_override"]                     = "";
$route["translate_uri_dashes"]             = FALSE;

$route["default_controller"]               = "UserController/index";
$route["api/slider_get"]                   = "UserController/slider_get_action";

$route["admin/login"]                      = "AdminController/login";
$route["admin/login-action"]               = "AdminController/login_action";
$route["admin/logout"]                     = "AdminController/logout";

$route["admin/dashboard"]                  = "AdminController/index";

$route["admin/logo-create"]                = "AdminController/logo_create";
$route["admin/logo-create-action"]         = "AdminController/logo_create_action";
$route["admin/logo-edit"]                  = "AdminController/logo_edit";
$route["admin/logo-edit-action"]           = "AdminController/logo_edit_action";
$route["admin/logo-delete"]                = "AdminController/logo_delete";

$route["admin/slider-create"]              = "AdminController/slider_create";
$route["admin/slider-create-action"]       = "AdminController/slider_create_action";
$route["admin/slider-list"]                = "AdminController/slider_list";
$route["admin/slider-edit/(.*)"]           = "AdminController/slider_edit/$1";
$route["admin/slider-edit-action/(.*)"]    = "AdminController/slider_edit_action/$1";
$route["admin/slider-delete/(.*)"]         = "AdminController/slider_delete/$1";

$route["admin/about-create"]               = "AdminController/about_create";
$route["admin/about-create-action"]        = "AdminController/about_create_action";
$route["admin/about-edit"]                 = "AdminController/about_edit";
$route["admin/about-edit-action"]          = "AdminController/about_edit_action";
$route["admin/about-delete"]               = "AdminController/about_delete";

$route["admin/lending-create"]             = "AdminController/lending_create";
$route["admin/lending-create-action"]      = "AdminController/lending_create_action";
$route["admin/lending-list"]               = "AdminController/lending_list";
$route["admin/lending-edit/(.*)"]          = "AdminController/lending_edit/$1";
$route["admin/lending-edit-action/(.*)"]   = "AdminController/lending_edit_action/$1";
$route["admin/lending-delete/(.*)"]        = "AdminController/lending_delete/$1";

$route["admin/service-create"]             = "AdminController/service_create";
$route["admin/service-create-action"]      = "AdminController/service_create_action";
$route["admin/service-edit"]               = "AdminController/service_edit";
$route["admin/service-edit-action"]        = "AdminController/service_edit_action";
$route["admin/service-delete"]             = "AdminController/service_delete";

$route["admin/support-create"]             = "AdminController/support_create";
$route["admin/support-create-action"]      = "AdminController/support_create_action";
$route["admin/support-edit"]               = "AdminController/support_edit";
$route["admin/support-edit-action"]        = "AdminController/support_edit_action";
$route["admin/support-delete"]             = "AdminController/support_delete";

$route["admin/gallery-create"]             = "AdminController/gallery_create";
$route["admin/gallery-create-action"]      = "AdminController/gallery_create_action";
$route["admin/gallery-list"]               = "AdminController/gallery_list";
$route["admin/gallery-edit/(.*)"]          = "AdminController/gallery_edit/$1";
$route["admin/gallery-edit-action/(.*)"]   = "AdminController/gallery_edit_action/$1";
$route["admin/gallery-delete/(.*)"]        = "AdminController/gallery_delete/$1";

$route["admin/footer-create"]              = "AdminController/footer_create";
$route["admin/footer-create-action"]       = "AdminController/footer_create_action";
$route["admin/footer-edit"]                = "AdminController/footer_edit";
$route["admin/footer-edit-action"]         = "AdminController/footer_edit_action";
$route["admin/footer-delete"]              = "AdminController/footer_delete";
