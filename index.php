<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Photo Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#nature">Nature</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#architecture">Architecture</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#travel">Travel</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
            </ul>
            <!-- a search from use it in class maybe for another project
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
-->
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/arch1.jpg" alt="Architecture">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Architecture</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Nature2.jpg" alt="Nature">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Nature</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/travel3.jpg" alt="Travel">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Travel</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <a id="nature">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">
                    Nature
                </h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/Nature2.jpg">
                    </div>
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/Nature3.jpg">
                    </div>
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/Nature4.jpg">
                    </div>
                </div>
            </div>

        </section>
    </a>

    <a id="architecture">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">
                    Architecture
                </h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/arch2.jpeg">
                    </div>
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/arch3.jpg">
                    </div>
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/arch4.jpg">
                    </div>
                </div>
            </div>

        </section>
    </a>

    <a id="travel">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">
                    Travel
                </h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/travel2.jpg">
                    </div>
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/travel3.jpg">
                    </div>
                    <div class="col-log-4 col-md-4 col-12">
                        <img class="img-fluid pb-3" src="images/travel4.jpg">
                    </div>
                </div>
            </div>

        </section>
    </a>

    <a id="contact">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">
                    Contact Us
                </h2>
            </div>
            <div class="w-50 m-auto">
                <form action="about.php" method="post">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Number:</label>
                        <input type="text" name="number" placeholder="Number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </section>
    </a>

    <a id="about">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">
                    About
                </h2>
            </div>
            <div class="container-fluid">
                <h3 class="text-center">Franc Bica</h3> <br>
                <p class="text-center"><b>I am a passionate photographer interested in working in Architecture, Nature, and Travel Photography.
                        I am a full time freelancer with an experience of 5 years.
                    </b></p>
            </div>

        </section>
    </a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>