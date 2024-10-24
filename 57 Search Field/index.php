<?php
    include "header.php";
?>
    
    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submitSearch">Search</button>
    </form>

    <h1>Front Page</h1>
    <h2>All Articles:</h2>

    <div class="article-container">
        <?php
            $SQL = "SELECT * FROM Article_57";
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