<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="post">
        <input type="number" name="num1" id="">
        <select name="op" id="">
            <option value="Addition">Addition</option>
            <option value="Substraction">Substraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>
        <input type="number" name="num2" id="">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
