<?php
    $servername = "localhost:8889";
    $username = "root";
    $password = "root";
    $db_table = "nor-cal";

    $conn = mysqli_connect($servername, $username, $password, $db_table);

    $id = $_GET['id'];
    $sql = "SELECT * FROM animals WHERE id={$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="style-animals.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;700&display=swap" rel="stylesheet">

    </head>
    <body style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(images/<?php echo $row['type'];?>.jpeg);">
        <header>

        </header>

        <!-- Title      -->

        <section class="title">
            <h1><?php echo $row['name'];?></h1>
            <div class="row">
                <div id="line-title"></div>
            </div>
        </section>

        <!-- Map        -->

        <!-- Text Blurb        -->

        <section class="blurb">
            <p>
                <?php echo $row['info'];?>
            </p>

        </section>

        <section class="image">
            <img src="<?php echo $row['image']; ?>">
        </section>

        <footer>

        </footer>
    </body>
</html>
