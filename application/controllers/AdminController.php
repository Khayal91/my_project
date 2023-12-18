<?php

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    public function index()
    {
        $this->load->view("admin/Index");
    }

    public function login()
    {
        $this->load->view("admin/Login");
    }

    public function login_action()
    {
        $admin_username = $this->input->post("admin_username", TRUE);
        $admin_password = hash("md5", $this->input->post("admin_password", TRUE));

        $search_valide_admin = $this->AdminModel->get_admin($admin_username);

        if (!empty($search_valide_admin) && !is_null($search_valide_admin)) {
            if ($search_valide_admin["a_username"] == $admin_username && $search_valide_admin["a_password"] == $admin_password) {
                $this->session->set_userdata("admin_auth", $search_valide_admin);
                redirect(base_url('admin/dashboard'));
            } else {
                $this->session->unset_userdata("admin_auth");
                redirect(base_url('admin/login'));
            }
        } else {
            $this->session->unset_userdata("admin_auth");
            redirect(base_url('admin/login'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("admin_auth");
        redirect(base_url('admin/login'));
    }

    public function logo_create()
    {
        $logo_db_row = $this->AdminModel->table_row_id("logo", "l_uid");
        if ($logo_db_row == -1) {
            $this->load->view("admin/Logo/Create");
        } else {
            redirect(base_url("admin/logo-edit"));
        }
    }

    public function logo_create_action()
    {
        $logo_db_row = $this->AdminModel->table_row_id("logo", "l_uid");
        if ($logo_db_row == -1) {
            $logo_config["upload_path"]      = "./uploads/logo/";
            $logo_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
            $logo_config["file_ext_tolower"] = TRUE;
            $logo_config["remove_spaces"]    = TRUE;
            $logo_config["encrypt_name"]     = TRUE;

            $this->load->library("upload", $logo_config);
            $this->upload->initialize($logo_config);

            if ($this->upload->do_upload("logo_file")) {
                $file_data = $this->upload->data();

                $data = [
                    "l_img" => $file_data["file_name"]
                ];

                $this->AdminModel->logo_insert($data);
                redirect(base_url("admin/logo-edit"));
            } else {
                redirect($_SERVER["HTTP_REFERER"]);
            }
        } else {
            redirect(base_url("admin/logo-edit"));
        }
    }

    public function logo_edit()
    {
        $logo_db_row = $this->AdminModel->table_row_id("logo", "l_uid");
        if ($logo_db_row == -1) {
            redirect(base_url("admin/logo-create"));
        } else {
            $this->load->view("admin/Logo/Edit");
        }
    }

    public function logo_edit_action()
    {
        $logo_db_row = $this->AdminModel->table_row_id("logo", "l_uid");
        if ($logo_db_row == -1) {
            redirect(base_url("admin/logo-create"));
        } else {
            $logo_config["upload_path"]      = "./uploads/logo/";
            $logo_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
            $logo_config["file_ext_tolower"] = TRUE;
            $logo_config["remove_spaces"]    = TRUE;
            $logo_config["encrypt_name"]     = TRUE;

            $this->load->library("upload", $logo_config);
            $this->upload->initialize($logo_config);

            if ($this->upload->do_upload("logo_file")) {
                $file_data = $this->upload->data();

                $data = [
                    "l_img" => $file_data["file_name"]
                ];

                $this->AdminModel->logo_update($logo_db_row, $data);
                redirect(base_url("admin/logo-edit"));
            } else {
                redirect($_SERVER["HTTP_REFERER"]);
            }
        }
    }

    public function logo_delete()
    {
        $logo_db_row = $this->AdminModel->table_row_id("logo", "l_uid");
        $this->AdminModel->logo_delete($logo_db_row);
        redirect(base_url("admin/logo-create"));
    }

    public function slider_create()
    {
        $this->load->view("admin/Slider/Create");
    }

    public function slider_create_action()
    {
        $slider_name = $this->input->post("slider_name", TRUE);

        $slider_config["upload_path"]      = "./uploads/slider/";
        $slider_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $slider_config["file_ext_tolower"] = TRUE;
        $slider_config["remove_spaces"]    = TRUE;
        $slider_config["encrypt_name"]     = TRUE;

        $this->load->library("upload", $slider_config);
        $this->upload->initialize($slider_config);

        if ($this->upload->do_upload("slider_img")) {
            $slider_file_data = $this->upload->data();

            $data = [
                "s_name" => $slider_name,
                "s_img" => $slider_file_data["file_name"]
            ];

            $this->AdminModel->slider_insert($data);

            redirect(base_url("admin/slider-list"));
        } else {
            redirect($_SERVER["HTTP_REFERER"]);
        }
    }

    public function slider_list()
    {
        $data["slider_list"] = $this->AdminModel->slider_get_all();
        $this->load->view("admin/Slider/List", $data);
    }

    public function slider_edit($id)
    {
        $data["slider_target"] = $this->AdminModel->slider_get_target($id);
        $this->load->view("admin/Slider/Edit", $data);
    }

    public function slider_edit_action($id)
    {
        $slider_name = $this->input->post("slider_name", TRUE);

        $slider_config["upload_path"]      = "./uploads/slider/";
        $slider_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $slider_config["file_ext_tolower"] = TRUE;
        $slider_config["remove_spaces"]    = TRUE;
        $slider_config["encrypt_name"]     = TRUE;

        $this->load->library("upload", $slider_config);
        $this->upload->initialize($slider_config);

        if ($this->upload->do_upload("slider_img")) {
            $slider_file_data = $this->upload->data();

            $data = [
                "s_name" => $slider_name,
                "s_img" => $slider_file_data["file_name"]
            ];

            $this->AdminModel->slider_update($id, $data);

            redirect(base_url("admin/slider-list"));
        } else {
            $slider_file_data = $this->upload->data();

            $data = [
                "s_name" => $slider_name
            ];

            $this->AdminModel->slider_update($id, $data);

            redirect(base_url("admin/slider-list"));
        }
    }

    public function slider_delete($id)
    {
        $this->AdminModel->slider_delete($id);
        redirect(base_url('admin/slider-list'));
    }

    public function about_create()
    {
        $about_db_row = $this->AdminModel->table_row_id("about", "a_uid");
        if ($about_db_row == -1) {
            $this->load->view("admin/About/Create");
        } else {
            redirect(base_url("admin/about-edit"));
        }
    }

    public function about_create_action()
    {
        $about_db_row = $this->AdminModel->table_row_id("about", "a_uid");
        if ($about_db_row == -1) {
            $about_config["upload_path"]      = "./uploads/about/";
            $about_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
            $about_config["file_ext_tolower"] = TRUE;
            $about_config["remove_spaces"]    = TRUE;
            $about_config["encrypt_name"]     = TRUE;

            $this->load->library("upload", $about_config);
            $this->upload->initialize($about_config);

            $about_desc = $this->input->post("about_desc", TRUE);
            $about_slider_slogan = $this->input->post("about_slider_slogan", TRUE);

            if ($this->upload->do_upload("about_image")) {
                $file_data = $this->upload->data();

                $data = [
                    "a_desc" => $about_desc,
                    "a_slogan" => $about_slider_slogan,
                    "a_img" => $file_data["file_name"]
                ];

                $this->AdminModel->about_insert($data);

                redirect(base_url("admin/about-edit"));
            } else {

                $file_data = $this->upload->data();

                $data = [
                    "a_desc" => $about_desc,
                    "a_slogan" => $about_slider_slogan
                ];

                $this->AdminModel->about_insert($data);

                redirect(base_url("admin/about-edit"));
            }
        } else {
            redirect(base_url("admin/about-edit"));
        }
    }

    public function about_edit()
    {
        $about_db_row = $this->AdminModel->table_row_id("about", "a_uid");
        if ($about_db_row == -1) {
            redirect(base_url("admin/about-create"));
        } else {
            $data["about_data"] = $this->AdminModel->about_get($about_db_row);
            $this->load->view("admin/About/Edit", $data);
        }
    }

    public function about_edit_action()
    {
        $about_db_row = $this->AdminModel->table_row_id("about", "a_uid");
        if ($about_db_row == -1) {
            redirect(base_url("admin/about-create"));
        } else {
            $about_config["upload_path"]      = "./uploads/about/";
            $about_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
            $about_config["file_ext_tolower"] = TRUE;
            $about_config["remove_spaces"]    = TRUE;
            $about_config["encrypt_name"]     = TRUE;

            $this->load->library("upload", $about_config);
            $this->upload->initialize($about_config);

            $about_desc = $this->input->post("about_desc", TRUE);
            $about_slider_slogan = $this->input->post("about_slider_slogan", TRUE);

            if ($this->upload->do_upload("about_image")) {
                $file_data = $this->upload->data();

                $data = [
                    "a_desc" => $about_desc,
                    "a_slogan" => $about_slider_slogan,
                    "a_img" => $file_data["file_name"]
                ];

                $this->AdminModel->about_update($about_db_row, $data);
                redirect(base_url("admin/about-edit"));
            } else {
                $data = [
                    "a_desc" => $about_desc,
                    "a_slogan" => $about_slider_slogan
                ];

                $this->AdminModel->about_update($about_db_row, $data);
                redirect(base_url("admin/about-edit"));
            }
        }
    }

    public function about_delete()
    {
        $about_db_row = $this->AdminModel->table_row_id("about", "a_uid");
        $this->AdminModel->about_delete($about_db_row);
        redirect(base_url("admin/about-create"));
    }

    public function service_create()
    {
        $service_db_row = $this->AdminModel->table_row_id("service", "s_uid");
        if ($service_db_row == -1) {
            $this->load->view("admin/Service/Create");
        } else {
            redirect(base_url("admin/service-edit"));
        }
    }

    public function service_create_action()
    {
        $service_db_row = $this->AdminModel->table_row_id("service", "s_uid");
        if ($service_db_row == -1) {

            $employees_number = $this->input->post("employees_number", TRUE);
            $miles_number = $this->input->post("miles_number", TRUE);
            $customers_number = $this->input->post("customers_number", TRUE);

            $data = [
                "s_employees" => $employees_number,
                "s_miles" => $miles_number,
                "s_customers" => $customers_number
            ];

            $this->AdminModel->service_insert($data);

            redirect(base_url("admin/service-edit"));
        } else {
            redirect(base_url("admin/service-edit"));
        }
    }

    public function service_edit()
    {
        $service_db_row = $this->AdminModel->table_row_id("service", "s_uid");
        if ($service_db_row == -1) {
            redirect(base_url("admin/service-create"));
        } else {
            $data["service_data"] = $this->AdminModel->service_get($service_db_row);
            $this->load->view("admin/Service/Edit", $data);
        }
    }

    public function service_edit_action()
    {
        $service_db_row = $this->AdminModel->table_row_id("service", "s_uid");
        if ($service_db_row == -1) {
            redirect(base_url("admin/service-create"));
        } else {

            $employees_number = $this->input->post("employees_number", TRUE);
            $miles_number = $this->input->post("miles_number", TRUE);
            $customers_number = $this->input->post("customers_number", TRUE);

            $data = [
                "s_employees" => $employees_number,
                "s_miles" => $miles_number,
                "s_customers" => $customers_number
            ];

            $this->AdminModel->service_update($service_db_row, $data);

            redirect(base_url("admin/service-edit"));
        }
    }

    public function service_delete()
    {
        $service_db_row = $this->AdminModel->table_row_id("service", "s_uid");
        $this->AdminModel->service_delete($service_db_row);
        redirect(base_url("admin/service-create"));
    }

    public function support_create()
    {
        $support_db_row = $this->AdminModel->table_row_id("support", "s_uid");
        if ($support_db_row == -1) {
            $this->load->view("admin/Support/Create");
        } else {
            redirect(base_url("admin/support-edit"));
        }
    }

    public function support_create_action()
    {
        $support_db_row = $this->AdminModel->table_row_id("support", "s_uid");
        if ($support_db_row == -1) {

            $support_time = $this->input->post("support_time", TRUE);
            $support_current = $this->input->post("support_current", TRUE);
            $support_number = $this->input->post("support_number", TRUE);
            $support_email = $this->input->post("support_email", TRUE);

            $data = [
                "s_time" => $support_time,
                "s_current" => $support_current,
                "s_number" => $support_number,
                "s_email" => $support_email
            ];

            $this->AdminModel->support_insert($data);

            redirect(base_url("admin/support-edit"));
        } else {
            redirect(base_url("admin/support-edit"));
        }
    }

    public function support_edit()
    {
        $support_db_row = $this->AdminModel->table_row_id("support", "s_uid");
        if ($support_db_row == -1) {
            redirect(base_url("admin/support-create"));
        } else {
            $data["support_data"] = $this->AdminModel->support_get($support_db_row);
            $this->load->view("admin/Support/Edit", $data);
        }
    }

    public function support_edit_action()
    {
        $support_db_row = $this->AdminModel->table_row_id("support", "s_uid");
        if ($support_db_row == -1) {
            redirect(base_url("admin/support-create"));
        } else {

            $support_time = $this->input->post("support_time", TRUE);
            $support_current = $this->input->post("support_current", TRUE);
            $support_number = $this->input->post("support_number", TRUE);
            $support_email = $this->input->post("support_email", TRUE);

            $data = [
                "s_time" => $support_time,
                "s_current" => $support_current,
                "s_number" => $support_number,
                "s_email" => $support_email
            ];

            $this->AdminModel->support_update($support_db_row, $data);

            redirect(base_url("admin/support-edit"));
        }
    }

    public function support_delete()
    {
        $support_db_row = $this->AdminModel->table_row_id("support", "s_uid");
        $this->AdminModel->support_delete($support_db_row);
        redirect(base_url("admin/support-create"));
    }

    public function footer_create()
    {
        $footer_db_row = $this->AdminModel->table_row_id("footer", "f_uid");
        if ($footer_db_row == -1) {
            $this->load->view("admin/Footer/Create");
        } else {
            redirect(base_url("admin/footer-edit"));
        }
    }

    public function footer_create_action()
    {
        $footer_db_row = $this->AdminModel->table_row_id("footer", "f_uid");
        if ($footer_db_row == -1) {

            $footer_about = $this->input->post("footer_about", TRUE);
            $footer_about_copyright = $this->input->post("footer_about_copyright", TRUE);
            $footer_instagram_link = $this->input->post("footer_instagram_link", TRUE);
            $footer_number = $this->input->post("footer_number", TRUE);
            $footer_email = $this->input->post("footer_email", TRUE);

            $data = [
                "f_about" => $footer_about,
                "f_about_copyright" => $footer_about_copyright,
                "f_instagram_link" => $footer_instagram_link,
                "f_number" => $footer_number,
                "f_mail" => $footer_email
            ];

            $this->AdminModel->footer_insert($data);

            redirect(base_url("admin/footer-edit"));
        } else {
            redirect(base_url("admin/footer-edit"));
        }
    }

    public function footer_edit()
    {
        $footer_db_row = $this->AdminModel->table_row_id("footer", "f_uid");
        if ($footer_db_row == -1) {
            redirect(base_url("admin/footer-create"));
        } else {
            $data["footer_data"] = $this->AdminModel->footer_get($footer_db_row);
            $this->load->view("admin/Footer/Edit", $data);
        }
    }

    public function footer_edit_action()
    {
        $footer_db_row = $this->AdminModel->table_row_id("footer", "f_uid");
        if ($footer_db_row == -1) {
            redirect(base_url("admin/footer-create"));
        } else {

            $footer_about = $this->input->post("footer_about", TRUE);
            $footer_about_copyright = $this->input->post("footer_about_copyright", TRUE);
            $footer_instagram_link = $this->input->post("footer_instagram_link", TRUE);
            $footer_number = $this->input->post("footer_number", TRUE);
            $footer_email = $this->input->post("footer_email", TRUE);

            $data = [
                "f_about" => $footer_about,
                "f_about_copyright" => $footer_about_copyright,
                "f_instagram_link" => $footer_instagram_link,
                "f_number" => $footer_number,
                "f_mail" => $footer_email
            ];

            $this->AdminModel->footer_update($footer_db_row, $data);

            redirect(base_url("admin/footer-edit"));
        }
    }

    public function footer_delete()
    {
        $footer_db_row = $this->AdminModel->table_row_id("footer", "f_uid");
        $this->AdminModel->footer_delete($footer_db_row);
        redirect(base_url("admin/footer-create"));
    }

    public function lending_create()
    {
        $this->load->view("admin/Lending/Create");
    }

    public function lending_create_action()
    {
        $lending_icon = $this->input->post("lending_icon", TRUE);
        $lending_title = $this->input->post("lending_title", TRUE);
        $lending_desc = $this->input->post("lending_desc", TRUE);

        $lending_config["upload_path"]      = "./uploads/lending/";
        $lending_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $lending_config["file_ext_tolower"] = TRUE;
        $lending_config["remove_spaces"]    = TRUE;
        $lending_config["encrypt_name"]     = TRUE;

        $this->load->library("upload", $lending_config);
        $this->upload->initialize($lending_config);

        if ($this->upload->do_upload("lending_img")) {
            $lending_file_data = $this->upload->data();

            $data = [
                "l_icon" => $lending_icon,
                "l_title" => $lending_title,
                "l_desc" => $lending_desc,
                "l_img" => $lending_file_data["file_name"]
            ];

            $this->AdminModel->lending_insert($data);

            redirect(base_url("admin/lending-list"));
        } else {
            $data = [
                "l_icon" => $lending_icon,
                "l_title" => $lending_title,
                "l_desc" => $lending_desc
            ];

            $this->AdminModel->lending_insert($data);

            redirect(base_url("admin/lending-list"));
        }
    }

    public function lending_list()
    {
        $data["lending_list"] = $this->AdminModel->lending_get_all();
        $this->load->view("admin/Lending/List", $data);
    }

    public function lending_edit($id)
    {
        $data["lending_target"] = $this->AdminModel->lending_get_target($id);
        $this->load->view("admin/Lending/Edit", $data);
    }

    public function lending_edit_action($id)
    {
        $lending_icon = $this->input->post("lending_icon", TRUE);
        $lending_title = $this->input->post("lending_title", TRUE);
        $lending_desc = $this->input->post("lending_desc", TRUE);

        $lending_config["upload_path"]      = "./uploads/lending/";
        $lending_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $lending_config["file_ext_tolower"] = TRUE;
        $lending_config["remove_spaces"]    = TRUE;
        $lending_config["encrypt_name"]     = TRUE;

        $this->load->library("upload", $lending_config);
        $this->upload->initialize($lending_config);

        if ($this->upload->do_upload("lending_img")) {
            $lending_file_data = $this->upload->data();

            $data = [
                "l_icon" => $lending_icon,
                "l_title" => $lending_title,
                "l_desc" => $lending_desc,
                "l_img" => $lending_file_data["file_name"]
            ];

            $this->AdminModel->lending_update($id, $data);

            redirect(base_url("admin/lending-list"));
        } else {
            $data = [
                "l_icon" => $lending_icon,
                "l_title" => $lending_title,
                "l_desc" => $lending_desc
            ];

            $this->AdminModel->lending_update($id, $data);

            redirect(base_url("admin/lending-list"));
        }
    }

    public function lending_delete($id)
    {
        $this->AdminModel->lending_delete($id);
        redirect(base_url('admin/lending-list'));
    }

    public function gallery_create()
    {
        $this->load->view("admin/Gallery/Create");
    }

    public function gallery_create_action()
    {
        $category_option = [
            "warehouse",
            "delivery",
            "partners"
        ];

        $gallery_category = $this->input->post("gallery_category", TRUE);

        if (!in_array($gallery_category, $category_option)) {
            redirect(base_url("admin/gallery-list"));
        }

        $gallery_config["upload_path"]      = "./uploads/gallery/";
        $gallery_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $gallery_config["file_ext_tolower"] = TRUE;
        $gallery_config["remove_spaces"]    = TRUE;
        $gallery_config["encrypt_name"]     = TRUE;

        $this->load->library("upload", $gallery_config);
        $this->upload->initialize($gallery_config);

        if ($this->upload->do_upload("gallery_img")) {
            $gallery_file_data = $this->upload->data();

            $data = [
                "g_category" => $gallery_category,
                "g_img" => $gallery_file_data["file_name"]
            ];

            $this->AdminModel->gallery_insert($data);

            redirect(base_url("admin/gallery-list"));
        } else {
            $data = [
                "g_category" => $gallery_category
            ];

            $this->AdminModel->gallery_insert($data);

            redirect(base_url("admin/gallery-list"));
        }
    }

    public function gallery_list()
    {
        $data["gallery_list"] = $this->AdminModel->gallery_get_all();
        $this->load->view("admin/Gallery/List", $data);
    }

    public function gallery_edit($id)
    {
        $data["gallery_target"] = $this->AdminModel->gallery_get_target($id);
        $this->load->view("admin/Gallery/Edit", $data);
    }

    public function gallery_edit_action($id)
    {
        $category_option = [
            "warehouse",
            "delivery",
            "partners"
        ];

        $gallery_category = $this->input->post("gallery_category", TRUE);

        if (!in_array($gallery_category, $category_option)) {
            redirect(base_url("admin/gallery-list"));
        }

        $gallery_config["upload_path"]      = "./uploads/gallery/";
        $gallery_config["allowed_types"]    = "ico|jpeg|jpg|png|svg|ICO|JPEG|JPG|PNG|SVG";
        $gallery_config["file_ext_tolower"] = TRUE;
        $gallery_config["remove_spaces"]    = TRUE;
        $gallery_config["encrypt_name"]     = TRUE;

        $this->load->library("upload", $gallery_config);
        $this->upload->initialize($gallery_config);

        if ($this->upload->do_upload("gallery_img")) {
            $gallery_file_data = $this->upload->data();

            $data = [
                "g_category" => $gallery_category,
                "g_img" => $gallery_file_data["file_name"]
            ];

            $this->AdminModel->gallery_update($id, $data);

            redirect(base_url("admin/gallery-list"));
        } else {
            $data = [
                "g_category" => $gallery_category
            ];

            $this->AdminModel->gallery_update($id, $data);

            redirect(base_url("admin/gallery-list"));
        }
    }

    public function gallery_delete($id)
    {
        $this->AdminModel->gallery_delete($id);
        redirect(base_url('admin/gallery-list'));
    }
}
