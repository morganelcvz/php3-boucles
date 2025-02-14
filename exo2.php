<?php 

$i = 1; 
while ($i<15) {
    if ($i == 14) {
        echo "
        <ol>
        14. février : <b>saint valentin</b>
        </ol>
        ";
    } else {
        echo 
        "<ol>
        $i. février
        </ol>
           ";
    }
    $i++;
}

?>

