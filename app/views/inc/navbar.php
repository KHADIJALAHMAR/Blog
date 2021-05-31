<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <a class="navbar-brand" href="<?php echo URLROOT; ?>">cuisine</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse w-100" id="navbarsExampleDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>" <?php if(!isset($_SESSION['email'])){ ?> hidden <?php }   ?>    >About</a>
          </li>
        </ul>
        
        <ul class="navbar-nav margin-left">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/ControllerCompte/logout"  <?php if(!isset($_SESSION['email'])){ ?> style="display: none;" <?php }else{    ?> style="display: flex;" <?php } ?> >Logout</a>
            </li>
        </ul>
        
      </div>
    </div>
  </nav>