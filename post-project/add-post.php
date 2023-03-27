<?php
include("connect.php");
include("header.php");
if(isset($_POST["input-title"])) {
  // استخدام $title هنا
$title=$_POST["input-title"];
}
  // استخدام $post هنا
if(isset($_POST["input-post"])) {
  $post = $_POST["input-post"];
}
  // استخدام $send هنا
  if(isset($_POST["input-send"])) {
    $send=$_POST["input-send"];
  }
if(isset($send)){
    $query= "INSERT INTO post(title,post) VALUES('$title','$post')";
    mysqli_query($conn,$query);
    echo "Post Puplished Successfuly";
}
?>
    <!-- add post -->
    <div class="add-post">
        <div class="container">
            <h4>Add Post</h4>
            <form action="add-post.php" method="POST">
            <label>Title</label>
            <input type="text" placeholder="Enter a Title" name="input-title">
            <label>Post</label>
            <input type="text" placeholder="Enter a Post" name="input-post">
            <a><button class="btn indigo" name="input-send">Post</button></a>
            </form>
        </div>
    </div>
    <!-- jquery -->
    <script src="./design/jquery-3.6.4.js"></script>
    <!-- materialzie  js -->
    <script src="./design/materialize/js/materialize.min.js"></script>
    <!-- javascribt of side bar -->
    <script>
      $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
    
</body>
</html>