<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap opacity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark d-flex justify-content-around align-items-center">

<?php 


for ($x = 100; $x >= 0; $x = $x - 25) {
    echo
"<div class='opacity-$x bg-primary text-light rounded-3 col-lg-1 p-4 fs-5 text-center'>$x%</div>";
}

?>
    
</body>
</html>

