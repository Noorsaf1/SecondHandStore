<?php 
include "./classes/clothes-model.php";
include "./classes/clothes-view.php";

$pdo = require 'body/connect.php';

$clothesView = new ClothesView();
$clothesModel = new ClothesModel($pdo);

$clothes = $clothesModel->getAllClothesWithSeller();

include "./body/header.php";
include "./body/nav.php";
?>

<!-- Include Bootstrap CSS in Header -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- Include Custom CSS after Bootstrap -->
<style>
    body {
        background: #f4f4f4;
    }
    
    .main-container {
        margin-top: 50px;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 50px auto;
        text-align: center;
    }
    
    .main-container h2 {
        color: #333;
        font-size: 2.5em;
        margin-bottom: 30px;
    }
    
   
</style>

<main class="container main-container">
    <h2>All clothes</h2>
    <ul class="clothes-list">
        <?php $clothesView->renderAllClothes($clothes) ?>
    </ul>
</main>

<?php include "./body/footer.php"; ?>
