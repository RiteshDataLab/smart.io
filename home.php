<?php

session_start();
include('includes/header.php');

?>

<?php
if (isset($_SESSION['status'])) {
    echo "<h4 class='alert alert-success'>" . $_SESSION['status'] . "</h4>"; 
    unset($_SESSION['status']); 
}
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Main Menu
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php">Admin Dashboard</a></li>
                        <li><a class="dropdown-item" href="coustomer.php">Customer Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<section>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/juGajmc1gOVBUtt5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/swachhata-19.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/banner_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<br>
<br>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                    <h2>WELCOME TO <span>Ministry Of Coal</span></h2>
                    <p id="welcome"><span id="wel">Welcome</span> to the website of Ministry of Coal, Government of India.</p>
                    <p><b>1. Ministry of Coal's Core Responsibilities:</b>
                        <br>
                        <b>Policy Formulation:</b> The Ministry of Coal is responsible for the formulation of policies and strategies related to coal and lignite exploration, development, and utilization. These policies aim to ensure the sustainable and efficient utilization of these resources.
                        <br>
                        <b>Project Sanctioning: </b>High-value projects within the coal and lignite sector, including new mining ventures and infrastructure development, require approval from the Ministry. This oversight helps in maintaining regulatory control and aligning projects with national energy goals.
                        <br>
                        <b>Issue Resolution:</b> The Ministry addresses various issues concerning the coal and lignite sector, such as environmental concerns, land acquisition, and labor matters. It plays a crucial role in resolving conflicts and ensuring smooth operations.
                        <br>
                        <b>2. Coal India Ltd. (CIL) and Its Subsidiaries:</b>
                        <br>
                        <b>Coal Production: </b>CIL and its subsidiaries are at the forefront of coal production in India. They operate numerous coal mines across the country, contributing significantly to India's energy needs.
                        <br>
                        <b>Exploration:</b> These entities engage in exploration activities to identify new coal reserves and assess their potential. This is crucial for future resource planning.
                        <br>
                        <b>Distribution: </b>CIL ensures the efficient distribution of coal to various sectors, including power generation, steel, cement, and more.
                        <br>
                        Technology Adoption: CIL invests in technology and innovation to improve mining efficiency, safety, and environmental sustainability.
                        <br>
                        <b>3. Neyveli Lignite Corporation India Limited (NLCIL):</b>
                        <br>
                        <b>Lignite Mining: </b>NLCIL focuses on lignite mining operations, particularly in the Neyveli region of Tamil Nadu. Lignite is a valuable source of energy and is used for power generation.
                        <br>
                        Power Generation: NLCIL also operates power plants to harness energy from lignite, contributing to the energy mix in the southern region of India.
                        <br>
                        Renewable Energy: In addition to lignite-based power generation, NLCIL has ventured into renewable energy projects, including solar and wind power.

                
                </div>
                <div class="col-md-4">
                    <div class="people">
                        <div id="modi">
                            <img src="img/Modi-Ji-Photo-.jpg" alt="pmmodi" width="138" height="133">
                            <h4>Shri Narendra Modi</h4>
                            <h6>Hon’ble Prime Minister</h6>
                            <a href="https://www.pmindia.gov.in/en/">View portfolio</a>
                        </div>
                        <div id="modi">
                            <img src="img/joshi.webp" alt="" width="138" height="133" id="joshi">
                            <h4 id="det">Shri Pralhad Joshi</h4>
                            <h6>Minister of Coal & Mines & Parliamentary Affairs</h6>
                            <a href="https://coal.nic.in/en/minister/shri-pralhad-joshi">View portfolio</a>
                        </div>
                        <div id="modi">
                            <img src="img/raosaheb.png" alt="" width="120" height="133" id="raosaheb">
                            <h4 id="det">Shri Raosaheb Patil Danve</h4>
                            <h6>Hon'ble MoS for Rail &Coal & Mines</h6>
                            <a href="https://coal.nic.in/en/minister/shri-raosaheb-patil-danve">View portfolio</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
</section>
<section class="section">
    <div class="logos">
        <div class="logos-slide">
            <img src="img/512px-Ministry_of_Coal_India.svg.webp" alt="Error404">
            <img src="img/jharia-coal-mine.webp" alt="Error404">
            <img src="img/pmgatisakti.png" alt="Error404">
            <img src="img/coal-740x520.webp" alt="Error404">
            <img src="img/g20-summit-india-2023-logo.png" alt="Error404">
            <img src="img/railIndia.webp" alt="Error404">
            <img src="img/azadi.jpg" alt="Error404">
            <img src="img/000_32994AY.webp" alt="Error404">
            <img src="img/Swach-Bharat_Preview.png" alt="Error404">
            <img src="img/India_Coal_Mine.webp" alt="Error404" alt="Error404">
        </div>
    </div>
</section>
<!-- <section>
    <div class="col md-8 bg-warning">
        <a href="login.php" class="btn btn-success">Login</a>
        <a href="register.php" class="btn btn-primary">Register</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <a href="index.php" class="btn btn-danger">Admin page</a>
    </div>
</section> -->













<?php include('includes/footer.php'); ?>