<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "/styles/Lab3_styles.css">
    <script type = "text/javascript" src = "/scripts/scripts3.js"></script>
    <link rel = "stylesheet" href = "/styles/dark.css">
</head>
<body>
<form method="" action="">
    <table>
        <tr>
            <td> Введите отношение </td>
            <td> <textarea id = "arr1" value = "" rows = "3" cols = "25" placeholder="a1 b1 c1"></textarea> </td>
        </tr>
        <tr>
            <td> Введите элементы A множества </td>
            <td> <textarea id = "arr2" value = "" rows = "3" cols = "25" placeholder="a b c"></textarea> </td>
        </tr>
        <tr>
            <td> Введите элементы B множества </td>
            <td> <textarea id = "arr3" value = "" rows = "3" cols = "25" placeholder="1 2 3"></textarea> </td>
        </tr>
        <tr>
            <td colspan="2"> <input type="button" value = "Посчитать" onclick = "Answer();"> </td>
        </tr>
</form>
<td> <h2>Результат выполнения операций</h2>
    <div id = "NewMatrix"> </div> <br>
    <div id = "A->B"> </div> <br>
    <div id = "B->A"> </div> <br>
</td>
</body>
</html>