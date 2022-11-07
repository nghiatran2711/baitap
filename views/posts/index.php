
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <a href="views/posts/create.php">create posts</a>
    <?php
  echo '<ul>';
  foreach ($posts as $post) {
    echo '<li>
      <a href="index.php?controller=posts&action=showPost&id=' . $post->id . '">' . $post->title . '</a>
    </li>';
  }
  echo '</ul>';
  ?>
  </body>
  </html>

