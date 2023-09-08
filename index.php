<?php
$req = $_SERVER['REQUEST_URI'];

$footer = file_get_contents('./views/partials/common-footer.php');

$content = '';
$title = '';

//manage routes
switch ($req) {
    case '/':
        $content = file_get_contents('./views/home/Index.php');
        $title = 'Home';
        break;
    case '/products':
        $content = file_get_contents('./views/home/Products.php');
        $title = 'Products';
        break;
    default:
        $content = file_get_contents('error.php');
        $title = '404';
        break;
}
ob_start();
include('./views/partials/common-head.php');
$head = ob_get_clean();
?>

<!doctype html>
<html lang="en">
<?= $head ?>
<body>
<div class="container">
    <?= $content ?>

</div>
</body>

<?= $footer ?>


</html>



