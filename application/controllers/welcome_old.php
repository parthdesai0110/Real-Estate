<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();
error_reporting(E_ERROR);

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('lib_common');
        $this->load->model('mdl_desktop');
        $this->load->model('mdl_login');
    }

    public function index() {
		$property  = $this->mdl_desktop->get_data_limit("property");
		$region  = $this->mdl_desktop->get_data("region");
		$offer_property  = $this->mdl_desktop->get_offer_property("4");
		$data = array(
            'class' => 'home',
			'property' => $property,
			'region' => $region,
			'offer_property' => $offer_property
        );
        $this->load->view('home', $data);
    }
	
    public function all_property() {
		
		
		
		$property  = $this->mdl_desktop->get_data_property("property");
		$property_count  = $this->mdl_desktop->get_data_count("property");
		$region  = $this->mdl_desktop->get_data("region");
		$offer_property  = $this->mdl_desktop->get_offer_property("5");
		$data = array(
            'class' => 'home',
			'property' => $property,
			'property_count' => $property_count,
			'region' => $region,
			'offer_property' => $offer_property
        );
        $this->load->view('all_property', $data);
    }
	
    public function property_detail() {
		
		$id = $this->uri->segment(2);
		$user_id = $_SESSION['user_id'];
		$favourite_count  = $this->mdl_desktop->get_favourite_count($id, $user_id);
		$property  = $this->mdl_desktop->get_property_data($id);
		$offer_property  = $this->mdl_desktop->get_offer_property("5");
		$data = array(
            'class' => 'home',
			'property' => $property[0],
			'favourite_count' => $favourite_count,
			'offer_property' => $offer_property
        );
        $this->load->view('property_detail', $data);
    }
	
	public function about() {
		$data = array(
            'class' => 'about'
        );
        $this->load->view('about', $data);
    }
	
	public function agents() {
		$agents  = $this->mdl_desktop->get_agent_data();
		$data = array(
            'class' => 'agents',
			'agents' => $agents
        );
        $this->load->view('agents', $data);
    }
	
	public function single_agents() {
		$id = $this->uri->segment(2);
		$agents  = $this->mdl_desktop->get_single_agent_data($id);
		$property  = $this->mdl_desktop->get_property_by_agent($id);
		$data = array(
            'class' => 'agents',
			'agent' => $agents[0],
			'property' => $property
        );
        $this->load->view('single_agents', $data);
    }
	
	public function contact() {
		$data = array(
            'class' => 'contact'
        );
        $this->load->view('contact', $data);
    }

    public function register() {
        $data = array(
            'HEADER' => $header
        );
        $this->load->view('register', $data);
    }
	
    public function search_property() {
		
		
		$search_text = $_POST['search_text'];
        $search_property_type = $_POST['search_property_type'];
        $search_price = $_POST['search_price'];
        $offer = $_POST['offer'];
		
		
		if($search_property_type == "Select property Type"){
			$search_property_type = "";
		}
		if($search_text == "Search of Properties Region"){
			$search_text = "";
		}
		if($search_price == "Price"){
			$search_price = "";
		}
		
		$property  = $this->mdl_desktop->get_data_search_property($search_text,$search_property_type,$search_price,$offer);
		
		$region  = $this->mdl_desktop->get_data("region");
		$offer_property  = $this->mdl_desktop->get_offer_property("5");
        $data = array(
            'HEADER' => $header,
			'property' => $property,
			'region' => $region,
			'offer_property' => $offer_property
        );
        $this->load->view('all_property', $data);
    }

    public function contact_us() {
        $header = $this->load->view('common/header', true);
        $data = array(
            'HEADER' => $header
        );
        $this->load->view('contact_us', $data);
    }

    function save_contact_info() {

        $temp = array();
        $temp['username'] = $_POST['username'];
        $temp['email'] = $_POST['email'];
        $temp['telephone'] = $_POST['telephone'];
        $temp['details'] = $_POST['details'];
        $this->mdl_desktop->insert_data($temp, "contact_info");

        $to = 'pranav.rana@pixml.in';
        $subject = 'Inquiery at Real Estate Web Application';
        $from = 'pranav.rana@pixml.in';

        $message = 'Please find below mail content<br><br>';
        foreach ($_POST as $key => $val)
            $message .= $key . ' : ' . $val . '<br>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $headers);
        echo TRUE;
    }

    function save_user_info() {

        $temp = array();
        $temp['fullname'] = $_POST['fullname'];
        $temp['email'] = $_POST['email'];
        $temp['username'] = $_POST['username'];
        $temp['password'] = $_POST['password'];
        $temp['address'] = $_POST['address'];
        $temp['city'] = $_POST['city'];
        $temp['postal_code'] = $_POST['postal_code'];
        $temp['province'] = $_POST['province'];
        $temp['country'] = $_POST['country'];
        $temp['contact_no'] = $_POST['contact_no'];
        $temp['agent_owner'] = $_POST['agent_owner'];
        $temp['description'] = $_POST['description'];
        $temp['image'] = $_POST['profile'];
        $this->mdl_desktop->insert_data($temp, "customer_register");

        echo TRUE;
    }
	
    function edit_user_info() {

        $temp = array();
        $temp['fullname'] = $_POST['fullname'];
        $temp['email'] = $_POST['email'];
        $temp['username'] = $_POST['username'];
        $temp['password'] = $_POST['password'];
        $temp['address'] = $_POST['address'];
        $temp['city'] = $_POST['city'];
        $temp['postal_code'] = $_POST['postal_code'];
        $temp['province'] = $_POST['province'];
        $temp['country'] = $_POST['country'];
        $temp['contact_no'] = $_POST['contact_no'];
        $temp['agent_owner'] = $_POST['agent_owner'];
        $temp['description'] = $_POST['description'];
        $temp['image'] = $_POST['profile'];
        $id = $_POST['hidden_id'];
		$this->mdl_desktop->update_data_by_id($temp, $id, "customer_register");
        
        echo TRUE;
    }
	
    function save_add_property() {

		$temp = array();
        $temp['title'] = $_POST['title'];
        $temp['description'] = $_POST['description'];
        $temp['price'] = $_POST['price'];
        $temp['address'] = $_POST['address'];
        $temp['bedroom'] = $_POST['bedroom'];
        $temp['living_room'] = $_POST['living_room'];
        $temp['parking'] = $_POST['parking'];
        $temp['kitchen'] = $_POST['kitchen'];
        $temp['image_1'] = $_POST['image_1'];
        $temp['image_2'] = $_POST['image_2'];
        $temp['image_3'] = $_POST['image_3'];
        $temp['image_4'] = $_POST['image_4'];
        $temp['user_id'] = $_POST['user_id'];
        $temp['property_type'] = $_POST['property_type'];
		$temp['near_by'] = $_POST['near_by'];
		$temp['near_by_name'] = $_POST['near_by_name'];
		$temp['offer_details'] = $_POST['offer_details'];
		$temp['rent_terms'] = $_POST['rent_terms'];
		$temp['monthly_rent_min'] = $_POST['monthly_rent_min'];
		$temp['monthly_rent_max'] = $_POST['monthly_rent_max'];
		$temp['furnished'] = $_POST['furnished'];
		$temp['luxury_unit'] = $_POST['luxury_unit'];
		$temp['available_as_of'] = $_POST['available_as_of'];
		$temp['sublease'] = $_POST['sublease'];
		$temp['kitchen_app'] = $_POST['kitchen_app'];
		$temp['laundry_app'] = $_POST['laundry_app'];
		$temp['added_date'] = date('Y-m-d');
        $this->mdl_desktop->insert_data($temp, "property");

        echo TRUE;
    }
	
    function save_edit_property() {

		$temp = array();
        $temp['title'] = $_POST['title'];
        $temp['description'] = $_POST['description'];
        $temp['price'] = $_POST['price'];
        $temp['address'] = $_POST['address'];
        $temp['bedroom'] = $_POST['bedroom'];
        $temp['living_room'] = $_POST['living_room'];
        $temp['parking'] = $_POST['parking'];
        $temp['kitchen'] = $_POST['kitchen'];
        $temp['image_1'] = $_POST['image_1'];
        $temp['image_2'] = $_POST['image_2'];
        $temp['image_3'] = $_POST['image_3'];
        $temp['image_4'] = $_POST['image_4'];
		$temp['property_type'] = $_POST['property_type'];
		$temp['near_by'] = $_POST['near_by'];
		$temp['near_by_name'] = $_POST['near_by_name'];
		$temp['offer_details'] = $_POST['offer_details'];
		$temp['rent_terms'] = $_POST['rent_terms'];
		$temp['monthly_rent_min'] = $_POST['monthly_rent_min'];
		$temp['monthly_rent_max'] = $_POST['monthly_rent_max'];
		$temp['furnished'] = $_POST['furnished'];
		$temp['luxury_unit'] = $_POST['luxury_unit'];
		$temp['available_as_of'] = $_POST['available_as_of'];
		$temp['sublease'] = $_POST['sublease'];
		$temp['kitchen_app'] = $_POST['kitchen_app'];
		$temp['laundry_app'] = $_POST['laundry_app'];
        $id = $_POST['property_id'];
        $this->mdl_desktop->update_data_by_id($temp, $id, "property");

        echo TRUE;
    }
	
    function save_newsleeter_info() {

        $temp = array();
        $temp['email'] = $_POST['newsletter_email'];
        $this->mdl_desktop->insert_data($temp, "newsletter");

        echo TRUE;
    }
	
    function add_favourite_property() {
        $temp = array();
		$temp['property_id'] = $_POST['property_id'];
        $temp['user_id'] = $_SESSION['user_id'];
        $this->mdl_desktop->insert_data($temp, "favourite");
        echo TRUE;
    }
	
    function add_unfavourite_property() {
        $temp = array();
		$property_id = $_POST['property_id'];
        $user_id = $_SESSION['user_id'];
        $this->mdl_desktop->delete_favourite_property($user_id, $property_id);
        echo TRUE;
    }

    public function login() {
        $header = $this->load->view('common/header', true);
        $data = array(
            'HEADER' => $header
        );
        $this->load->view('login', $data);
    }

    public function favourite() {
        if (!isset($_SESSION["is_logged_in"])) {
            redirect('login');
        } else {
            if ($_SESSION['is_logged_in'] == false) {
                redirect('login');
            }
        }
		$user_id = $_SESSION['user_id'];
		$property  = $this->mdl_desktop->get_favourite_property($user_id);

        $data = array(
            'HEADER' => $header,
			'property' => $property
        );
        $this->load->view('favourite', $data);
    }
	
    public function dashboard() {
        if (!isset($_SESSION["is_logged_in"])) {
            redirect('login');
        } else {
            if ($_SESSION['is_logged_in'] == false) {
                redirect('login');
            }
        }
		$user_id = $_SESSION['user_id'];
		$property  = $this->mdl_desktop->get_property_by_user($user_id);

        $data = array(
            'HEADER' => $header,
			'property' => $property
        );
        $this->load->view('dashboard', $data);
    }
	
	
    public function account_details() {
		if (!isset($_SESSION["is_logged_in"])) {
            redirect('login');
        } else {
            if ($_SESSION['is_logged_in'] == false) {
                redirect('login');
            }
        }
		$user_id = $_SESSION['user_id'];
		$user  = $this->mdl_desktop->get_user_by_id($user_id);
        $data = array(
            'HEADER' => $header,
			'user' => $user[0]
        );
        $this->load->view('account_details', $data);
    }
	
    public function add_property() {
        if (!isset($_SESSION["is_logged_in"])) {
            redirect('login');
        } else {
            if ($_SESSION['is_logged_in'] == false) {
                redirect('login');
            }
        }
		
		$user_id = $_SESSION['user_id'];
		
        $data = array(
            'HEADER' => $header,
			'user_id' => $user_id
        );
        $this->load->view('add_property', $data);
    }
	
	
    public function property_edit() {
		if (!isset($_SESSION["is_logged_in"])) {
            redirect('login');
        } else {
            if ($_SESSION['is_logged_in'] == false) {
                redirect('login');
            }
        }
		
		$id = $this->uri->segment(2);
		$user_id = $_SESSION['user_id'];
		$property  = $this->mdl_desktop->get_property_data($id);
		$data = array(
            'class' => 'home',
			'property' => $property[0],
			'user_id' => $user_id
        );
        $this->load->view('property_edit', $data);
    }

    function chk_login() {
        $result = $this->mdl_login->chk_login($_POST);
        if ($result) {
            $user_data = $this->mdl_login->chk_login_data($_POST);
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_name'] = $user_data['username'];
            $_SESSION['user_id'] = $user_data['id'];
            echo TRUE;
        } else {
            $_SESSION['is_logged_in'] = false;
            $_SESSION['user_name'] = '';
            $_SESSION['user_id'] = '';
            echo "0";
        }
    }

    function logout() {
        $_SESSION['is_logged_in'] = false;
        $_SESSION['user_name'] = '';
        redirect('welcome');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */