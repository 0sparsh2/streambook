<?php
 include('session.php');
?>

<!---------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="profile.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@400;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php include('header.php');?>
<body style="background: radial-gradient(
    circle at top right,
    #16222A, #3A6073
  )">
<div id="feedback">
        <div >
            <div id="feedback-fill" style="display:none">
            <?php include('feedback.php'); ?>
            </div>
            <div id="feedback-btn">
                <input type="checkbox" name="feedbackbtn"  style="display:none" id="feedbackbtn">
                <label for="feedbackbtn" style=" width: 80px;
    height:50px;" onclick="appear()" id="feedbacklabel"><h5>Problem?</h5></label>
            </div>
            
        </div>
    </div>

    <?php 
     if(isset($_POST['delete'])){

        $id_to_delete = mysqli_real_escape_string($con, $_POST['id_to_delete']);

        $sql2 = "DELETE FROM watchlist WHERE user_id = '$loggedin_id' and content_id= '$id_to_delete' ";

        if(mysqli_query($con, $sql2)){
            header('location:profile.php');
            echo 'success';
        
        } else {
        echo 'query error: '. mysqli_error($con);
        }
} ?>

    }

    <div>
        <div>
            <div id="welcome">
                <h1 align='center'>Welcome to <span class="stmbk">Streambook</span> <?php echo $loggedin_session; ?>,
                </h1>
            </div>
        </div>
    </div>
    <?php
		$sql="SELECT * FROM users where user_id=$loggedin_id";
        $result=mysqli_query($con,$sql);
    ?>
    <?php
		while($rows=mysqli_fetch_array($result)){
    ?>

    <div id="sign">
        <div id="signset">
            <div><a href="logout.php" class="sign-btn" id="so">Sign Out</a></div>
            <div><a href="" id="delact" class="sign-btn" onclick="confirmm()"> Delete Account</a></div>
        </div>
    </div>
    <div class="container" id="userdetails">
        <div class="row">
            <div class="col-md-6" id="p1">
            
                <!--img src="https://i.pinimg.com/originals/a5/09/b9/a509b92fe61ed9fa32b4bde1406892bd.jpg" alt=""
                    id="splash" style="transform: translate(-50%);"-->
                <div class="preview">
                    <div id="previewstyle">
                    <img src="<?php echo $rows['imageurl']; ?>" alt="" id="face">
                    </div>
                </div>

            </div>
            <div class="col-md-6" id="p2" style="margin-top:0">
                <div  id="profdetails" >
                    <form action="" method="POST" id="signin" id="reg">


                        <div class="bio">
                            <h1>
                                <?php echo $rows['fname']." "; ?><?php echo $rows['lname']; ?></td>
                            </h1>
                            <br>
                            <h3><em>Account Details:</em>
                            </h3>
                            <h5>
                                Userame: <?php echo $rows['username']; ?> 
                            </h5>
                            <h5>
                                Email ID: <?php echo $rows['email_id']; ?>
                            </h1>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
					// close while loop 
			}?>
        </div>
    </div>

    <!--- Image update ---->

    <?php  if(isset($_POST['updatepic']))
  {

    $urlnew = mysqli_real_escape_string($con, $_POST['newurl']);
    $sql2 = "update users set imageurl = '$urlnew' WHERE user_id = '$loggedin_id' ";
    if(mysqli_query($con, $sql2)){
        error_reporting(0);
        header('location:profile.php');
        echo '';
    } 
    else {
        echo 'query error: '. mysqli_error($con);
    }
}?>
     <?php
       $sql3= "select imageurl from users 
                where user_id = $loggedin_id )";
		
        $result=mysqli_query($con,$sql3);
    ?>
    <h6 style="color:white">Enter URL to update image</h6>
    <form action="profile.php" method="POST">
        <input type="text" name="newurl" value="<?php echo $result;?>" ></input>
        <button type="submit" name="updatepic" id=""><i class="fa fa-edit"></i></button>
    </form>



    <!----------------------->
    <!--- Watchlist update ---->


    

    <div>
        <div class="watchlist">
            <h1 id="wltitle">Your Watchlist</h1>
            <div>
                <form action="" method="POST" id="wlist">
                    <table align="center" cellpadding="2" cellspacing="0" style="border:2px solid black;">
                        <tr>
                        
                            <td style="width:500px;text-align:center">
                                Title
                            </td>
                            <td style="width:200px;text-align:center">
                                Type
                            </td>
                            <td style="padding:5px; border:2px solid black;">
                                Delete
                            </td>
                        </tr>
                        <?php
                        $sql2= "SELECT Title, content_type, content_id
                                    from content
                                    where content_id IN (select content_id
                                    from watchlist 
                                    where user_id = $loggedin_id )";
                            
                            $result=mysqli_query($con,$sql2);
                            
                            $listcontents = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            
                        ?>
                        <?php foreach($listcontents as $listcontent): ?>
                            <tr>
                                
                                <td style="padding:5px; border:2px solid black;">
                                    <?php echo $listcontent['Title']; ?>
                                </td>
                                <td style="padding:5px; border:2px solid black;">
                                    <?php echo $listcontent['content_type']; ?>
                                </td>
                                <td style="padding:5px; border:2px solid black;">



                                    <form action="profile.php" method="POST">
                                        <input type="hidden" name="id_to_delete" style="display:none"
                                            value="<?php echo $listcontent['content_id']; ?>">
                                        <button type="submit" name="delete" id="trash"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        function confirmm() {
            var r = confirm("are you sure?");
            if (r == true) {
                document.getElementById("delact").href = "deleteac.php";
            }
        }
        function appear() {
        var box= document.getElementById("feedbackbtn");
        var ans = document.getElementById("feedback-fill");
        ans.style.display = box.checked ? "block" : "none";        }
    </script>
    
</body>

</html>
<?php include('footer.php'); ?>





<!----------------------------------->











