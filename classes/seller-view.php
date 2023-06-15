<?php




class SellerView
{
    public function renderAllSellers(array $sellers): void
    {
// Include CSS here
echo "<style>
.all-sellers-container {
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
.singleSellerLink {
    color: #007BFF;
    text-decoration: none;
}
.singleSellerLink:hover {
    color: #0056b3;
}
</style>";




        echo "<div class='all-sellers-container'>";
        echo "<table class='table-container'>";
?>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>For sale</th>
            <th>Sold</th>
            <th>Total amount</th>
            <th>Total Sold</th>
            <th>All Garments</th>
        </tr>
        <?php
        foreach ($sellers as $seller) {
            $firstName = $seller["FirstName"];
            $lastName = $seller["LastName"];
            $sold = $seller["SoldCount"] ?? 0;
            $unsold = $seller["UnsoldCount"] ?? 0;
            $totalSoldAmount = $seller["TotalSoldAmount"];
            $totalClothes = $seller["TotalClothesCount"];

            $id = $seller["ID"];
            echo "<tr>";
            echo "<td>$firstName</td>";
            echo "<td>$lastName</td>";
            echo "<td>$unsold st</td>";
            echo "<td>$sold st</td>";
            echo "<td>$totalClothes st</td>";
            echo "<td>$totalSoldAmount kr</td>";
            if ($totalClothes == null) {
                echo "<td>Tomt</td>";
            } else {
                echo "<td><a class='singleSellerLink' href='seller.php?id=$id'>Show</a></td>";
            }

            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }

    public function renderSingleSeller(array $seller)
    {


        // Include CSS here
        echo "<style>
                .all-sellers-container {
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
                    background-color: #4CAF50;
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
                    background-color: #45a049;
                }
              </style>";
              
        echo "<div class='all-sellers-container'>";
        echo "<table class='table-container'>";
        ?>
        <tr>
            <th>Garment</th>
            <th>Published</th>
            <th>Sold</th>
            <th>price</th>
            <th>buy</th>
        </tr>
<?php
        foreach ($seller as $seller) {
            $clothing = $seller["Name"];
            $published = $seller["SubmissionDate"];
            $soldDate = $seller["SoldDate"];
            $sold = $seller["Sold"];
            $price = $seller["Price"];
            $clothingId = $seller["ID"];

            echo "<tr>";
            echo "<td>$clothing</td>";
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
                <input class='buy-button' type='submit' value='Köp'>
            </form></td>";
            } else {
                echo "<td><strong>sold</strong></td>";
            }

            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
}
