<?php require APPROOT . '/views/inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo URLROOT  ?>/ControllerPost/update/<?php echo $data->id  ?> " method="POST">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">titre</label>
    <input type="text" class="form-control" name="titre" value="<?php echo $data->titre; ?>"id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">contexte</label>
    <textarea id="summernote" name="contexte" style="padding: 5px 5px 30px 10px;height: 200px;border-radius: 5px;outline: none;width: 76rem;border-color: #cacaca;"><?php echo $data->contexte; ?></textarea>
    <div class="form-group">
              <label for="">Image</label>
              <input type="file"  name="image">
      </div>
    </div>
  <button type="submit"  name="submit" class="btn btn-outline-success">Submit</button>
</form>
</body>
</html>

