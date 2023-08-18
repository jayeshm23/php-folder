<!DOCTYPE html>
<html>
<body>

<?php
function isArmstrong($number) {
    $originalNumber = $number;
    $sum = 0;
    $numDigits = strlen($number);

    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    return $sum === $originalNumber;
}

$number = 153; 
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>


</body>
</html>
