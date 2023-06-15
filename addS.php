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
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input {
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
    <form action="./form-handlers/add-seller-form.php" method="POST">
        <div class="form-group">
            <label for="first_name">First name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Surname:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Add">
        </div>
    </form>
</main>

<?php include "./body/footer.php"; ?>
