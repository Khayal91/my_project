<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function logo_get()
    {
        return $this->db->order_by("l_uid", "DESC")->get("logo", 1)->row_array();
    }

    public function slider_get()
    {
        return $this->db->order_by("s_uid", "DESC")->get("slider")->result_array();
    }

    public function support_get()
    {
        return $this->db->order_by("s_uid", "DESC")->get("support", 1)->row_array();
    }

    public function about_get()
    {
        return $this->db->order_by("a_uid", "DESC")->get("about", 1)->row_array();
    }

    public function service_get()
    {
        return $this->db->order_by("s_uid", "DESC")->get("service", 1)->row_array();
    }

    public function lending_get()
    {
        return $this->db->order_by("l_uid", "DESC")->get("lending")->result_array();
    }
    public function gallery_get()
    {
        return $this->db->order_by("g_uid", "DESC")->get("gallery")->result_array();
    }

    public function footer_get()
    {
        return $this->db->order_by("f_uid", "DESC")->get("footer", 1)->row_array();
    }
}
