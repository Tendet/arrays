<?php

//get post
$intrest=0;
$total=0;

if(isset($_POST["loan"]))
{
   // var_dump($_POST);
    extract($_POST);
    if($type== "simple")

    { $intrest = $loan * $period *$rate/100;
        //print $intrest;
    $total= $loan+$intrest;
    }else
    {$total= $loan*(1+ $rate/100)**$period;
    $intrest=$total-$loan;

    }


}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Simple Loans Calc</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="row">

<div class="col-sm-4 col-sm-offset-4">

<h3>Enter loan detail</h3>
<form action="loans.php" method="post">

    <div class="radio">
        <label><input type="radio" checked value="simple" name="type">Simple interest</label>
    </div>
    <div class="radio">
        <label><input type="radio" value="compound" name="type">compound interest</label>
    </div>







    <div class="form-group">
        <input type="number" name="loan" placeholder="Enter Loan Amount">
    </div>
    <div class="form-group">
        <input type="number" step="0.1" name="period" placeholder="Enter repayment period">

    </div>
    <div class="form-group">
        <input type="number" step="0.01" name="rate" placeholder="Enter interest rate">
    </div>
    <button class="btn btn-danger">calculate</button>
</div>
</div>
</form>
<h4 class="text-danger">
    <?php print "Interest is $intrest"; ?>
</h4>

<h4 class=" text-primary">
    <?php print "Total Is $total"; ?>
</h4>
</body>
</html>








