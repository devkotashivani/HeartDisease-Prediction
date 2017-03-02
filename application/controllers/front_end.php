<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class front_end extends CI_Controller {

 function __construct()
    {
        parent::__construct();
        $this->load->model('login');
        $this->load->model('home_model');
        $this->load->model('healthlife_model');
//        $this->load->model('signup_model');
        $this->load->model('predictionsystem_model');
        $this->load->model('charts_model');
        $this->load->model('aboutus_model');
        $this->load->model('contactus_model');

        $this->load->model('login');

    }

    public function index()
    {


        $data['home'] = $this->home_model->gethome('1');
        $data['healthlife'] = $this->healthlife_model->gethealthlife('1');
        $data['p_system'] = $this->predictionsystem_model->getpredictionsystem('1');
       // $data['charts'] = $this->charts_model->getcharts('1');
        $data['aboutus'] = $this->aboutus_model->getaboutus('1');
        $data['contactus'] = $this->contactus_model->getcontactus('1');
        $data['charts']=$this->charts_model->getcharts('-1');
        

        $this->load->view('header.php');
        $this->load->view('home',$data);
        $this->load->view('healthlife',$data);
        $this->load->view('p_system',$data);
         $this->load->view('charts',$data);
        $this->load->view('aboutus',$data);
         // $this->load->view('comment');     
        $this->load->view('userlogin');
        $this->load->view('footer',$data);
        $this->load->view('script.php');

                
    }
    

    public function admin()
    {
            
        $this->load->view('admin/admin');
    }
        public function home()
    {
            
        $this->load->view('admin/home');
    }
        public function healthlife(){
            $this->load->view('admin/healthlife');
        }
        public function signup(){
            $this->load->view('admin/signup');
        }
        public function predictionsystem(){
            $this->load->view('admin/predictionsystem');
        }
        public function aboutus(){
            $this->load->view('admin/aboutus');
        }
        public function contactus(){
            $this->load->view('admin/contactus');
        }


public function login()
    {
    if(empty($_POST)==true)
        {
            $this->load->view("userlogin");
        }

        else
        {

            $username=$_POST["username"];
            $pwd=md5($_POST["pwd"]);
            if($this->login->isUserExist($username))
            {
                $data=$this->login->getUserData($username,$pwd);
                if(count($data)>0 && $data['authority']==="admin") {
                    $this->session->set_userdata("username",$data['username']);
                    $this->session->set_userdata("authority",$data['authority']);

                        redirect(site_url('front_end'));
                }
                else{
                    echo "<script>alert('Username or Password doesn\'t match or you don\'t have enough permission')</script>";
                            
                    
                }

            }
            else
            {

                echo "<script>alert('username doesnot exist')</script>";                    
             

            }

        }
    }
      public function logout(){

            $this->session->unset_userdata('username');
           redirect(base_url());
           

    }

    

}
