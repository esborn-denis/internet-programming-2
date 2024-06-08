
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : null;
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 == 0) {
                $result = 'Error: Division by zero';
            } else {
                $result = $num1 / $num2;
            }
            break;
        case 'exponent':
            $result = pow($num1, $num2);
            break;
        case 'percentage':
            $result = ($num1 * $num2) / 100;
            break;
        case 'sqrt':
            if ($num1 < 0) {
                $result = 'Error: Square root of negative number';
            } else {
                $result = sqrt($num1);
            }
            break;
        case 'log':
            if ($num1 <= 0) {
                $result = 'Error: Logarithm of non-positive number';
            } else {
                $result = log($num1);
            }
            break;
        default:
            $result = 'Invalid Operation';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator Result</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <div class="container">
        <h1>Calculation Result</h1>
        <?php if ($result !== ''): ?>
            <p class="result">Result: <?php echo $result; ?></p>
        <?php else: ?>
            <p class="result">No result to display.</p>
        <?php endif; ?>
        <a class="back-link" href="calculator.html">Back to Calculator</a>
    </div>
</body>
</html>