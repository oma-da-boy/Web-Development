<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="calculator.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <?php
            $a = 0;
            $funk =0;
            
            while($a == 0){
                echo '<div>';
                echo '<form method="POST"action="">';
                echo '<label for="func">start aplication?</label>';
                echo '<div class="row justify-content-center">';
                echo '<div class="col-3">';
                echo '<select name="start" class="form-select">';
                echo '<option value="">select</option>';
                echo '<option value="1">yes</option>';
                echo '<option value="2">no</option>';
                echo '</select>';
                echo '</div>';
                echo '<div class="col-auto">';
                echo '<button type="submit" class="btn btn-primary mb-3">Confirm</button>';
                echo '</div>';
                echo '</div>';
                echo '</form>';
                echo '</div>';

                if (isset($_POST["start"])) {
                    $a = $_POST["start"];
                } 
                else {
                    $a = 2;       
                }   
            }

            while($a == 1){
                echo '<form method="POST" action="">';
                echo '<div>';
                echo '<input type="number" name="num1" placeholder="enter a number" required>';
                echo '<input type="number" name="num2" placeholder="enter a number" required>';
                echo '</div>';
                
                echo '<div>';
                echo '<select name="func" id="funk" required>';
                echo '<option value="">please pick a function</option>';
                echo '<option value="1">ADD</option>';
                echo '<option value="2">SUBTRACT</option>';
                echo '<option value="3">MULTIPLY</option>';
                echo '<option value="4">DIVIDE</option>';
                echo '</select>';
                echo '</div>';

                echo '<input type="submit" value="Calculate">';
                echo '</form>';
                
                $a = 3;
            }

            if (isset($_POST["num1"])) {
                $num1 = $_POST["num1"];
            }    
            else {
                $num1 = 0;       
            }   
            
            if (isset($_POST["num2"])) {
                $num2 = $_POST["num2"];
            }  
            else {
                $num2 = 0;       
            }  

            if (isset($_POST["func"])) {
                $funk = $_POST["func"];
                
            }  
            else {
                $func = 0;       
            }  
    
            


            switch ($funk) {
                case '1':
                    echo $num1. "+" . $num2. "=". ($num1 + $num2). "<br>";
                    break;
                
                case '2':
                    echo $num1. "-" . $num2. "=". ($num1 - $num2). "<br>";
                    break;
                
                case '3':
                    echo $num1. "X" . $num2. "=". ($num1 * $num2). "<br>";
                    break;

                case '4':
                    echo $num1. "/" . $num2. "=". ($num1 / $num2). "<br>";
                    break;


                default:
                    echo "no function has been selected";
                    break;
            }
        ?>    
    </div>    
    <?php
        echo '<hr>';
        echo '<div class="container text-center">';
        echo '<div class="row justify-content-center">';
        for($i = 1; $i < 16; $i++){
            echo '<div class="col-5 wrapper">';
            for($j = 1; $j < 16\; $j++){ echo $i. "x" . $j. "=". ($i * $j). "<br>";}
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';    
    ?>
    
</body>
</html>