<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Melomaniac Activity</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"> MUSIX </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="index.php">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song 1.php">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="song 2.php">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light" href="song 3.php">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="song 4.php">Song 5</a></li>
                          <li class="nav-item"><a class="nav-link text-light" href="song 5.php">Song 6</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to Melomaniac</h1>
                <p class="lead">This page provides the top 6 music of mine.</p>

                
            </div>
        </header>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4 ">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-primary">YKWIM?</h2>
                        <p class="lead">Yot Club</p>
                        <audio id = "s1" controls> <source src="music/YKWIM.mp3" type="audio/mp3"> </audio>

                        <?php
                        echo "<br/>";
                        echo "<br/>";
                        echo "<p> Hey </p>";
                        echo "<p> It's not like you've ever tried to stay </p>";
                        echo "<p> Sometimes it seems like I'm in your way </p>";
                        echo "<p> Well, that's how it seems </p>";
                        echo "<p> Hey </p>";
                        echo "<p> You know what I mean? </p>";
                        echo "<br/>";
                        echo "<p> It seems like I care too much </p>";
                        echo "<p> When I'm all alone, oh no </p>";
                        echo "<p> I feel like I care too much </p>";
                        echo "<p> When no one's at home for me </p>";
                        echo "<p> Feel like I'm fallin' out </p>";
                        echo "<p> Well, that's how it seems </p>";
                        echo "<p> I think that I'm fallin' out </p>";
                        echo "<p> You know what I mean? </p>";
                        echo "<br/>";
                        echo "<p> It seems like I care too much </p>";
                        echo "<p> When I'm all alone, oh no </p>";
                        echo "<p> She said that I care too much </p>";
                        echo "<p> When no one's at home for me, ah </p>";
                        
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-3 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Adolfo III Montero Rey</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
