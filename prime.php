
<html >
    <head>
        <title>prime number</title>
    </head>
    <body>
        <?php
        $n=13;
        $count=0;
        for ($i=1;$i<=$n;$i++)
        {
            if(($n%$i)==0)
            {
                $count++;
            }
        }
        if($count<3)
        {

            echo "$n is a prime number.";
        }
        else
        {
            echo "$n is not a prime number.";
        }
        
          ?>    
    </body>
    </html>