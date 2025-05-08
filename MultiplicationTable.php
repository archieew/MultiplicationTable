<!DOCTYPE html>
<html>
<head>
    <!--Name: Custodio, Archie D.
    Section: WD - 201-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <table border="1">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
