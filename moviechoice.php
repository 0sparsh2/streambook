<!------------------------------------------------------------------->


<style>
    .trash{
        cursor:pointer;
        border:none;
        text-align:center;
        background:none;
    }
    .fa-plus{
        color:black;
        margin-left:50%;
        font-size:3rem;
        display:block;
    }
    .fa-plus:hover{
        color:green;
    }
</style>



    <?php
    include('session.php');
    ?>
           
   

<div class="movielist" >

			
                
                <table align="center" cellpadding="2" cellspacing="0" style="border:2px solid black;" id="tablemovie">
                <?php
                    error_reporting(0);
                     $type = $_GET['type'];

                    $sql= "SELECT * FROM content where content_type = trim('$type')";
                    $result = mysqli_query($con, $sql);
                    $contents= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    mysqli_free_result($result);

                    error_reporting(0);
                    $gen = $_GET['gen'];
                    $gen= "SELECT * FROM content where genre = trim('$gen')";
                    $result2 = mysqli_query($con, $gen);
                    $genres= mysqli_fetch_all($result2, MYSQLI_ASSOC);
                    mysqli_free_result($result2);

                ?>
                <tr>
                    <th>
                        Title
                    </th>
                    <th>
                        Movie/Show
                    </th>
                    <th>
                        Genre
                    </th>
                    <th>
                        Add
                    </th>
                </tr>
                 <?php foreach($contents as $content): ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($content['Title']); ?>
                            </td>
                            <td >
                                <?php echo htmlspecialchars($content['content_type']); ?>
                            </td>
                            <td >
                                <?php echo htmlspecialchars($content['Genre']); ?>
                            </td>
                            <td>
                               
                                <form action="movies.php" method="POST">
                                        <input type="hidden" name="id_to_add" style="display:none"
                                            value="<?php echo $content['content_id']; ?>">
                                        <button type="submit" name="add" class="trash"><i class="fa fa-plus" style="font-size:3rem;"></i></button>
                                    </form>
                                
                            </td>
                        </tr>
                 <?php endforeach; ?>
                 <?php foreach($genres as $genre): ?>
                        <tr>
                            <td >
                                <?php echo htmlspecialchars($genre['Title']); ?>
                            </td>
                            <td >
                                <?php echo htmlspecialchars($genre['content_type']); ?>
                            </td>
                            <td >
                                <?php echo htmlspecialchars($genre['Genre']); ?>
                            </td>
                            <td >
                               
                                <form action="movies.php" method="POST">
                                        <input type="hidden" name="id_to_add" style="display:none"
                                            value="<?php echo $content['content_id']; ?>">
                                        <button type="submit" name="add" class="trash"><i class="fa fa-plus" style="font-size:3rem;"></i></button>
                                    </form>
                                
                            </td>
                        </tr>
                 <?php endforeach; ?>

                </table>

            </div>
            


   
                    