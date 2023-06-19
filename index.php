<?php
include __DIR__ . '/classes/movies.php';
include __DIR__ . '/classes/genres.php';
include __DIR__ . '/data.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <div class="container">
        <ul><?php
            foreach ($movies as $movie) { ?>
                <li><?= $movie->getAllInfo() ?></li><?php
            } ?>
        </ul>
    </div>
</body>

</html>