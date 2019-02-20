<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="App/Forms/receipt_form.php" method="get">
    <label for="washingMachinePrice">Wasmachine prijs: </label><br>
    <input id="washingMachinePrice" type="text" name="washingMachinePrice">
    <br><br>

    <label for="dryerPrice">Dryer prijs: </label><br>
    <input id="dryerPrice" type="text" name="dryerPrice">
    <br><br>

    <label for="fridgePrice">Koelkast prijs: </label><br>
    <input id="fridgePrice" type="text" name="fridgePrice">
    <br><br/>

    <input type="submit" value="Kassabon maken">
</form>
</body>
</html>
