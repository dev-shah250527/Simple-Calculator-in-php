<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Calculator</h1>
        <form action="index.php" method="get">
            <h4 class="mt-5">First Number</h4>
            <input type="number" class="form-control" name="num1" required>
            <h4 class="mt-5">Second Number</h4>
            <input type="number" class="form-control" name="num2" required>
            <div class="container mx-auto text-center">
                <button class="btn btn-primary mt-5 mx-5" value="add" name="sub">Addition</button>
                <button class="btn btn-primary mt-5 mx-5" value="min" name="sub">Substraction</button>
                <button class="btn btn-primary mt-5 mx-5" value="mul" name="sub">Multiplication</button>
                <button class="btn btn-primary mt-5 mx-5" value="div" name="sub">Division</button>
            </div>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == 'GET' && isset($_GET['sub'])){
            $num1=$_GET['num1'];
            $num2=$_GET['num2'];
            $sub=$_GET['sub'];
            $res=0;
            switch ($sub){
                case 'add':
                    $res = $num1 + $num2;
                    break;
                case 'min':
                    $res = $num1 - $num2;
                    break;
                case 'mul':
                    $res = $num1 * $num2;
                    break;
                case 'div':
                    $res = $num1 / $num2;
                    break;
            }
            echo "<div class='alert alert-success mt-3'>Result: $res</div>";
        }
        ?>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>