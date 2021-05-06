<?php
  class CreatCompte extends Controller {
    public function __construct(){
     $this->model= $this->model('AdminCreat');
    }
    
    public function index(){
      
      $data = [];
      $result = $this->model->addCompt();
     
      foreach ($result as $row) {
        array_push($data,$row);
      }
      $this->view('pages/index', $data);
    }

   public function insert()
   {
   if (isset($_POST["submit"])) {
     $data=[
    'titre' =>$_POST['titre'],
    'contexte' => $_POST['contexte'],
     
     ];
     $this->model->addPost($data);
    header('location:'.URLROOT .'/ControllerPost/index');
   }
  }
  }