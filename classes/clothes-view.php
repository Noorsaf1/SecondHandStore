<?php

class ClothesView
{
    public function renderAllClothes(array $clothes): void
    {

// Include CSS here
echo "<style>
.all-sellers-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    max-width: 80%;
}
.table-container {
    width: 100%;
    border-collapse: collapse;
}
.table-container th, .table-container td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
}
.table-container th {
    background-color: #f2f2f2;
    color: black;
}
.buy-button {
    background-color: #C7CEE5;
    border: none;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.buy-button:hover {
    background-color: #C7CEE5;
}
</style>";

        echo "<div class='all-sellers-container'>";
        echo "<table class='table-container'>";
?>
        <tr>
            <th>Seller</th>
            <th>Garment</th>
            <th>Published</th>
            <th>Sold</th>
            <th>price</th>
            <th>Buy</th>
        </tr>
<?php
        foreach ($clothes as $clothing) {
            $firstName = $clothing["FirstName"];
            $lastName = $clothing["LastName"];
            $clothingName = $clothing["Name"];
            $published = $clothing["SubmissionDate"];
            $soldDate = $clothing["SoldDate"];
            $sold = $clothing["Sold"];
            $price = $clothing["Price"];
            $clothingId = $clothing["ID"];

            echo "<tr>";
            echo "<td>$firstName $lastName</td>";
            echo "<td>$clothingName</td>";
            echo "<td>$published</td>";
            if ($soldDate == false) {
                echo "<td><strong>For sale</strong></td>";
            } else {
                echo "<td>$soldDate</td>";
            }
            echo "<td>$price kr</td>";
            if ($sold == false) {
                echo "<td><form method='POST' action='./form-handlers/buy-clothes-form.php'>
            <input type='hidden' name='clothing_id' value='$clothingId'>
            <input class='buy-button' type='submit' value='Buy'>
        </form></td>";
            } else {
                echo "<td><strong>Sold</strong></td>";
            }

            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
}
