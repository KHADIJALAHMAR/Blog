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
<form action="<?php echo URLROOT  ?>/Post/update/<?php echo $data->id  ?> " method="POST">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">titre</label>
    <input type="text" class="form-control" name="titre" value="<?php echo $data->titre; ?>"id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">contexte</label>
    <input type="text" class="form-control" name="contexte" value="<?php echo $data->contexte; ?>">
    </div>
  <button type="submit"  name="submit" class="btn btn-outline-success">Submit</button>
</form>
</body>
</html>

