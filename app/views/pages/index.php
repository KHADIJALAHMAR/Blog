<?php include_once APPROOT . '/views/inc/header.php'; ?>
<header class="masthead" style="background-image: url('https://miro.medium.com/max/6300/1*qrzHr2IGGJ5o-h7sdkyo-w.jpeg">
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
        <img src="public/img/cov.jpg" alt="...">
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
<!-- icons update -->
<a href="<?php echo URLROOT; ?>/ControllerPost/insert"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"  margin-right="100"fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" >
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</svg></a>
<!-- card des chapitre  -->
    <?php foreach ($data as $row):?>
    <div class="d-flex justify-content-center">
    <div class="card" style="width: 50vh   height:50 vh ">
    <img src="public/img/imgchapitre.jpg"class="card-img-top" width=300vh height=300vh    alt="...">
   <div class="card-body" >
    <h5 class="card-title"><?php echo $row->titre;?></h5>
    
    <!--  Model-->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  view
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" style="width:5rem" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="card-text"><?php echo $row->contexte;?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
    <!-- <p class="card-text"><?php echo $row->contexte;?></p> -->
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    
    <a href="<?php echo URLROOT;?>/ControllerPost/delete?id=<?php echo $row->id;?>"class="btn btn-danger " >Delet</a>
    <a href="<?php echo URLROOT;?>/ControllerPost/update/<?php echo $row->id;?>"class="btn btn-success " >update</a>
  </div>
</div>
      </div>
      </div>
    <?php endforeach;?>
    </div>
  </div> 
  

































