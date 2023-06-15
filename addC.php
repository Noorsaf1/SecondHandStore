<?php 
require_once "./body/connect.php";
require_once "./classes/seller-model.php";

$sellerModel = new SellerModel(connect($host, $db, $user, $password));

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
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        box-sizing: border-box;
    }

    .form-group input[type="submit"] {
        background: #C7CEE5;
        border: none;
        color: white;
        cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
        background: #0056b3;
    }
</style>

<main class="container main-container">
    <form action="./form-handlers/add-clothes-form.php" method="POST">
        <div class="form-group">
            <label for="clothing">Garment:</label>
            <input type="text" id="clothing" name="clothing" required>
        </div>
        <div class="form-group">
            <label for="price">price:</label>
            <input type="text" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="seller">Seller: </label>
            <select name="seller_id" id="seller_id">
                <option value="">-- Select seller --</option>
                <?php
                $sellers = $sellerModel->getAllSellers();
                foreach ($sellers as $s) {
                    $firstName = $s['FirstName'];
                    echo "<option value='{$s['ID']}'>$firstName</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="Lay out">
        </div>
    </form>
</main>

<?php include "./body/footer.php"; ?>
