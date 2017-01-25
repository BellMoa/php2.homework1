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
    <td style="border: 1px solid black"><label for="title">Название</label></td>
    <td style="border: 1px solid black"><input type="text" name="title" id="title"></td>
</tr>
    <tr>
        <td style="border: 1px solid black"><label for="textarea">Ваша статья</label></td>
        <td style="border: 1px solid black"><textarea name="text" id="textarea" cols="30" rows="10"></textarea></td>
    </tr>
    <tr>
        <td style="border: 1px solid black"><label for="date">Дата публикации</label></td>
        <td style="border: 1px solid black"><input type="date" name="date" id="date"></td>

    </tr>
    <tr>
        <td style="border: 1px solid black"><label for="time">Время публикации</label></td>
        <td style="border: 1px solid black"><input type="time" id="time" name="time"></td>

    </tr>
    <tr>
        <td colspan="2" style="border: 1px solid black;text-align: center"><input type="submit" value="Отправить"></td>
    </tr>
</table>
</form>
</body>
</html>