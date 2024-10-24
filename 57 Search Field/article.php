<?php
    include "header.php";
?>
    

    <h1>Article Page</h1>

    <div class="article-container">
        <?php

            $title = mysqli_real_escape_string($dbhConn, $_GET['title']);
            $date = mysqli_real_escape_string($dbhConn, $_GET['date']);

            $SQL = "SELECT * FROM Article_57 WHERE a_title='$title' AND a_date='$date'";
            $dataFromDataBase = mysqli_query($dbhConn, $SQL);
            $queryResult = mysqli_num_rows($dataFromDataBase);

            if($queryResult > 0)
            {
                while($row = mysqli_fetch_assoc($dataFromDataBase))
                {
                    echo "<div class='article-box'>
                            <h3>".$row['a_title']."</h3>
                            <p>".$row['a_text']."</p>
                            <p>".$row['a_author']."</p>
                            <p>".$row['a_date']."</p>
                        </div>";
                }
            }
        ?>
    </div>

</body>
</html>