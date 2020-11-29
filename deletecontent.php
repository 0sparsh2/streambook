<?php
    require 'profile.php';
     if(isset($_POST['delete'])){

        $id_to_delete = mysqli_real_escape_string($con, $_POST['id_to_delete']);

        $sql = "DELETE FROM watchlist WHERE content_id = '$id_to_delete' and user_id = '$loggedin_id' ";

        if(mysqli_query($con, $sql)){
            echo 'success';
        
        } else {
        echo 'query error: '. mysqli_error($con);
        }
} ?>