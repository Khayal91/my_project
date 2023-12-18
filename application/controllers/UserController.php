<?php

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }

    public function index()
    {
        $data = [
            "logo"    => $this->UserModel->logo_get(),
            "support" => $this->UserModel->support_get(),
            "about"   => $this->UserModel->about_get(),
            "service" => $this->UserModel->service_get(),
            "lending" => $this->UserModel->lending_get(),
            "gallery" => $this->UserModel->gallery_get(),
            "footer"  => $this->UserModel->footer_get()
        ];
        $this->load->view("user/Index", $data);
    }

    public function slider_get_action()
    {
        print_r(json_encode($this->UserModel->slider_get()));
    }
}
