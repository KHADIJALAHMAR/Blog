<?php
  class ControllerCompte extends Controller {
    public function __construct(){
     $this->model= $this->model('AdminCreat');
     $this->model2= $this->model('AdminPost');

    }
    

    
    public function index(){
    
      $data = $this->model2->showPost();
     
     
      $this->view('pages/index',$data);
    }




   public function insert()
   {
   if (isset($_POST["submit"])) {
     $data=[
    'email' =>$_POST['email'],
    'password' => $_POST['password'],
     
     ];
     $this->model->signin($data);
    header('location:'.URLROOT .'/ControllerCompte/index');
   }
  }



  public function login(){
    if(isset($_POST['submit'])){
      $email= $_POST['email'];
      $password= $_POST['password'];
    
  $result = $this->model->signup($email,$password);
  if($result){
    redirect('ControllerCompte/index');
  }
  
  }
  $this->view('pages/signup');
  }



  public function logout(){

    redirect("ControllerCompte/login");
  }
  }

  