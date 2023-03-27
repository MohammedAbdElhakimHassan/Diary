<?php
include("connect.php");
include("header.php");

$id=$_GET['id'];
$query = 'SELECT * FROM post WHERE id = ' . intval($id);
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<div id="article">
       <div class="container">
         <h5> <?php echo $row['title']?></h5>
         <p> <?php  echo $row['post']?></p>
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