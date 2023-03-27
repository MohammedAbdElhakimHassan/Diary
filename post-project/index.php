<?php
include("connect.php");
include("header.php");

$query="SELECT * FROM post";
$result=mysqli_query($conn,$query);

if(isset($result)){
  while($row=mysqli_fetch_assoc($result)){ ?>

     <div id="article">
       <div class="container">
         <h5><a href="post.php?id=<?php echo $row['id']?>"> <?php echo $row['title']?></a></h5>
         <p><a href="post.php?id=<?php echo $row['id']?>"> <?php  echo $row['post']?></a></p>
         <a href="post.php?id=<?php echo $row['id']?>"> <button class="bttn">Read More</button></a>
       </div>
     </div>

    <?php
  }
}
?>
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