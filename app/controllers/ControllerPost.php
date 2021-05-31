<?php
  class ControllerPost extends Controller {
    public function __construct(){
     $this->model= $this->model('AdminPost');
    }
    
    public function index(){
      
      
      $result = $this->model->showPost();
     
     
      $this->view('pages/index', $result);
    }

    public function insert()
    {
    if (isset($_POST["submit"])) {
     $image=$_FILES['image']['tmp_name'];
      $data=[
     'titre' =>$_POST['titre'],
     'contexte' => $_POST['contexte'],
     'image' => $_FILES['image']['name'],
     
      ];
      if($this->uploadPhoto($image)===true){
       if( $this->model->addPost($data) ){
         
         header('location:'.URLROOT .'/ControllerPost/index');
         
      } else{
         die('Something went wrong');
      }
   }else{
      die('Something went wrong');
   }
     
    }
    
      $this->view('pages/insert');
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

public function uploadPhoto($image)
{    
  $dir = "C:\\xampp\htdocs\\Blog\public\img";    
 //  $time = time();   
   $name = str_replace(' ','-',strtolower($_FILES["image"]["name"]));    
   $type = $_FILES["image"]["type"];       
   if(move_uploaded_file($_FILES["image"]["tmp_name"],$dir."/".$name))
   {       
      return true;    }
   else{      
     return false;   
    }   
  }
  public function search_titre($data)
  {
    $this->db->query("SELECT * FROM post WHERE `titre`= :titre");
    $this->db->bind(':titre' ,$data['titre']);
    $db =$this->db->resultSet();
    if($db){
      return $db;
    }else{
      return false;
    }
  }

   }
  
  


    