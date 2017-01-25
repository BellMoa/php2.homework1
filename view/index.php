<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table style="border: 1px solid black;border-collapse: collapse;width: 400px">
    <?php foreach ($news as $news1): ?>
    <tr>
        <td style="border: 1px solid black"><?php echo $news1['title'] ?></td>
        <td style="border: 1px solid black"><?php echo $news1['date'].' '.$news1['time']?></td>
    </tr>
    <tr>
        <td colspan="2" style="border: 1px solid black"><?php echo $news1['text']?></td>
    </tr>
    <?php endforeach;?>
</table>



</body>
</html>