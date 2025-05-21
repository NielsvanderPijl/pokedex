<?php
include "db.php";
include "function.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex - by Niels</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Donald Trump</h5>
                    <p class="card-text">De 47ste president van amerika.</p>
                </div>
                <img src="img/donaldtrump.jpg" class="card-img-bottom" alt="...">
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>



        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
