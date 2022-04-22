<?php require_once __DIR__ . '/../vendor/autoload.php';
//$css = require_once __DIR__ . '/css/styles.css';
$uri = $_SERVER["REQUEST_URI"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/32_crud_all_four/public/css/styles.css">
    <title>CRUDMAN</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light py-3" style="background-color: #3cdbdb;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/32_crud_all_four/public/index.php">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48"
                 viewBox="0 0 48 48">
                <path fill="#FF9800" d="M24 37L19 33 19 25 29 25 29 33z"/>
                <path fill="#FFA726"
                      d="M33 17A2 2 0 1 0 33 21 2 2 0 1 0 33 17zM15 17A2 2 0 1 0 15 21 2 2 0 1 0 15 17z"/>
                <path fill="#FFB74D"
                      d="M33,13c0-7.6-18-5-18,0c0,1.1,0,5.9,0,7c0,5,4,9,9,9s9-4,9-9C33,18.9,33,14.1,33,13z"/>
                <path fill="#FF5722"
                      d="M24,4c-6.1,0-10,4.9-10,11c0,0.8,0,2.3,0,2.3l2,1.7v-5l12-4l4,4v5l2-1.7c0,0,0-1.5,0-2.3c0-4-1-8-6-9l-1-2H24z"/>
                <path fill="#784719"
                      d="M28 18A1 1 0 1 0 28 20 1 1 0 1 0 28 18zM20 18A1 1 0 1 0 20 20 1 1 0 1 0 20 18z"/>
                <g>
                    <path fill="#546E7A" d="M29,31L29,31c0,0-1.5,3-5,3s-5-3-5-3S8,33,8,44h32C40,33,29,31,29,31z"/>
                </g>
                <path fill="#37474F"
                      d="M24,17c-4,0-10-1-10-1v1.3c0,0,3,5.7,5.5,5.7H20c1.2,0,2.2-0.6,2.9-1.5l0,0c0.5-0.7,1.6-0.7,2.2,0l0,0c0.7,0.9,1.8,1.5,2.9,1.5h0.5c2.5,0,5.5-5.7,5.5-5.7V16C34,16,28,17,24,17z M21.7,19c0,1.5-0.5,2-1.8,2h-0.3c-1,0-1.9-0.7-2.3-1.6c-0.2-0.7,0.3-1.4,1-1.4L21.7,19z M30.5,19.4c-0.3,1-1.2,1.6-2.3,1.6H28c-1.3,0-1.8-0.5-1.8-2l3.3-1C30.3,18,30.8,18.7,30.5,19.4z"/>
            </svg>
            CRUD<span style="color: #e95223">MAN</span>
        </a>
        <button class="navbar-toggler bg-dark opacity-50" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" class="bi bi-list align-baseline"
                 viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav gap-4 text-center">
                <li class="nav-item">
                    <a class="nav-link btn-outline-light rounded px-3 <?= strpos($uri, '32_crud_all_four/public/i') ? "active" : "" ?>"
                       aria-current="page"
                       href="/32_crud_all_four/public/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-light rounded px-3 <?= strpos($uri, '32_crud_all_four/public/Cook/') ? "active" : "" ?>"
                       href="/32_crud_all_four/public/Cook/index.php">Meals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-light rounded px-3 <?= strpos($uri, '32_crud_all_four/public/Barman/') ? "active" : "" ?>"
                       href="/32_crud_all_four/public/Barman/index.php">Drinks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-light rounded px-3 <?= strpos($uri, '32_crud_all_four/public/Flora/') ? "active" : "" ?>"
                       href="/32_crud_all_four/public/Flora/index.php">Plants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-outline-light rounded px-3 <?= strpos($uri, '32_crud_all_four/public/Fauna/') ? "active" : "" ?>"
                       href="/32_crud_all_four/public/Fauna/index.php">Animals</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
