<?php include_once APPROOT . '/views/inc/header.php'; ?>

<?php if(isset($_SESSION['email'])){

?>
 <header>


<div > 
  <!-- style="background-image: url('../public/img/blog.png')"> -->
  <video id="Mp4Video-1590159698427" class="myVideo1" src="../public/img/bgvideo2.mp4"  loop="" muted="muted" playsinline="" autoplay="" style="width: 99vw; opacity: 1;"></video>
</div>
</header>
<!-- RS de Article-->
<div class="d-flex justify-content-center">
<div class="bs-example">
    <div class="card" style="max-width: 500px;">
        <div class="row no-gutters">
            <div class="col-sm-5" style="background: #868e96;">
                <img src="public/img/h.webp" class="card-img-top h-100" alt="imageX">
            </div>
            <div class="col-sm-7">
                <div class="card-body">
                    <h1 class="card-title">Alice Liddel</h1>
                    <p class="card-text">Bienvenue sur le blog de cuisine d'e-monsite !
                          Ce blog est un site de démonstration qui regroupe des recettes de cuisine
                          issues de la communauté d'utlisateurs d'e-monsite. Le module blog permet
                          de créer autant d'articles que vous.</p>
                    <a href="#" class="btn btn-primary stretched-link">View Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- search -->
<div class="container">
      <form action="<?php echo URLROOT; ?>/ControllerPost/search"method="POST">
            <label for="">search</label>
            <input type="text" name="search">
            <input type="submit" name="submit" >
      </form>
      <div class="text-danger"><?php if(isset($errdata['error_search'])){ echo $errdata['error_search']; } ?></div>
      </div>
<!-- icons insert -->
<div class="container-fluid row ">
    <h2 class="col-11 text-light " class="text-danger">Articles</h2>
    <a href="<?php echo URLROOT; ?>/ControllerPost/insert" class="col-1"><button type="button" name="ajouter" class="btn  btn-outline-primary">Ajouter <i class='fas fa-plus'></i></button></a>
</svg></a>
<div class="d-flex justify-content-center flex-wrap">
<?php $var=0; ?>
    <?php foreach ($data as $row):?>
      <div class="card mx-sm-5 my-sm-3" >
        <img id="wow" src="../public/img/<?php echo $row->image ?>" width= "20px"   height="300px "class="card-img-top">
      <div class="card-body" >
        <h5 class="card-title"><?php echo $row->titre;?></h5>     
          <!--  Model button -->
     <button id="myBtn" class="myBtn btn btn-outline-primary" data-toggle="modal" data-target="#<?php echo $var; ?>">view</button>
<!-- Modal -->
      <div class="modal fade" id="<?php echo $var ;?>">
          <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" style="width:5rem" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                   <div class="modal-body">
                      <p class="card-text"><?php echo $row->contexte;?></p>
                   </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Understood</button>
                        </div>
              </div>
          </div>
      </div>

          <a href="<?php echo URLROOT;?>/ControllerPost/delete?id=<?php echo $row->id;?>"class="btn btn-danger " >Delet</a>
          <a href="<?php echo URLROOT;?>/ControllerPost/update/<?php echo $row->id;?>"class="btn btn-success " >update</a>
        </div>
      </div>
    <?php $var++ ; ?>
    <?php endforeach;?>
</div>


  <?php include_once APPROOT . '/views/inc/footer.php'; ?>
  <?php } else {
    header("location: /exempl/ControllerCompte/login");  
  }

  ?>
    </div>
  </div> 

  

































