<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketan - Childcare & Kids School</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- Header Section Start -->
    <?php include 'include/header.php'?>
    <!-- Header Section End -->

    <!-- About Banner Section Start -->
    <section class="about-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <h3 class="text-center text-white fw-bold">About</h3>
                        <ol class="breadcrumb d-flex align-items-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.php" class="text-white text-decoration-none fw-bold" >Home</a>
                            </li>
                            <li class="breadcrumb-item active fw-bold" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    
    <section class="who pt-4 pb-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="who_we mt-5 fw-bold">
                        <span>Who We Are</span>
                        <h3 class="fw-bold">Kindergarten and Childhood is Our Passion</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                        <ul class="list-unstyled row">
                            <li class="col-sm-6">
                                <span > 1 </span>
                                Homelike Environment
                            </li>
                            <li class="col-sm-6">
                                <span> 2 </span>
                                Quality Educators
                            </li>
                            <li class="col-sm-6">
                                <span> 3 </span>
                                Safety and Security
                            </li>
                            <li class="col-sm-6">
                                <span> 4 </span>
                                Play to Learn
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <button class="btn text-light default-btn" type="submit">Read More</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img src="./assets/img/who-we-are.jpg" alt="boy-child" class="img-fluid">
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!-- About Banner Section End -->

    <!-- Footer Section Start -->
    <?php include 'include/footer.php'?>
    <!-- Footer Section End -->
</body>
</html>