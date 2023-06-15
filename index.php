<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secesad Clothes Shop</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: Montserrat, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 100vh;
      background-color: #fff;
    }

    /* Rest of your CSS code */

    /* Content Container */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    /* Image */
    .store-image {
      display: block;
      margin: 20px auto;
      max-width: 100%;
      height: auto;
    }

    /* Footer */
    .footer {
      background-color: #f9f9f9;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php include "./body/header.php"; ?>
  <?php include "./body/nav.php"; ?>

  <main class="container">
    <h2>Welcome to the Second Hand Store</h2>
    <img class="store-image" src="https://2.bp.blogspot.com/-XJ_c0zWDXFs/WcuCZTlYgZI/AAAAAAAAIJ4/ne6R9_dDNE4LIE6jHZ71U8mR9q8DU14_QCLcBGAs/s1600/sec2a.jpg" alt="Secesad Store Image">
  </main>

  <?php include "./body/footer.php"; ?>
</body>

</html>
