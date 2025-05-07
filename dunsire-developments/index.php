<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dunsire Developments | Leading Developer in Ontario </title>
    <meta name="title" content="Dunsire Developments | Leading Developer in Ontario | Sustainable Communities">
    <meta name="description"
        content="Dunsire Developments is a trusted homebuilder creating high-quality, environmentally conscious communities across Ontario. Discover our commitment to sustainable living and exceptional craftsmanship.">
    <meta name="keywords"
        content="Dunsire Developments, Ontario Developer, Sustainable Communities, Green Building, Mira Towns, Pre Construction Homes">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta property="og:title" content="Dunsire Developments | Leading Developer in Ontario">
    <meta property="og:site_name" content="Dunsire Developments" />
    <meta property="og:description"
        content="Discover Dunsire Developments' commitment to building sustainable, high-quality communities across Ontario.">
    <meta property="og:image" content="./images/Dunsire-logo.png">
    <link rel="canonical" href="https://miratowns.ca/dunshire-development/" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/sitemap.jpg');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .project-card {
            transition: transform 0.3s ease;
            margin-bottom: 30px;
            max-height: 400px;
            overflow: hidden;
        }

        .project-card:hover {
            transform: translateY(-10px);
        }

        .project-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .project-card .card-body {
            padding: 1rem;
        }

        .project-card .card-text {
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .value-icon {
            font-size: 2.5rem;
            color: #0056b3;
            margin-bottom: 1rem;
        }

        .nav-link {
            color: #000 !important;
            font-weight: 500;
        }

        .stats-section {
            background-color: #003049;
            color: white;
            padding: 80px 0;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .stat-text {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .timeline-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .timeline-item {
            padding: 20px;
            border-left: 3px solid #003049;
            margin-bottom: 30px;
            position: relative;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 24px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #003049;
        }

        .awards-section {
            padding: 80px 0;
        }

        .award-card {
            padding: 20px;
            border: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .award-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../">
                <img src="../images/Dunsire-logo.png" alt="Dunsire Developments Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#awards">Awards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->


    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container pt-5">
            <div class="row align-items-center pt-5">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">About Dunsire Developments</h2>
                    <p class="lead">Dunsire is a trusted homebuilder known for creating high-quality, environmentally
                        conscious communities across Ontario. With a focus on sustainable living and exceptional
                        craftsmanship, Dunsire has built strong partnerships with homeowners, landowners, and local
                        communities by delivering homes that go beyond just construction—offering a complete lifestyle
                        experience.</p>

                </div>
                <div class="col-lg-6">
                    <img src="../images/sitemap.jpg" alt="Dunsire Development Project" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- The Dunsire Difference Section -->
    <section id="difference" class="stats-section">
        <div class="container">
            <h2 class="text-center mb-5 display-4">THE DUNSIRE DIFFERENCE</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="stat-number">2010</div>
                    <div class="stat-text">Est.</div>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">236</div>
                    <div class="stat-text">Homes Completed</div>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">10</div>
                    <div class="stat-text">Awards & Recognitions</div>
                </div>
                <div class="col-md-3">
                    <div class="stat-number">9</div>
                    <div class="stat-text">Successfully Built Communities</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5 bg-light">
        <div class="container pt-5">
            <h2 class="text-center fw-bold mb-5"> Featured Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card project-card">
                        <img src="../images/mira-family.jpg" class="card-img-top" alt="Mira Towns">
                        <div class="card-body">
                            <h5 class="card-title">Mira Towns</h5>
                            <p class="card-text">Modern townhomes in Barrie starting from $500s. A perfect blend of
                                luxury and sustainability.</p>
                            <a href="https://condomonk.ca/barrie/mira-townhomes-barrie" target="_blank"
                                class="btn btn-dark">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card project-card">
                        <img src="../images/bromley-gardens.jpg" class="card-img-top" alt="Bromley Gardens">
                        <div class="card-body">
                            <h5 class="card-title">Bromley Gardens</h5>
                            <p class="card-text">Luxury detached homes in St. Catharines. Starting from $804.99k.</p>
                            <a href="https://condomonk.ca/niagara/bromley-gardens" target="_blank"
                                class="btn btn-dark">Learn
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card project-card">
                        <img src="../images/meadow-heights.webp" class="card-img-top" alt="Meadow Heights">
                        <div class="card-body">
                            <h5 class="card-title">Meadow Heights</h5>
                            <p class="card-text">Detached homes in Port Colborne. Starting from $669.5k.</p>
                            <a href="https://condomonk.ca/niagara/meadow-heights" target="_blank"
                                class="btn btn-dark">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline" class="timeline-section">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Dunsire Journey</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="timeline-item">
                        <h4>2010</h4>
                        <p>Dunsire Developments was established with a vision to create sustainable communities</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2015</h4>
                        <p>Completed our first major development project and received industry recognition</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2018</h4>
                        <p>Expanded operations across Ontario and introduced innovative green building practices</p>
                    </div>
                    <div class="timeline-item">
                        <h4>2024</h4>
                        <p>Launching exciting new projects including Mira Towns in Barrie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section id="awards" class="awards-section">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Awards & Recognition</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="award-card">
                        <i class="bi bi-trophy-fill value-icon"></i>
                        <h4>Best Green Builder 2023</h4>
                        <p>Recognized for our commitment to sustainable development practices</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="award-card">
                        <i class="bi bi-award-fill value-icon"></i>
                        <h4>Community Excellence</h4>
                        <p>Awarded for creating vibrant, livable communities</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="award-card">
                        <i class="bi bi-star-fill value-icon"></i>
                        <h4>Customer Satisfaction</h4>
                        <p>Highest rated builder for customer satisfaction in Ontario</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="pt-5 " id="Contact">
            <div class="pt-5 mt-5 " data-aos="fade-up" data-aos-duration="2000" data-aos-delay="50">
                <div class="row mx-0 ">
                    <!-- <div class="text-center pt-3 ">
                        <img src="images/empire-logo.png " class="img-fluid regoimg " alt="Empire Communities Logo ">
                    </div> -->
                    <h6 class="text-center fs-1 fw-bold pt-3 register "> Register today</h6>
                    <div class="registertext px-4 d-flex justify-content-center align-items-center text-center mb-0">
                        <p>Register today and get the first update Dunsire Developments projects
                        </p>
                    </div>

                </div>
                <div class="row row-cols-1 row-cols-md-3 mx-4 mx-md-0 pb-md-5 ">
                    <div class="col-md-3 "></div>
                    <div class="col-md-6 px-md-5 ">

                        <form action="../contactForm.php" method="POST">
                            <div class="row ">
                                <div class="mb-3 "><input type="text" placeholder="Name" name="name" id="name"
                                        class="fields" required></div>

                            </div>
                            <div class="row row-cols-1 row-cols-sm-2 ">
                                <div class="col ">
                                    <div class="mb-3 "><input type="text" aria-describedby="emailHelp"
                                            placeholder="Phone" name="phone" id="phone" class="fields" required></div>
                                </div>
                                <div class="col ">
                                    <div class="mb-3 "><input type="text" aria-describedby="emailHelp"
                                            placeholder="Email" name="email" id="email" class="fields" required></div>
                                </div>
                            </div>
                            <div class="row me-0 row-cols-1">
                                <div class="col">
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <select class="form-select" name="realtor" id="realtor"
                                                aria-label="Floating label select example" required>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                            <label for="floatingSelect">Are you a realtor or working with one? </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row ">
                                <div class=" "><textarea name="message" id="message" placeholder="Enter your message"
                                        class="fields mess"></textarea></div>
                            </div>
                            <div class="row ">
                                <p class=" text-muted sm-text text-center mt-0 ">*I consent to receive future
                                    communications about Dunsire Developments. I understand I can opt out at anytime by
                                    sending
                                    an email.</p>
                            </div>
                            <div class="row ">
                                <div class="col text-center ">
                                    <!-- <input type="submit " onclick="sendMail() " value="Send " class="btn call-btn btn-sm p-2 px-4 btn-lg "> -->
                                    <Button class="btn call-btn  p-2 px-4 btn-lg">Send</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="row-cols-md-3 "></div>
                </div>
            </div>
        </div>
    </section>
    <div class="mt-5 pt-3">
        <img loading="lazy" src="../images/line.png" alt="Line image for character" class="img-fluid foot-up-img" />
    </div>
    <footer class="footerr  py-5 mb-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 justify-content-between ">
                <div class="col-md-5 my-3 fotwidth center-sm px-4 px-md-0">

                    <p class=" ">
                        <img src="../images/mira-logo-black.png" class="navbar-brand pb-1" alt="Mira Townhomes Logo">
                    </p>
                    <span class="small-text justifyy">
                        Disclaimer: We do not represent the builder. The renderings, floor plans, and images used on
                        this website are for illustrative purposes only and may not reflect the final product. Features,
                        dimensions, materials, and colors are subject to change without notice. Actual homes may vary in
                        appearance. Please consult with the builder for the most up-to-date information on the homes and
                        specifications </span>
                    <div class="list pt-2 d-md-block d-none">
                        <p class=""> <a href="https://homebaba.ca/barrie" target="_blank"
                                class="text-dark text-decoration-none"><strong>
                                    Pre construction homes in Barrie</strong></a>
                        </p>

                    </div>
                </div>
                <div class="col-md-4  py-md-5 py-4 center-sm px-5 ">
                    <div>
                        <h5 class="text-dark fw-bold mt-4 mb-3">About</h5>
                        <div class="list d-block ">
                            <p class="mybot ">
                                Builder : Dunsire Developments
                            </p>
                            <p class="mybot ">
                                Location :700 Mapleview Drive East, Barrie
                            </p>

                            <p class="mybot ">
                                House Type : Townhomes
                            </p>

                        </div>

                    </div>
                </div>

                <div class="col-md-2 mt-md-5 pt-md-5 mt-sm-0 pt-4 center-sm d-flex  justify-content-center d-flex">
                    <img src="../images/Dunsire-logo.png" class="img-fluid regoimg " alt="Dunsire Developments-logo">
                </div>
            </div>

            <div class="list mt-5 pt-5 d-md-none d-block center-sm">
                <p class=""> <a href="https://homebaba.ca/barrie" target="_blank"
                        class="text-dark text-decoration-none"><strong>
                            Pre construction homes in Barrie</strong></a>
                </p>

            </div>

        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    if (
        isset($_SESSION['success'])
    ) {
        ?>

        <?php
        unset($_SESSION['success']);

    }

    if (
        isset($_SESSION['error'])
    ) {
        ?>
        <script type="text/javascript" async>
            silverBox({
                title: {
                    text: "Error",
                    alertIcon: "error",
                },
                text: "Your Message has not been received.",
            });
        </script>
        <?php
        unset($_SESSION['error']);
    }
    ?>
</body>

</html>