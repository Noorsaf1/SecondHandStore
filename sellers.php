<?php 
include "./classes/seller-model.php";
include "./classes/seller-view.php";

$pdo = require 'body/connect.php';

$sellerView = new SellerView();
$sellerModel = new SellerModel($pdo);

$sellers = $sellerModel->getAllSellersWithClothesAmount();

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
    }
    
    .main-container h2 {
        text-align: center;
        color: #333;
        font-size: 2.5em;
        margin-bottom: 40px;
    }

    .seller-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
  
    }

    .seller-item {
        background: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        
    }

    .seller-item:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    .seller-name {
        font-size: 1.5em;
        color: #333;
        margin-bottom: 10px;
    }

    .seller-description {
        color: #666;
        flex-grow: 1;
    }

    .clothes-count {
        color: #333;
        font-weight: bold;
        margin-top: 20px;
    }
</style>

<main class="container main-container">
    <h2>All sellers</h2>
    <div class="seller-list">
        <?php $sellerView->renderAllSellers($sellers) ?>
    </div>
</main>

<?php include "./body/footer.php"; ?>
