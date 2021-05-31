<?php include_once APPROOT . '/views/inc/header.php'; ?>

<?php if(isset($_SESSION['email'])){

?>
<?php echo APPROOT2; ?>
<header class="masthead" style="background-image: url('../public/img/blog.png')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1> My blog </h1>
                    <span class="subheading">Roman d'alexandre</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- RS de roman -->
<div class="d-flex justify-content-center">
<div class="card mb-3-" style="max-width: 540px; " style="margin-auto">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../public/img/cov.jpg" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">ROMAN,  ROMAN AUTOBIOGRAPHIQUE</h5>
          <p class="card-text">Ce livre est l'histoire de mes mensonges. Sans doute est-ce le plus risqué
                              que j'écrirai jamais. Il m'est vital.
                              Jusqu'où suis-je allé dans l'aveu? Je n'ai pris aucun ménagement.
                              Un jour, il faut bien déchirer le voile,
                              rompre avec le comédien et coïncider avec soi.</p>
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
<!-- icons update -->
<a href="<?php echo URLROOT; ?>/ControllerPost/insert"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"  margin-right="100"fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" >
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
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

  

































