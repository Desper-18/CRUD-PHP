<?php

use App\Database\Connection;
use App\Database\QueryBuilder;
use App\Validation\Validator;

require_once __DIR__ . '/../../vendor/autoload.php';

$config = require_once '../config.php';
$pdo = Connection::make($config);
$query = new QueryBuilder($pdo);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error_msg = "";

if (isset($_POST['name'], $_POST['color'])) {
    $name = trim($_POST['name']);
    $color = trim($_POST['color']);

    if (Validator::isString($name) && Validator::isString($color)) {
        try {
            $query->store('floras', implode(", ", array_keys($_POST)), $name, $color);
            header('Location: /32_crud_all_four/public/Flora/index.php');
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    } else {
        $error_msg = "* Проверьте правильность введенных данных!";
    }
}

require_once '../header.php';
?>

    <div class="container w-50 d-none d-md-block">
        <h1 class="display-1 text-center text-capitalize">Add a plant</h1>
        <?php if ($error_msg) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $error_msg ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
        <form method="post" class="bg-success p-5 rounded text-center shadow-lg">
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Name of plant</label>
                <input type="text" class="form-control" name="name" placeholder="Lily">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Color</label>
                <input type="text" class="form-control" name="color" placeholder="White">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <div class="container d-block d-md-none">
        <h1 class="display-1 text-center text-capitalize">Add a plant</h1>
        <?php if ($error_msg) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $error_msg ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
        <form method="post" class="bg-success p-5 rounded text-center shadow-lg">
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Name of plant</label>
                <input type="text" class="form-control" name="name" placeholder="Lily">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Color</label>
                <input type="text" class="form-control" name="color" placeholder="White">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

<?php require_once '../footer.php'; ?>
