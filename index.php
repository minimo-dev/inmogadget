<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JCalculator</title>
</head>
<body>
<h1>Calculadora de Precio Final</h1>
<form action="/precio_final.php" method="get">
    <label for="client_price">El cliente quiere:</label>
    <input type="number" id="client_price" name="client_price" step="1000" required><br><br>
    <label for="percent_comission">Porcentaje de Comisión:</label>
    <input type="number" id="percent_comission" name="percent_comission" required>
    <p>Incluye IVA?</p>
    <input type="radio" name="includes_vat" id="vat_included" value="vat_included" required>
    <label for="vat_included">Si</label>
    <input type="radio" name="includes_vat" id="vat_excluded" value="vat_excluded" checked="checked" required>
    <label for="vat_excluded">No</label><br><br>
    <input type="submit" value="Calcular">
</form>
<br><br>
<h1>Calculadora de Precio Neto del Cliente</h1>
<form action="/precio_neto.php" method="get">
    <label for="final_price">El precio final es:</label>
    <input type="number" id="final_price" name="final_price" step="1000" required><br><br>
    <label for="percent_comission_neto">Porcentaje de Comisión:</label>
    <input type="number" id="percent_comission_neto" name="percent_comission_neto" required><br>
    <p>Incluye IVA?</p>
    <input type="radio" name="includes_vat_neto" id="vat_included_neto" value="vat_included_neto" required>
    <label for="vat_included_neto">Si</label>
    <input type="radio" name="includes_vat_neto" id="vat_excluded_neto" value="vat_excluded_neto" checked="checked" required>
    <label for="vat_excluded_neto">No</label><br><br>
    <input type="submit" value="Calcular">
</form>
</body>
</html>