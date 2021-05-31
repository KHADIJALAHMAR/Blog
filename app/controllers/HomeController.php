<?php
  class HomeController extends Controller {
    public function __construct(){
     $this->model= $this->model('HomeModel');
    }
    
    public function index(){
      
      
      $result = $this->model->showPost();
     
     
      $this->view('pages/HomePage', $result);
    }
}

  