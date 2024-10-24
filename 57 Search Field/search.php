<?php
    include "header.php";
?>

<h1>Search Page</h1>

<div class="article-container">
    <?php
        if(isset($_POST['submitSearch']))
        {
            $search = mysqli_real_escape_string($dbhConn, $_POST['search']);
            $SQL = "SELECT * FROM Article_57 WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";

            $result = mysqli_query($dbhConn, $SQL);
            $queryResult = mysqli_num_rows($result);

            

            if($queryResult = 1)
            {
                echo $queryResult." result found";
                
                while($row = mysqli_fetch_assoc($result))
                echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
                            <h3>".$row['a_title']."</h3>
                            <p>".$row['a_text']."</p>
                            <p>".$row['a_author']."</p>
                            <p>".$row['a_date']."</p>
                        </div></a>";
            }
            else if($queryResult > 1)
            {
                echo $queryResult." results found";
                
                while($row = mysqli_fetch_assoc($result))
                echo "<a href='article.php?title=".$row['a_title']."&date=".$row['a_date']."'><div class='article-box'>
                            <h3>".$row['a_title']."</h3>
                            <p>".$row['a_text']."</p>
                            <p>".$row['a_author']."</p>
                            <p>".$row['a_date']."</p>
                        </div></a>";
            }
            else
            {
                echo "There are no results matching your search ! Try using other words to search";
            }
        }
    ?>
</div>