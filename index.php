<?php
//user will enter firstName and lastName in the URL
$firstName = filter_input(INPUT_GET, 'firstname');
$lastName = filter_input(INPUT_GET, 'lastname');
$age = filter_input(INPUT_GET, 'age');

echo "Hello My Name Is  $firstName $lastName .";
echo "<br/>";

if ($age > 18 || $age == 18){
    echo "I am $age years old.";
    echo "<br/>";
    echo "I am old enough to vote in the United States.";

}
else if ($age < 18){
    echo "I am $age years old.";
    echo "<br/>";
    echo "I am not old enought to vote in the United States.";
}

$days = $age * 365;  //days is calculated by multiplying the age of the user by 365 to find out how many days old the person is

echo "The number of days calculated from age is $days.";
echo "<br/>";

$theDate = date( 'Y-m-d H:m:s' ); //date attribute is calculated by Year, Month, Day, Hour,Minute, Second

echo "$theDate";
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    
</body>
</html>

