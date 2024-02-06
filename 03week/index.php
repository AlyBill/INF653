<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Guitar Shop Customers</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Customer List</h1></header>
    <main>
    <form method="post">
        <input type="text" name="customerID" placeholder="customerID">
        <input type="text" name="emailAddress" placeholder="emailAddress">
        <input type="text" name="firstName" placeholder="firstName">
        <input type="text" name="lastName" placeholder="lastName">
        <input type="text" name="line1" placeholder="line1">
        <input type="text" name="city" placeholder="city">
        <input type="text" name="state" placeholder="state">
        <input type="text" name="zipCode" placeholder="zipCode">
        <input type="text" name="phone" placeholder="phone">
        <button type="submit" name ="submit">Submit</button>
    
    </form>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>


<?php
require('database.php');


if(isset($_POST["submit"])){
    $customerID = $_POST["customerID"];
    $emailAddress = $_POST["emailAddress"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $line1 = $_POST["line1"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipCode = $_POST["zipCode"];
    $phone=$_POST["phone"];
}

$sql = "INSERT INTO my_quitar_shop2 (customerID, emailAddress, firstName, lastName, line1, city, state, zipCode, phone) VALUES (?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt,"sssssssss", $customerID, $emailAddress, $firstName, $lastName, $line1, $city, $state, $zipCode, $phone);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

   
            
                 echo $customerID['customerID'];
                echo $emailAddress['emailAddress']; 
                echo $firstName['firstName'];
                 echo $lastName['lastName']; 
                echo $line1['line1'];
                 echo $city['city']; 
                echo $state['state']; 
                 echo $zipCode['zipCode']; 
                 echo $phone['phone']; 
                
            
        
    


   

?>












