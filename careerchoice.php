

<body>
<head>

    <style>
    table {
        margin-left:50%;
        transform:translate(-50%);
        width: 70vw;
        border-collapse: collapse;
        border-radius:15px;
        box-shadow:4px 0 20px;
    }

    table, td, th: {
        border: 1px solid tomato;
        padding: 5px;
        
    }
    tr{
        margin-left:20px;
        padding:10px 0 10px;
    }
    tr:nth-child(even){
        background:grey; 
        color:white;       
    }

    tr:nth-child(1){
       text-align:center;
            
    }
    td{
        padding-left:30px;
    }

        

    th {text-align: center;}
    </style>
    </head>
    <body>
    <table>
    <tr>
    <th>Location </th>
    <th>Type</th>
    <th>Title</th>
    <th>Apply</th>
    </tr>
    <?php
    include('session.php');
   
    
    
    if(isset($_POST['add'])){

            $job_to_add = mysqli_real_escape_string($con, $_POST['job_to_add']);

            $sql4 = "INSERT INTO job_applicants values ('$loggedin_id', '$job_to_add') ";

            if(mysqli_query($con, $sql4)){
                header('location:career.php');
             
            
            } else {
            echo 'query error: '. mysqli_error($con);
            }
    }

 

    
// don't use intval if your select value is not numberic
error_reporting(0);
    $q = $_GET['q'];
    
    mysqli_select_db($con,"jobs");
    

    $sql="SELECT * FROM jobs WHERE trim(Type) = trim('$q')";
    $result = mysqli_query($con,$sql);
   

    
    ?>
    
    <?php


    while($row = mysqli_fetch_array($result)) {
    //$placecontents = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //foreach($placecontents as $placecontent):
        error_reporting(0);
        echo "<tr>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['Type'] . "</td>";
        echo "<td>" . $row['title'] . "</td>"; ?>

<form action="career.php" method="POST">
            <input type="hidden" name="job_to_add" style="display:none" value="<?php echo $job['job_id']; ?>">
            <td> <button type="submit" name="add"><a href="careerform.php" target="_blank" style="text-decoration:none; color:black;">Apply</a> </button> </td>
            <form>
   <?php     echo "</tr>";
    //endforeach;
}
    




error_reporting(0);
    $p = $_GET['p'];



    $sql2="SELECT * FROM jobs WHERE trim(location) = trim('$p')";
    $result2 = mysqli_query($con,$sql2);
   

    
    ?>
    
    <?php
    
    while($row2= mysqli_fetch_array($result2)) {
    //$placecontents = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //foreach($placecontents as $placecontent):
        
        echo "<tr>";
        echo "<td>" . $row2['location'] . "</td>";
        echo "<td>" . $row2['Type'] . "</td>";
        echo "<td>" . $row2['title'] . "</td>"; ?>


                                        
        <form action="career.php" method="POST">
            <input type="hidden" name="job_to_add" style="display:none" value="<?php echo $job['job_id']; ?>">
            <td> <button type="submit" name="add"><a href="careerform.php" target="_blank" style="text-decoration:none; color:black;">Apply</a> </button> </td>
            <form>
   <?php     echo "</tr>";
    //endforeach;
}
    


if(isset($_POST['add'])){
    $job_to_add = mysqli_real_escape_string($con, $_POST['job_to_add']);

    $sqladd = "INSERT INTO job_applicants values ('$loggedin_id', '$job_to_add') ";
    mysqli_query($con, $sqladd);
    
    }

error_reporting(0);
    $r = $_GET['r'];



    $sql3="SELECT * FROM jobs WHERE trim(title) = trim('$r')";
    $result3 = mysqli_query($con,$sql3);
   

    
    ?>
    
    <?php
    
    
    while($row3= mysqli_fetch_array($result3)) {
    //$placecontents = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //foreach($placecontents as $placecontent):
        
        echo "<tr>";
        echo "<td>" . $row3['location'] . "</td>";
        echo "<td>" . $row3['Type'] . "</td>";
        echo "<td>" . $row3['title'] . "</td>";

        
        ?>
        <td> 
        <form method="POST">
        <input type="hidden" name="job_to_add" style="display:none"
        value="<?php echo $row3['job_id']; ?>">
            <input type="submit" name="add" id="cf"><i class="fa fa-plus"></i>
            <a href="careerform.php" target="_blank" style="text-decoration:none; color:black;">Apply</a> 
    </input>
        <form>
        </td>
   <?php     echo "</tr>";
    //endforeach;
    }

   
    ?>

</table>