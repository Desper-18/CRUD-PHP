<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once 'header.php';
?>
<div class="p-5 bg-secondary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-5 align-self-center">
                <h1>Hi, there! Here is my first CRUD Project!</h1>
                <p class="lead">It was really hard to make it all work properly. Sending requests is such a shit for a
                    newbie Back-end Dev, but it worths doing!</p>
            </div>
            <div class="col align-self-center d-none d-md-block">
                <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active rounded-circle w-auto h-auto p-1 border-0"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="rounded-circle w-auto h-auto p-1 border-0"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="rounded-circle w-auto h-auto p-1 border-0"
                                aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" class="rounded-circle w-auto h-auto p-1 border-0"
                                aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="https://images.unsplash.com/photo-1492683962492-deef0ec456c0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1156&q=80"
                                 class="d-block w-100 object-fit-cover" alt="meal" style="filter: brightness(60%)">
                            <div class="carousel-caption top-50 start-50 translate-middle bottom-0 w-75 d-none d-md-block text-light">
                                <p class="display-4">Meals menu</p>
                                <a class="btn btn-outline-light" href="./Cook/index.php">Check it out!</a>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://images.unsplash.com/photo-1582106245687-cbb466a9f07f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80"
                                 class="d-block w-100 object-fit-cover" alt="drink" style="filter: brightness(60%)">
                            <div class="carousel-caption top-50 start-50 translate-middle bottom-0 w-75 d-none d-md-block text-light">
                                <p class="display-4">Drinks Menu</p>
                                <a class="btn btn-outline-light" href="./Barman/index.php">Check it out!</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1592150621744-aca64f48394a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1191&q=80"
                                 class="d-block w-100 object-fit-cover" alt="plants" style="filter: brightness(60%)">
                            <div class="carousel-caption top-50 start-50 translate-middle bottom-0 w-100 d-none d-md-block text-light">
                                <p class="display-4">Flora Registry</p>
                                <a class="btn btn-outline-light" href="./Flora/index.php">Check it out!</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.unsplash.com/photo-1620332172052-75b4473e6afe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                 class="d-block w-100 object-fit-cover" alt="animals" style="filter: brightness(60%)">
                            <div class="carousel-caption top-50 start-50 translate-middle bottom-0 w-100 d-none d-md-block text-light">
                                <p class="display-4">Fauna Registry</p>
                                <a class="btn btn-outline-light" href="./Fauna/index.php">Check it out!</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                        <span class="bi bi-arrow-left-circle-fill fs-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                        <span class="bi bi-arrow-right-circle-fill fs-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php require_once 'footer.php'; ?>
