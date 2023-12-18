<?php

class AdminModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function table_row_id($tableName, $idName)
    {
        $rows_count = $this->db->count_all_results($tableName, TRUE);
        if ($rows_count === 1) {
            return $this->db->get($tableName, 1)->row_array()[$idName];
        } else if ($rows_count > 1) {
            return $this->db->order_by($idName, "DESC")->get($tableName, 1)->row_array()[$idName];
        } else {
            return -1;
        }
    }

    public function get_admin($username)
    {
        return $this->db->where("a_username", $username)->get("admin")->row_array();
    }

    public function logo_insert($data)
    {
        $this->db->insert("logo", $data);
    }

    public function logo_update($id, $data)
    {
        $this->db->where("l_uid", $id)->update("logo", $data);
    }

    public function logo_delete($id)
    {
        $this->db->where("l_uid", $id)->delete("logo");
    }

    public function slider_insert($data)
    {
        $this->db->insert("slider", $data);
    }

    public function slider_update($id, $data)
    {
        $this->db->where("s_uid", $id)->update("slider", $data);
    }

    public function slider_get_all()
    {
        return $this->db->get("slider")->result_array();
    }

    public function slider_get_target($id)
    {
        return $this->db->where("s_uid", $id)->get("slider")->row_array();
    }

    public function slider_delete($id)
    {
        $this->db->where("s_uid", $id)->delete("slider");
    }

    public function about_insert($data)
    {
        $this->db->insert("about", $data);
    }

    public function about_update($id, $data)
    {
        $this->db->where("a_uid", $id)->update("about", $data);
    }

    public function about_get($id)
    {
        return $this->db->where("a_uid", $id)->get("about")->row_array();
    }

    public function about_delete($id)
    {
        $this->db->where("a_uid", $id)->delete("about");
    }

    public function service_insert($data)
    {
        $this->db->insert("service", $data);
    }

    public function service_update($id, $data)
    {
        $this->db->where("s_uid", $id)->update("service", $data);
    }

    public function service_get($id)
    {
        return $this->db->where("s_uid", $id)->get("service")->row_array();
    }

    public function service_delete($id)
    {
        $this->db->where("s_uid", $id)->delete("service");
    }

    public function support_insert($data)
    {
        $this->db->insert("support", $data);
    }

    public function support_update($id, $data)
    {
        $this->db->where("s_uid", $id)->update("support", $data);
    }

    public function support_get($id)
    {
        return $this->db->where("s_uid", $id)->get("support")->row_array();
    }

    public function support_delete($id)
    {
        $this->db->where("s_uid", $id)->delete("support");
    }

    public function footer_insert($data)
    {
        $this->db->insert("footer", $data);
    }

    public function footer_update($id, $data)
    {
        $this->db->where("f_uid", $id)->update("footer", $data);
    }

    public function footer_get($id)
    {
        return $this->db->where("f_uid", $id)->get("footer")->row_array();
    }

    public function footer_delete($id)
    {
        $this->db->where("f_uid", $id)->delete("footer");
    }

    public function lending_insert($data)
    {
        $this->db->insert("lending", $data);
    }

    public function lending_update($id, $data)
    {
        $this->db->where("l_uid", $id)->update("lending", $data);
    }

    public function lending_get_all()
    {
        return $this->db->get("lending")->result_array();
    }

    public function lending_get_target($id)
    {
        return $this->db->where("l_uid", $id)->get("lending")->row_array();
    }

    public function lending_delete($id)
    {
        $this->db->where("l_uid", $id)->delete("lending");
    }

    public function gallery_insert($data)
    {
        $this->db->insert("gallery", $data);
    }

    public function gallery_update($id, $data)
    {
        $this->db->where("g_uid", $id)->update("gallery", $data);
    }

    public function gallery_get_all()
    {
        return $this->db->get("gallery")->result_array();
    }

    public function gallery_get_target($id)
    {
        return $this->db->where("g_uid", $id)->get("gallery")->row_array();
    }

    public function gallery_delete($id)
    {
        $this->db->where("g_uid", $id)->delete("gallery");
    }
}
