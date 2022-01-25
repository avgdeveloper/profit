<?php

    require_once('./server.php');

    // Initial data from API to DB
    getAndStoreData();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
  <title>Orders Analytics</title>
</head>


<body>
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-5 m-auto">

          <p class="h2 text-center mb-4">Orders Analytics</p>

          <p>Net Sales : <?php echo getNetSales(); ?></p>
          <p>Production Cost : <?php echo getProductionCost(); ?></p>
          <p>Gross Benefit : <?php echo getGrossBenefit(); ?></p>
          <p>Gross Margin : <?php echo getGrossMargin(); ?></p>

      </div>
    </div>
  </div>

</body>
</html>