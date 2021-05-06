

<?php
class AdminPost{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }    

    public function showPost()
    {
      $this->db->query("SELECT * FROM `post`");

      $results = $this->db-> resultSet();

      return $results;
    }
    public function addPost($data)
    
    {
   $this->db->query("INSERT INTO `post`( `titre`, `contexte`) VALUES (:titre,:contexte)");
    $this->db->bind(':titre', $data['titre']);
    $this->db->bind(':contexte', $data['contexte']);
    $exucute_data=$this->db->execute();
    return $exucute_data;
    }
    public function deletPost($params)
    {
      $this->db->query("DELETE FROM`post` WHERE `id` = :id");
      $this->db->bind(':id',$params['id']);
      $this->db->execute();
     return  $db;
    }

    public function getPostbyId($id){
      $this->db->query("SELECT * FROM `post` WHERE id = :id");
      $this->db->bind(':id',$id);
      $results = $this->db->single();

      return $results;
    }
    public function updatePost($params)
    {
      $this->db->query("UPDATE post SET `titre`= :titre, `contexte`= :contexte WHERE `id`= :id");
      $this->db->bind(':titre', $params['titre']);
      $this->db->bind(':contexte',$params['contexte']);
      $this->db->bind(':id',$params['id']);
      $this->db->execute();
      return $db;
    }
    
}
    ?>