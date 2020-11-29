
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type="text/index.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@400;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="homepage.css" />
  <title>Streambook</title>
</head>

<body>
  <main>
    <div class="showcase">
      <img src="images/ottimg.png" alt="" />
    </div> 
    
   
    <?php
    error_reporting(0);
    include('db.php');
    session_start();
    $user_check=$_SESSION['login_user'];
    $ses_sql=mysqli_query($con,"select username,user_id from users where username='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $loggedin_session=$row['username'];
    $loggedin_id=$row['user_id'];
    if(isset($loggedin_session))
    {
      include('header.php');
      
     }
     else{
      include('homepageoff.php');
     }
   ?>
 



    <!--  Navbar >



    <div class="nav-container">
      <nav>
        <h1 id="logo"><a href="">streambook</a></h1>
        <ul>
          <li><a href="#features"><button>Genre</button></a></li>
          <li><a href="#features"><button>Type</button></a></li>
          <li><a href="#features"><//?php include "index.php"; ?></a></li>
          <li>
          </li>

        </ul>
      </nav>
    </div -->


    <!-- Main Page !-->
    <section class="home">
      <div class="mainpagehead">
        <h1>Tired Finding Content?</h1>
      </div>
    </section>





    <!-- Info page !-->




    <section>
      <div class="info">
        <div id="infohead">
          <h1 align="center">About Us</h1>
        </div>

        <div class="infoset">
          <div class="infoblock" id="i1">
            <img src="images/book.png"></img>
          </div>
          <div class="infoblock" id="i2">
            <h1 style="padding: 20px 10px 20px 0px; font-size: 4.5rem; text-align: center;">We help you remember!</h1>
            <h3 style="font-size: 2.5rem;">You can choose the genre of the content you are interested in, you can search
              by the type of content, tv show, movie, documentary. We help you store all the movies you are interested
              in, along with that we tell where you can watch that content and can redirect to the page.</h3>
          </div>
        </div>
      </div>
    </section>



    <!-- Type of Content !-->



    <section>
      <div class="type">

        <div id="typehead">
          <h1 align="center"> Choose Your Type </h1>
        </div>

        <div class="types">
          <div class="b">
            <img src="images/movies.jpg"></img>
            <div class="overlay">
              <h1>Movies</h1>
            </div>
          </div>


          <div class="b">
            <img src="images/shows.jpg"></img>
            <div class="overlay">
              <h1>TV Shows</h1>
            </div>
          </div>

          <div class="b">
            <img src="images/doc.jpg"></img>
            <div class="overlay">
              <h1>Documentary</h1>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Type of Genre!-->

    <section>
      <div class="genre">
        <div id="genrehead">
          <h1 align="center" style="color:black;"> Genre Specific? </h1>
        </div>
        <div id="genrebg1">
          <img src="images/blanklaptop.png" style="width:100vw;"></div>
      </div>


      <div class="genres">


        <div class="g">
          <img src="images/thriller.png"></img>
          <div class="overlay">
            <h1>Thriller</h1>
          </div>
        </div>

        <div class="g">
          <img src="images/romcom.jpg"></img>
          <div class="overlay">
            <h1>Romantic Comedy<a href="movies.php"></h1>
          </div>
        </div>

        <div class="g">
          <img src="images/horror.jpg"></img>
          <div class="overlay">
            <h1>Horror</h1>
          </div>
        </div>

        <div class="g">
          <img src="images/action.jpeg"></img>
          <div class="overlay">
            <h1>Action</h1>
          </div>
        </div>

        <div class="g">
          <img src="images/com.jpg"></img>
          <div class="overlay">
            <h1>Comedy</h1>
          </div>
        </div>

        <div class="g">
          <img src="images/scific.jpg"></img>
          <div class="overlay">
            <h1>Sci-Fic</h1>
          </div>
        </div>

      </div>
      <div align="center" class="seemore">
        <a hred="#">
          <h1> See More...</h1>
        </a>
      </div>
      </div>
    </section>



    <!-- The footer !-->


    <footer id="foot">
      <div class="footerelements">
        <div class="logoandothers" style="text-align: center;">
          <h1>streambook</h1>
          <a href="homepage.php">Home |</a>
          <span><a href="#infohead">About |</a></span>
          <span><a href="career.php">Careers |</a></span>
          <span><a href="#foot">Faq |</a></span>
          <span><a href="#foot">Contact </a></span>
          <!--span style="display: inline-block; cursor: pointer;">Contact</span-->
        </div>

        <div class="contact" >
            <div>
              <i class="fa fa-map" style="font-size:36px;color:white"></i>
              <h2>508, TSEC NB, Bandra-West, Mumbai</h2>
            </div>
            <div>
              <i class="fa fa-phone" style="font-size:36px;color:white"></i>
              <h2>+919273671622</h2>
            </div>
            <div>
               <i class="fa fa-envelope" style="font-size:36px;color:white"></i>
              <h2>info@streambook.com</h2>
            </div>
        </div>

        <div class="aboutend">
          <div style="text-align: center;">
            <h1 style="padding: 20px">About</h1>
            <p>This a 2 week old community based company which helps users manage the content they want to stream and thus help them maintain daily efficiency</p>
            <div>
              <i class="fa fa-facebook" style="font-size:36px;color:white; padding:10px 5px;"></i>
              <i class="fa fa-instagram" style="font-size:36px;color:white; padding:10px 5px;"></i>
              <i class="fa fa-linkedin" style="font-size:36px;color:white; padding:10px 5px;"></i>
              <i class="fa fa-twitter" style="font-size:36px;color:white; padding:10px 5px;"></i>
              <i class="fa fa-slack" style="font-size:36px;color:white; padding:10px 5px;"></i>
            </div>
          </div>
        </div>

      </div>

      <div class="cr">
        <p>Copyright &#169;2020 717374Tech. All rights reserved.</p>
      </div>
      
    </footer>


  </main>
</body>

</html>