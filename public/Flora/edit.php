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

$id = $_GET['id'];

$tableName = "floras";
$plant = $query->getById($tableName, $id);

$error_msg = "";

if (isset($_POST['color'], $_POST['name'])) {
    $name = $_POST['name'];
    $color = $_POST['color'];

    if (Validator::isString($name) && Validator::isString($color)) {
        $query->update($tableName, $name, "color", $color, $id);
        header('Location: /32_crud_all_four/public/Flora/index.php');
    } else {
        $error_msg = "* Проверьте правильность введенных данных!";
    }
}

require_once '../header.php';
?>

    <div class="container w-50">
        <h1 class="display-1 text-center">Update Plant Info</h1>
        <?php if ($error_msg) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $error_msg ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
        <form method="post" class="bg-info p-5 rounded text-center shadow">
            <div class="input-group mb-3">
                <label for="name" class="input-group-text" id="basic-addon1">Name</label>
                <input type="text" class="form-control" name="name" value="<?= $plant[0]['name'] ?>">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" id="basic-addon1">Color</label>
                <input type="text" class="form-control" name="color" value="<?= $plant[0]['color'] ?>">
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
<?php require_once '../footer.php'; ?>