
 <?php require_once('../../models/post.php');
   $data =[];
   $data['title'] = $_POST['title'];
   $data['content'] = $_POST['content'];
   $post = Post::create($data);
 ?>