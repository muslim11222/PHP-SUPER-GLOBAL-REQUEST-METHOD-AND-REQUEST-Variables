<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>User Registration</h1>
     <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
          <label for="Username">User Name</label>
          <input type="text" name="username">
          <button type="submit">Submit</button>
     </form>


     <?php
          if($_SERVER['REQUEST_METHOD']=='POST') {
               $username = $_REQUEST['username'];
               

               if(empty($username)){
                   echo 'The form must be filled'; 
               } else {
                    echo $username;
               }
          }

     ?>

</body>
</html>