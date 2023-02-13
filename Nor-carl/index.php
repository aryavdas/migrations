<?php
    $servername = "localhost:8889";
    $username = "root";
    $password = "root";
    $db_table = "nor-cal";

    $conn = mysqli_connect($servername, $username, $password, $db_table);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="style-index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <body>

            
        <!-- Nav       -->
        <header>

        </header>

        <!-- Title       -->
        <section class="title">
            <h1> Migrations</h1>
            <div class="row">
                <div id="line-title"></div>
            </div>
        </section>

        <!-- boxes       -->
        <section class="boxes">
            <div class="row">

                <?php
                    $sql = "SELECT COUNT(*) AS TOTAL FROM animals";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $num = $row['TOTAL'];
                    for($i = 1; $i <= $num; $i++):
                ?>

                <!-- Animal Box               -->

                <?php
                    $sql = "SELECT * FROM animals WHERE id={$i} LIMIT 1";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                ?>

                <div class="third-box">
                    <div class="row">
                        <a href="animals.php?id=<?php echo $row[id]; ?>"><img src="<?php echo $row[image]; ?>"></a>
                    </div>
                    <div class="row">
                        <h2 onclick="window.location.href='animals.php?id=<?php echo $row[id]; ?>'"><?php echo $row[name]; ?></h2>
                    </div>
                    <div class="row">
                        <div id="line-box"></div>
                    </div>
                </div>

                <?php endfor; ?>

            </div>

        </section>
            
        
        <!-- Foot       -->
        <footer>
        </footer>
    </body>
</html>