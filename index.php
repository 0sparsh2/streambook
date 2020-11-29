<?php include "logincheck.php"; ?>



<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login_css.css" />

</head>

<body>
    <button onclick="document.getElementById('box').style.display='block'" style="width:auto;">Login</button>
    <div id="box" class="modal">

        <?php
                        $remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
                        if ($remarks==null and $remarks=="") {
                            //echo ' <div id="reg-head" class="headrg">Register Here</div> ';
                        }
                        if ($remarks=='success') {
                            echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
                        }
                        if ($remarks=='failed') {
                            echo ' <div id="reg-head-fail" class="headrg">Registration Failed!, Username exists</div> ';
                        }
                        if ($remarks=='error') {
                            echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: '.$_GET['value'].' </div> ';
                        }
        ?>

        <!-- Checking new method -->

        <form class="modal-content animate" style="max-height: 900px;" action="" method="POST" id="signin" id="reg"
            id="userform1">
            <?php
                        $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
                        if ($remarks==null and $remarks=="") {
                            //echo ' <div id="reg-head" class="headrg">Login Here</div> ';
                        }
                        if ($remarks=='failed') {
                            echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
                        }
                    ?>
            <div class="imgcontainer">
                <span onclick="document.getElementById('box').style.display='none'" class="close" title="Close modal"
                    style="color:wheat">&times;</span>
                <img src="images/defaultface.jpg" alt="Temp photo" class="avataar">
            </div>

            <div class="loginbox">
                <div id="loginset">
                    <label for="username"><b>
                            <h2>Username</h2>
                        </b></label>
                    <input type="text" placeholder="Username" name="username"
                        style="font-size: medium;color:rgb(58, 35, 9) ;" id="emailli" required>
                    <label for="password"><b>
                            <h2>Password</h2>
                        </b></label>
                    <input type="password" placeholder="Password" name="password"
                        style="font-size: medium;color:rgb(58, 35, 9) ;" id="pswli" required>
                </div>
                <div id="logsign">
                    <button type="submit" style="margin-right: 20px;" form="signin">Login</button>
                    <button type="button" onClick="signupfn()">Sign Up</button>
                </div>

                <!--br>
                <div id="loginend" >
                    <label style="margin-left: -200px;">
                        <input id="remember" type="radio" checked="checked" name="remember" style="font-style:default;"> Remember
                    </label>
                    <span class="forgotpass">Forgot <a href="#">password?</a></span>
                </div-->

        </form>






        <form class="modal-content animate" name="reg" action="execute.php" onsubmit="return passCheck(),validateForm()"
            method="post" id="reg">
            <!--onSubmit="return passCheck()"-->

            <div id="signinset">
                <label for="fname"><b>
                        <h2>First Name</h2>
                    </b></label>
                <input type="text" placeholder="first name" name="fname" required
                    style="font-size: medium;color:rgb(58, 35, 9) ;" >

                <label for="lname"><b>
                        <h2>Last Name Name</h2>
                    </b></label>
                <input type="text" placeholder="last name" name="lname" style="font-size: medium;color:rgb(58, 35, 9) ;"
                     required>

                <label for="username"><b>
                        <h2>userame</h2>
                    </b></label>
                <input type="text" placeholder="username" name="username"
                    style="font-size: medium;color:rgb(58, 35, 9) ;" required>


                <label for="email_id"><b>
                        <h2>Email ID</h2>
                    </b></label>
                <input type="text" placeholder="Email ID" name="email_id"
                    style="font-size: medium;color:rgb(58, 35, 9) ;" id="emailsu" oninput="emailfn()" required>
                <label for="password"><b>
                        <h2>Password</h2>
                    </b></label>
                <input type="password" placeholder="Password" name="password" style="font-size: medium;" id="pswsu1"
                    oninput="pswfn()" required>
                <p id="pswcheck"></p>
                <label for="confirmpswsu"><b>
                        <h2>Confirm Password</h2>
                    </b></label>
                <input type="password" placeholder="Confirm Password" name="confirmpswsu"
                    style="font-size: medium;color:rgb(58, 35, 9) ;" id="pswsu2" oninput="pswconfirmfn()" required>
            </div>
            <div id="signinbtn">
                <button type="submit" form="reg" onclick="passCheck()">Sign in</button>
            </div>


        </form>

        <!-- New Method Ends-->

    </div>
    <script type="text/javascript" src="login.js"></script>
</body>

</html>