<?php
 include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@400;600&display=swap"
    rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="career.css" />
  <title>ott</title>
</head>



<body>

<?php include('header.php');?>




  <section>
    <div class="showcase">
      <img src="images/careersbg3.jpg" alt="" />
    </div>
  </section>

  

  <!-- Main Page !-->

  <section class="home">
    <div class="mainpagehead">
      <h3>streambook Jobs
        <h1>
          <h1>Find <strike>Work</strike> Life Balance </h1>
        </h1>
    </div>
  </section>


  <!-- The footer !-->
  <div class="innerchoose" style="background:white;">
    <div class="choose">
      <!--ul>
        <li>
          <input type="text" style="display:inline-block" placeholder="Search">
        </li>
        <li><input type="text" style="display:inline-block" placeholder="Search"></li>
        <li><input type="text" style="display:inline-block" placeholder="Search"></li>
      </ul>
    </div>
  </div!-->

      <div class="selectdesign">
        <div class="select">
        <form>
    <select name="users" onchange="showUser(this.value)">
      <option value="">Type of Job:</option>
      <option value="internship">Internship</option>
      <option value="full time"> full time</option>
      <option value="part time"> part time</option>
      </select>
    </form>
        </div>
      </div>


      <div class="selectdesign">
        <div class="select">
          
        
        <!--input type="text" style="display:inline-block; border:none; margin:5px;"
            placeholder="Location">
          <button type="submit"><i class="fa fa-search" style="background-color: wheat; cursor: pointer;"></i></button-->
          <form>
    <select name="location" onchange="showLoc(this.value)">
      <option value="">Location of Job:</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Delhi">Delhi</option>
      <option value="Chennai">Chennai</option>
      <option value="Pune">Pune</option>
      </select>
    </form>
        
        </div>
      </div>
      <div class="selectdesign">
        <div class="select">
          
        <!--input type="text" style="display:inline-block; border:none; margin:5px;"
            placeholder="Role">
          <button type="submit"><i class="fa fa-search" style="background-color: wheat; cursor: pointer;"></i></button-->
          <form>
    <select name="title" onchange="showTitle(this.value)">
      <option value="">Name of Job:</option>
      <option value="Graphic Designer">Graphic Designer</option>
      <option value="SDE">SDE</option>
      <option value="product analyst">Product Analyst</option>
      <option value="Data Scientist">Data Scientist</option>
      <option value="marketing">Marketing</option>
      <option value="hr manager">HR Manager</option>

      </select>
    </form>
        
        
        
        </div>
      </div>
    </div>
  </div>

<!-------------------------TRŸYŸYYYYYYYY------------------------------------------>


<!--html>
    <head-->
    <script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
// getuser.php is seprate php file. q is parameter 
            xmlhttp.open("GET","careerchoice.php?q="+str,true);
            xmlhttp.send();
        }
    }

    function showLoc(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
// getuser.php is seprate php file. q is parameter 
            xmlhttp.open("GET","careerchoice.php?p="+str,true);
            xmlhttp.send();
        }
    }

    function showTitle(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
// getuser.php is seprate php file. q is parameter 
            xmlhttp.open("GET","careerchoice.php?r="+str,true);
            xmlhttp.send();
        }
    }

    </script>


   
    
    <div id="txtHint" style="background:white"><b></b></div>

    <!--/body>
    </html-->

 


<!------------------------------------------------------------------->

<?php 

$sql = "SELECT user_id as total FROM users";
$query = mysqli_query($con,$sql);
$result = mysqli_num_rows($query);

$sql = "SELECT * FROM watchlist";
$query2 = mysqli_query($con,$sql);
$result2 = mysqli_num_rows($query2);

 ?>

  <div class="team">

    <div class="headteam">
      <h1><u>Our Team</u></h1>
    </div>
    <div id="teamdeets">
      <div id="teamdata">
        <p>Join the team.<br>We are more than 2 members over 0 countries & <?php echo ' '.$result.' ';?>users</p>
        <br>
        <h1 style="font-size:4rem; color:brown"><em>Our users have added over <?php echo ' '.$result2.' ';?>shows/movies to their lists, be a part of our famil now!</em></h1>
      </div>
      
    <div id="teamgif">
        <img src="images/screen.gif">
      </div>

    </div>
  </div>

  <div>
    <div style="text-align: center;">
      <h2 style="font-size: 6rem; width: 50%; margin-left: 50%; transform: translate(-50%);" >Providing the most <b style="font-family: Lobster, sans-serif; font-size: 7rem;"><em>ideal</em></b> workplace environment</h2>
      <h4 style="font-size: 4rem; color: rgb(58, 35, 9) ;">Not our words, ask them 🤷🏻‍♂️</h4>
    </div>
    <div class="scrollitems">
      <div class="item">
        <img src="images/wfh1.jpeg"></img>
      </div>
      <div class="item">
        <img src="images/wfh2.jpg"></img>
      </div>
      <div class="item">
        <img src="images/wfh3.jpg"></img>
      </div>
      <div class="item">
        <img src="images/wfh4.jpg"></img>
      </div>
      <div class="item">
        <img src="images/wfh5.jpg"></img>
      </div>
      <div class="item">
        <img src="images/wfh6.jpg"></img>
      </div>
      <div class="item">
        <img src="images/wfh7.jpg"></img>
      </div>
      <div class="item">
        <img src="images/wfh8.jpg"></img>
      </div>
      <div class="item">
        <img src="images/wfh9.jpg"></img>
      </div>
      <div class="item">
        <img src="images/whm10.jpeg"></img>
      </div>
    </div>
  </div>


  <footer>
    <div>

    </div>
  </footer>


  </main>
  <script type="text/javascript" src="career.js"></script>
</body>

</html>
<?php include('footer.php');?>