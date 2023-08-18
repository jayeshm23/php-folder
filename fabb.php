<!DOCTYPE html>
<html>
<body>

    <?php
    $terms = 10; 
    $firstTerm = 0;
    $secondTerm = 1;
    
    echo "Fibonacci Series: ";
    
    for ($i = 1; $i <= $terms; $i++) 
    {
        echo $firstTerm . " ";
    
        $nextTerm = $firstTerm + $secondTerm;
        $firstTerm = $secondTerm;
        $secondTerm = $nextTerm;
    }
    ?>

</body>
</html>
