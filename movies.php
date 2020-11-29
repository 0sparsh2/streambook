<?php 
include('session.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@400;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="flipster/dist/jquery.flipster.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="movies.css" />

    <title>Movies</title>
</head>

<body style="background: radial-gradient(
    circle at top right,
    #16222A, #3A6073
  )">>
    <?php include('header.php');?>

    
    <?php
    if(isset($_POST['add'])){

            $id_to_add = mysqli_real_escape_string($con, $_POST['id_to_add']);

            $sql2 = "INSERT INTO watchlist values ('$loggedin_id', '$id_to_add') ";

            if(mysqli_query($con, $sql2)){
                header('location:movies.php');
                echo 'success';
            
            } else {
            echo 'query error: '. mysqli_error($con);
            }
    }

    ?>
    <!-- Navbar >

    <div class="nav-container">
        <nav>
            <h1 id="logo"><a href="">streambook</a></h1>
            <ul>
                <li><a href="#features">Genre</a></li>
                <li><a href="#features">Type</a></li>
                <li><a href="#features">Login</a></li>
                <li>
                    <form method="get" action="">
                        <div class="search">
                            <input type="text" style="display:inline-block; vertical-align:center;" placeholder="Search"
                                required>
                            <button type="submit"
                                style="display:inline-block; width:20px; height: 20px; cursor: pointer;">
                            </button>
                        </div>
                    </form>
                </li>

            </ul>
        </nav>
    </div-->

    <!-- Main Title -" MOVIES "-->
    <div class="movietitle">
        <div>
            <div>
                <h1>
                    MOVIES
                </h1>
            </div>
        </div>
    </div>

    <!-- Carousal -->

    <div class="carousal">
        <div id="coverflow">
            <ul class="flip-items">
                <li data-flip-title="Title 1">
                    <img src="https://vignette.wikia.nocookie.net/himym/images/f/f3/WeddingBridePoster.jpg/revision/latest?cb=20100525074008"
                        style="height: 40vw; width: 40vw; object-fit: cover; border-radius: 20px;">
                </li>
                <li data-flip-title="Title 2">
                    <img src="https://i.ytimg.com/vi/7iPyz6Yqwl4/maxresdefault.jpg"
                        style="height: 40vw; width: 40vw; object-fit: cover; border-radius: 20px;">
                </li>
                <li data-flip-title="Title 3">
                    <img src="https://image.tmdb.org/t/p/w500/rpvvul2liWeenNtyfwf2X6HtCwe.jpg"
                        style="height: 40vw; width: 40vw; object-fit: cover; border-radius: 20px;">
                </li>
                <li data-flip-title="Title 4">
                    <img src="https://m.media-amazon.com/images/M/MV5BMTMxNTQ0NzM4MF5BMl5BanBnXkFtZTcwNDcyOTM0NA@@._V1_.jpg"
                        style="height: 40vw; width: 40vw; object-fit: cover; border-radius: 20px;">
                </li>
                <li data-flip-title="Title 5">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51u-9yDX5YL._AC_SY445_.jpg"
                        style="height: 40vw; width: 40vw; object-fit: cover; border-radius: 20px;">
                </li>
            </ul>
        </div>

    </div>
    
     <!-- table -->
    


    <!-- search bar -->

    <div class="searchbardiv">
        <div id="placeform">
            <form id="form1">
                <div>
                    <h2 style="color: white;">
                        Common, Look Up
                    </h2>
                    <div id="searchbar" class="ui-widget">
                        
                            <input id="tags" type="text" placeholder="Search what you want to see" dblclick="showMovie(this.value)" >
                            </input>
                            <!--button type="Submit" form="form1" name="moviesearch" style="cursor: pointer;">
                                <i class="fa fa-search" style="font-size:20px;color:black; padding:5px 5px;"></i>
                            </button-->
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Filter table -->

    <div class="filterpage">
        <button type="button" class="filterbutton">Filter</button>
        <div class="filterarea"> 
            <div id="filteroptions">
                <form id="filt">
                    <div id="filtaa">
                        <div id="genrebox">
                            <form>
                                <select name="Genre" onchange="showGen(this.value)">
                                <option value="">Genre of Content:</option>
                                <option value="Comedy/Drama">Comedy/Drama</option>
                                <option value="Horror">Horror</option>
                                <option value="Romance">Romance</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Action">Action</option>
                                </select>
                                </form>
                        </div>
                        <br>
                        <div>
                        <form>
                            <select name="location" onchange="showType(this.value)">
                            <option value=""> Type of content:</option>
                            <option value="movie">Movies</option>
                            <option value="show">Shows</option>
                            </select>
                            </form>
                        </div>
                        <br>
                    </div>
                    <!--button type="submit" name="filt" id="filtsubmit">Submit</button-->
                </form>
                
            </div>

        </div>
    </div>

    <!-- Content -->

    
    <div id="moviearea">
		

			

        </div>
        





    <!--------------------------->
    
    



    <!-- Footer -->

