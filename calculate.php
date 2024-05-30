<?php 
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];
    $result = '';

    switch($op){
        case "add":
            $result = $n1 + $n2;
            break;
        case "sub":
            $result = $n1 - $n2;
            break;
        case "multiply":
            $result = $n1 * $n2;
            break;
        case "divide":
            if ($n2 != 0){
                $result = $n1 / $n2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        default:
            $result = "Invalid operation";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
    <style>
        body {
            background-color: rgb(164, 255, 90);
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: green;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Result: <?php echo $result; ?></h1>
        <a href="index.html">Back to Calculator</a>
    </div>
</body>
</html>
