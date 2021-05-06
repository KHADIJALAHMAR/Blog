<?php require APPROOT . '/views/inc/header.php'; ?>
<body>
<form action="<?php echo URLROOT; ?>/CreatCompte/insert" method="POST">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" name="titre" placeholder="titre">
    </div>
    <div class="col">
      <input type="text" class="form-control"  name="contexte" placeholder="contexte">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="enter" name="submit">
        </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</form>
</body>
</html>