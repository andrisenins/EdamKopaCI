<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->login();
                $this->recipes_view();
	}
        
        public function login()
	{
      

                   redirect('main/members');

                   $this->load->view('login'); 
                
		
	}
        
        public function recipes_view()
	{
		$this->load->view('recipes/');
	}
        
        public function signup() {
            $this->load->view('signup');
        }
        
        public function members() {
            if ($this->session->userdata('is_logged_in')) {
                $this->load->view('members');
            }else{
                redirect('main/restricted');
            }
        }
        
        public function restricted()
	{
		$this->load->view('restricted');
	}
//$this->form_validation->set_rules('email', 'Email', 'required|trim');
        
        public function login_validation()
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|callback_validate_credentials');
            $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
            
            if($this->form_validation->run()){
                $data = array('username' => $this->input->post('username'), 'is_logged_in' => 1);
                $this->session->set_userdata($data);
                redirect('main/members');
            }
            else {
                $this->load->view('login');
            }
         } 
         
         public  function signup_validation() {
             
             $this->load->library('form_validation');
             
             
             $this->form_validation->set_rules('firstname', 'Name', 'required|trim');
             $this->form_validation->set_rules('lastname', 'Lastname', 'required|trim');
             $this->form_validation->set_rules('username', 'Username', 'required|trim');
             $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');     
             $this->form_validation->set_rules('password', 'Password', 'required|trim|md5');
             $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');
             
             $this->form_validation->set_message('is_unique', "That email address already exists!");
             
             if($this->form_validation->run()) {
                 // generate a random key
                 $key = md5(uniqid());
                 
                 
                 
                 $config_array = Array(
                     'protocol' => 'smtp',
                     'smtp_host' => 'ssl://smtp.googlemail.com',
                     'smtp_port' => 465,
                     'smtp_user' => 'andrisenins@googlemail.com',
                     'smtp_pass' => 'xxx',
                     'mailtype' => 'html'
                 );
                 $this->load->library('email', $config_array);
                 $this->load->model('model_users');
                 $this->email->set_newline("\r\n");

                 $this->email->from('andrisenins@googlemail.com', 'Ēdam kopā');
                 $this->email->to($this->input->post('email'));

                 $this->email->subject("Apstiprini reģistrāciju");
                 $message = "<p>Paldies par reģistrāciju!</p>";
                 $message .= "<p><a href='".base_url()."main/register_user/$key'>Spied šeit</a>, lai pabeigtu reģistrāciju.</p>";
                 
                 $this->email->message($message);
                 
                 //send and email to the user
                 if($this->model_users->add_temp_users($key)) {
                    if($this->email->send()) {
                        echo "Apstiprināšanas e-pasts ir nosūtīts!";
                        $this->output->set_header('refresh:5;url=/recipes/');
                    } else {
                        echo "E-pastu nesanāca nosūtīt!";
                    }
                 }  else {
                     echo "Datubāzes problēma.";                     
                 }
             }else {
                 echo "You shall not pass! >:(";
                 $this->load->view('signup');
             }
             
             //add them to the temp_user db
             
             
         }
          
            public function validate_credentials(){
                $this->load->model('model_users');
                
                if($this->model_users->can_log_in()){
                    return true;
                }  else {
                    $this->form_validation->set_message('validate_credentials', 'Nepareizs lietotājvārds/parole.');
                    return false;
                }
            }
            
            public function logout() {
                $this->session->sess_destroy();
                redirect(main/login);
            }
            
            public function register_user($key) {
                $this->load->model('model_users');
                
                if($this->model_users->is_key_valid($key)) {
                    if($newusername = $this->model_users->add_user($key)){
                        $data = array(
                                'username' => $newusername,
                                'is_logged_in' => 1
                        );
                        
                        $this->session->set_userdata($data);
                        redirect('main/members');
                    }  else {
                        echo "Tev nesanāca pievienot lietotāju, mēgini vēlreiz :(";
                    }
                }  else {
                    echo 'Tava atslēga neder mūsu slēdzenei.';
                }
            }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
