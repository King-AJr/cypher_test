<?php
echo "I am the world's solution<br>";
$name = "King.AJ";
$a = 4;
$b = 3;
$sum = 4 + 3;
$account_balance = 150000;
$amount = 2400;
if ($amount > $account_balance ) {
    echo "insufficient funds<br>";    
}
else {
      $account_balance = $account_balance - $amount;
        echo "withdrawal successful<br>";
        echo "current account balance is $account_balance";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello world!</h1>
    <h1> My name is <?php echo $name?></h1>
    <h1> Sum of 4 and 3 is <?php echo $sum?></h1>
     <?php echo "<h3> this is me $name</h3>" ?>       
</body>
</html>