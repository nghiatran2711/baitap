
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="POST" action="../../index.php?controller=posts&action=createPost">
        <div class="form-group">
          <label for="title" >title</label>
          <input name="title" class="form-control" placeholder="nhap title">
        </div>
        <div class="form-group">
            <label for="content" >content</label>
            <input name="content" class="form-control" placeholder="nhap content">
        </div>
        <button type="submit" class="btn btn-primary" name="add">submit</button>
</form>
</body>
</html>
