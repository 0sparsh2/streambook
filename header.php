<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@400;600&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="header.css" />
    <title>Navbar</title>
</head>
<body>
<?php
                $sql="SELECT * FROM users where user_id=$loggedin_id";
                $result=mysqli_query($con,$sql);
            ?>
            <?php
                while($rows=mysqli_fetch_array($result)){
            ?>
<div class="nav-container">
      <nav>
        <h1 id="logo" style="font-size: 3.5rem;
    font-family: 'Lobster', sans-serif;
    font-weight: lighter;"><a href="homepage.php" >streambook</a></h1>
        <ul>
          <li><a href="profile.php" style="padding: 5px; "><button class='btn'><?php echo $rows['username'];?></button></a></li>
          <li><a href="movies.php" style="padding: 5px"><button class='btn'>Content</button></a></li>
                

 
          <li>
          
            <a href="logout.php" class="sign-btn"><button type="submit" class='btn'>Sign Out</button>
                <?php } ?></a></li>

        </ul>
      </nav>
</div>
</body>
</html>
