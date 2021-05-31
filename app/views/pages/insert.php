<?php require APPROOT . '/views/inc/header.php'; ?>
<body>
<form action="<?php echo URLROOT; ?>/ControllerPost/insert" method="POST">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" name="titre" placeholder="titre">
    </div>
    <div class="container">
        <textarea  id="summernote"  name="contexte" style="padding: 5px 5px 30px 10px;height: 200px;border-radius: 5px;outline: none;width: 76rem;border-color: #cacaca;"></textarea>
      </div>
    <div class="form-group">
              <label for="">Image</label>
              <input type="file"  name="image">
      </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="enter" name="submit">
        </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</form>
<script>
     $(document).ready(function() {
        $('#summernote').summernote();
    });
    </script>
</body>
</html>
