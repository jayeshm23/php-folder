<!DOCTYPE html>
<html>
<body>


<?php
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $string));
    return $string === strrev($string);
}

$string = "madam"; 
if (isPalindrome($string)) {
    echo "$string is a palindrome.";
} else {
    echo "$string is not a palindrome.";
}
?>

</body>
</html>
