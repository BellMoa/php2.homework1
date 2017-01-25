<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/add.php" method="post">
<table style="border: 1px solid black;border-collapse: collapse;width: 400px">
<tr>
    <td style="border: 1px solid black">Название</td>
    <td style="border: 1px solid black"><input type="text" name="title"></td>
</tr>
    <tr>
        <td style="border: 1px solid black">Текст вашей статьи</td>
        <td style="border: 1px solid black"><textarea name="text" id="" cols="30" rows="10"></textarea></td>
    </tr>
    <tr>
        <td style="border: 1px solid black">Дата публикации</td>
        <td style="border: 1px solid black"><input type="date" name="date"></td>

    </tr>
    <tr>
        <td style="border: 1px solid black">Время публикации</td>
        <td style="border: 1px solid black"><input type="time"></td>

    </tr>
    <tr>
        <td colspan="2" style="border: 1px solid black;text-align: center"><input type="submit" value="Отправить"></td>
    </tr>
</table>
</form>
</body>
</html>