<?php include('footer.php');?>

    <!-- end of main code -->
    <script src="flipster/dist/jquery.flipster.min.js"></script>
    <script>
        $(function () {
            var coverflow = $("#coverflow").flipster();
        });
        $(document).ready(function () {
            var availableTags = ["Zindagi na milegi dobara",
                "Borat",
                "Get Smart",
                "The wedding bride",
                "Not Another Teen Movie",
                "Yeh jawani hai diwani",
                "Avengers",
                "Avataar",
                "Avengers Age of Ultron",
                "Avengers Infinity Wars 1",
                "Avengers Infinity Wars 2",
                "Interstellar",
                "500 days of summer",
                "Definetly, maybe",
                "One day",
                "Love, rosie",
                "Love and other drugs",
                "Nocturnal animals",
                "Eternal sunshine of the spotless mind",
                "Perks of being a wallflower",
                "Stuck in love",
                "Gifted",
                "Leap year",
                "Always be my maybe",
                "Up in the air",
                "17 again",
                "No strings attatched",
                "Flipped",
                "Gegin again",
                "Before we go",
                "Set it up",
                "Crazy stupid love",
                "Forgetting sarah marshall",
                "Crazy stupid love",
                "Big sick",
                "How to lose a guy in 10 days",
                "What if",
                "Liberal arts",
                "Life as we know it",
                "10 things I hate about you",
                "The ugly truth",
                "The Interview",
                "Die hard",
                "Detective Pikachu",
                "Midnight at Magnolia",
                "Good Will Hunting",
                "Forrest Gump",
                "Meri Pyaari Bindu",
                "Ae Dil Hai Mushkil",
                "Barfi",
                "Tamasha",
                "Before Sunrise",
                "Before Sunset",
                "Before Midnight",
                "The Other Guys",
                "How I met your mother"
            ];
            $("#tags").autocomplete({
                source: function (request, response) {
                    var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term),
                        "i");
                    response($.grep(availableTags, function (item) {
                        return matcher.test(item);
                    }));
                }
            });
        });
        $(function () {
            $('.filterbutton').on('click', function () {
                $('#filteroptions').stop().slideToggle('slow');
            });

        });



        function showType(str) {
        if (str == "") {
            document.getElementById("moviearea").innerHTML = "";
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
                    document.getElementById("moviearea").innerHTML = xmlhttp.responseText;
                }
            }
// getuser.php is seprate php file. q is parameter 
            xmlhttp.open("GET","moviechoice.php?type="+str,true);
            xmlhttp.send();
        }
    }

    function showGen(str) {
        if (str == "") {
            document.getElementById("moviearea").innerHTML = "";
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
                    document.getElementById("moviearea").innerHTML = xmlhttp.responseText;
                }
            }
// getuser.php is seprate php file. q is parameter 
            xmlhttp.open("GET","moviechoice.php?gen="+str,true);
            xmlhttp.send();
        }
    }
    </script>






</body>

</html>