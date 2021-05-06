<?php
  class ControllerPost extends Controller {
    public function __construct(){
     $this->model= $this->model('AdminPost');
    }
    
    public function index(){
      
      $data = [];
      $result = $this->model->showPost();
     
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
   
     $this->view('pages/insert');
   }
   public function delete()
   {
     $params=[
       'id'=>$_GET['id']
     ];
    $this->model->deletPost($params); 
       header('location:'.URLROOT.'/' . '/ControllerPost/index');
    // echo $_GET['id'];
   }


   public function update($id)
  {

   if (isset($_POST["submit"]))
   {
     
    $params=[                                                                                                                                 
   'id'=>$id,
   'titre' =>$_POST['titre'],
   'contexte' => $_POST['contexte'],
    ];
    $this->model->updatePost($params);
    // header('location:'.URLROOT.'/' . '/contact/index');
    header('location:'.URLROOT);
  }
  else {
    $contact = $this->model->getPostbyId($id);

    

    $this->view('pages/update',$contact);
  }
  
}
   }
  
  


    