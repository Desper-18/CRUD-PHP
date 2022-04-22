<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

require_once __DIR__ . '/../../vendor/autoload.php';

$config = require_once '../config.php';
$pdo = Connection::make($config);
$query = new QueryBuilder($pdo);
$dishes = $query->getAll('dishes');

require_once '../header.php'
?>

<div class="container w-50">
    <h1 class="display-1 text-center">List of Dishes</h1>
    <div class="text-end">
        <a href="./create.php" class="btn btn-outline-success text-end" title="CREATE"><i
                    class="bi bi-plus-square-fill"></i> Add</a>
    </div>
    <table class="table table-striped table-hover mt-3 shadow">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col" class="text-center">Update</th>
            <th scope="col" class="text-center">Remove</th>
        </tr>
        </thead>
        <tbody>
        <?php if (count($dishes) == 0) : ?>
            <tr class="table-danger text-center">
                <td colspan="5" >Nothing to show!</td>
            </tr>
        <?php endif; ?>
        <?php foreach ($dishes as $dish) : ?>
            <tr>
                <th scope="row"><?= $dish['id'] ?></th>
                <td><?= $dish['name'] ?></td>
                <td><?= $dish['price'] ?> TJS</td>
                <td class="text-center"><a href="./edit.php?id=<?= $dish['id'] ?>"
                                           class="btn btn-outline-info btn-sm" title="UPDATE"><i
                                class="bi bi-pencil-square"></i></a</td>
                <td class="text-center"><a href="./delete.php?id=<?= $dish['id'] ?>"
                                           class="btn btn-outline-danger btn-sm" title="DELETE"><i
                                class="bi bi-trash-fill"></i></a></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php require_once '../footer.php'; ?>
