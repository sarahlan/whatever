<?php
    include 'header.php';
?>


<?php
$x = 1;
    
    if ($x == 1)
    {
        echo "Daniel is very handsome!";

    } 
    elseif ($x == 2) {
        echo "Daniel is kinda handsome";
    }
    elseif ($x == 2) {
        echo "Daniel is kinda handsome";
    }
    elseif ($x == 2) {
        echo "Daniel is kinda handsome";
    }
    else {    
        echo "Daniel is very ugly!";
    }

switch($x){
    case 1:
        echo "The answer is 1";
    break;
    case 2:
        echo "The answer is number";
    break;
    case 3:
        echo "The answer is 1";
    break;
    case 4:
        echo "The answer is number";
    break;
    default:
        echo "There is no answer";
}
?>


</body>
</html>