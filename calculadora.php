<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body>
        <?php
        function calcular($num1, $num2, $operacion) {
            switch ($operacion) {
                case 'suma':
                    return $num1 + $num2;
                case 'resta':
                    return $num1 - $num2;
                case 'multiplicacion':
                    return $num1 * $num2;
                case 'division':
                    if ($num2 != 0) {
                        return $num1 / $num2;
                    } else {
                        return "Error: División por cero";
                    }
                default:
                    return "Operación no válida";
            }
        }
        ?>
        <h1>Calculadora PHP</h1>
        <form method="post">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" required>
            <br>
            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" required>
            <br>
            <label for="operacion">Operación:</label>
            <select name="operacion" id="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
            <br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];

            $resultado = calcular($num1, $num2, $operacion);
            echo "<h2>Resultado: $resultado</h2>";
        }
        ?>
    </body>

</html>