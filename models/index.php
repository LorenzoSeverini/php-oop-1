<?php

require __DIR__ . '/db.php';
require __DIR__ . '/movieList.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- css -->
    <style>
        .card {
            height: auto;
            position: relative;
            overflow: hidden;
        }

        .pointer {
            cursor: pointer;
        }

        .image-container {
            height: 100%;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            color: #fff;
            padding: 20px;
            transition: opacity 0.3s ease;
        }

        .card:hover .card-overlay {
            opacity: 1;
        }

        /* .card-title {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        } */
    </style>

</head>

<body class="bg-dark">

    <!-- header -->
    <header>
        <!-- movie 🎥 -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-3">
                    <h1 class="text-center text-white">Movies 🎬</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- main 🍿-->
    <main class="my-3">
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $movie) { ?>
                    <?php echo $movie->renderCard(); ?>
                <?php } ?>
            </div>
        </div>
    </main>
    <!-- footer -->
    <footer>
        <!-- footer -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-3">
                    <p class="text-center text-white">made with 🎥 by hollywood</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>