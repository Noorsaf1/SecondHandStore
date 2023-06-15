<?php

require "../classes/clothes-model.php";
$clothesModel = new ClothesModel(require "../body/connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['clothing_id'])) {
        $clothingId = filter_var($_POST['clothing_id'], FILTER_SANITIZE_NUMBER_INT);

        $clothesModel->buyClothes($clothingId);

        header("Location: ../confirmation.php");
        exit;
    }
}
