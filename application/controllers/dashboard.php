<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
		
function __construct()
    {

        parent::__construct();
        $this->load->model('login');
        $this->load->model('home_model');
        $this->load->model('healthlife_model');
//        $this->load->model('signup_model');
        $this->load->model('predictionsystem_model');
        $this->load->model('aboutus_model');
        $this->load->model('contactus_model');
        $this->load->model('charts_model');
        $this->load->library('session');
    }

    public function index(){


    $name = $this->session->userdata('username');
     if(empty($name)){

        redirect(site_url("dashboard/adlogin"));
     }

     else{
    $this->load->view('admin/join/header');
    $this->load->view('admin/admin');
    $this->load->view('admin/join/footer');
}}


     
//    $data['home'] = $this->home_model->gethome('heading');
//    $this->load->view('admin/home',$data);
    


public function adlogin()
    {
        $name = $this->session->userdata('username');

        if(!(empty($name))==true){
        redirect(site_url("dashboard"));
     }
        
    

        else{

        if(empty($_POST)==true)
        {
            $this->load->view("admin/ad_login");
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
                        redirect(site_url("dashboard"));
                }
                else{
                    echo "<script>alert('Username or Password doesn\'t match or you don\'t have enough permission')</script>";
                    $this->load->view("admin/ad_login");
                }

            }
            else
            {

                echo "<script>alert('username doesnot exist')</script>";

                $this->load->view("admin/ad_login");

            }
        }
    }
       
    }

    public function edit($id){
        $this->load->view('admin/join/header');
        $data['charts']=$this->charts_model->getCharts($id);
        $this->load->view("admin/editchart",$data);
        $this->load->view('admin/join/footer');


    }


    public function delete($id){
        $data['charts']=$this->charts_model->deleteCharts($id);
        redirect('dashboard/predictionsystem');

    }

public function update($id){

        if(!empty($_POST)){

           
            $data=array(
                    'Title'=>$_POST['Title'],
                    'Description'=>$_POST['Description'],

                );
            $this->charts_model->update($id,$data);
            $data['charts']=$this->charts_model->getCharts($id);
            $this->load->view("admin/editchart",$data);
        }
        
    }
    public function adlogout(){


            $this->session->unset_userdata('username');
        
            $this->load->view("admin/ad_login");

    }


     public function home()
    {
        $name = $this->session->userdata('username');
        if((empty($name))===true){
        redirect(site_url("dashboard"));
     }

     else{
        $data['home'] = $this->home_model->gethome('1');
        $this->load->view('admin/join/header');
        $this->load->view('admin/home',$data);
        $this->load->view('admin/join/footer');
    }
    }

    public function updateHome()
    {
        $name = $this->session->userdata('username');
        if((empty($name))===true){
        redirect(site_url("dashboard"));
     }

     else{

        $this->home_model->updateHome('1',$_POST['head'],$_POST['body']);

        $data['home'] = $this->home_model->gethome('1');
        $this->load->view('admin/join/header');
        $this->load->view('admin/home',$data);
        $this->load->view('admin/join/footer');
        }
    }


    public function healthlife()
    {
        $name = $this->session->userdata('username');
        if((empty($name))===true){
        redirect(site_url("dashboard"));
     }

     else{

        $data['healthlife'] = $this->healthlife_model->gethealthlife('1');
        $this->load->view('admin/join/header');
        $this->load->view('admin/healthlife',$data);
        $this->load->view('admin/join/footer');
    }

    }

    public function updateHealthlife()
      {

        $this->healthlife_model->updateHealthlife('1',$_POST['header'],$_POST['subtitle'],$_POST['body1'],$_POST['body2'],$_POST['body3'],$_POST['b1'],$_POST['b2'],$_POST['b3']);

        $data['healthlife'] = $this->healthlife_model->gethealthlife('1');
        $this->load->view('admin/join/header');
        $this->load->view('admin/healthlife',$data);
        $this->load->view('admin/join/footer');
    }

public function do_upload($config) {

 //image(file) upload function as extracted from CI user_guide
        $config['allowed_types'] = 'jpg|png|jpeg|gif|mp4';
        $config['max_size'] = 50000000000000000;
//      $config['max_width'] = 1024;
//      $config['max_height'] = 768;
//
        $this->load->library('upload', $config);     


        if (!$this->upload->do_upload('image')) {
            $error = $this->upload->display_errors();
            //echo $error;
            //exit;
        } else {
            $data = $this->upload->data();
            return $data['file_name'];

        }
    }


    public function predictionsystem(){
       
        // $data['blog'] = $this->charts_model->getCharts();
        
        $config['upload_path'] = './img/upload/';

        $data['charts'] = $this->charts_model->getCharts(-1);
        
        $this->load->view('admin/join/header');
        $this->load->view('admin/predictionsystem',$data);
        $this->load->view('admin/join/footer');
         

         if ($_POST) {
            $image = $this->do_upload($config);
             if ($_FILES['image']['size'] == 0) {
                echo "<script type='text/javascript'>
                      alert('Please select an image to upload.');
                       </script>";
                 }
            
            else {
                 $input = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'image' => $image,
                 ); 
                $this->charts_model->insert($input);
                redirect(site_url('dashboard/predictionsystem'));

                   
                 }
                 

    }
}
    public function aboutus()

    {
        $name = $this->session->userdata('username');
        if((empty($name))===true){
        redirect(site_url("dashboard"));
     }

     else{

        $data['aboutus'] = $this->aboutus_model->getaboutus('1');
        $this->load->view('admin/join/header');
        $this->load->view('admin/aboutus',$data);
        $this->load->view('admin/join/footer');
    }

    }

    public function updateAboutus(){
        $this->aboutus_model->updateAboutus('1',$_POST['head'],$_POST['body']);

        $data['aboutus'] = $this->aboutus_model->getaboutus('1');
        $this->load->view('admin/join/header');
        $this->load->view('admin/aboutus',$data);
        $this->load->view('admin/join/footer');


    }

    public function contactus()
    {
        $name = $this->session->userdata('username');
        if((empty($name))===true){
        redirect(site_url("dashboard"));
     }

     else{

        $data['contactus'] = $this->contactus_model->getcontactus('1');

        $this->load->view('admin/join/header');
        $this->load->view('admin/contactus',$data);
        $this->load->view('admin/join/footer');

}
    }

    public function updateContactus(){
       $this->contactus_model->updateContactus('1',$_POST['b1'],$_POST['b2'],$_POST['body1'],$_POST['body2']);
        
        $data['contactus'] = $this->contactus_model->getcontactus('1');
        $this->load->view('admin/join/header');
        $this->load->view('admin/contactus',$data);
        $this->load->view('admin/join/footer');
    }

    public function deleteChart(){

        $this->charts_model->deleteCharts();

         $this->load->view('admin/join/header');
        $this->load->view('admin/contactus',$data);
        $this->load->view('admin/join/footer');

        redirect(site_url('dashboard/predictionsystem'));

    }







}


        