<?php require APPROOT . '/views/inc/header.php'; ?>
<body>
<form action="<?php echo URLROOT; ?>/ControllerCompte/insert" method="POST">
  <div class="form-row">
    <div class="col">
      <input type="email" class="form-control" name="email" placeholder="email">
    </div>
    <div class="col">
      <input type="password" class="form-control"  name="password" placeholder="password">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="enter" name="submit">
        </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</form>
</body>
</html>