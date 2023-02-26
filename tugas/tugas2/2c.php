<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
</head>
<style>
    .warna {
        background-color: salmon;
        border: 1px solid black;
        color: black;
        width: 20px;
        height: 20px;
        text-align: center;
    }
</style>

<body>
    <table cellpadding="10" cellspacing="0">
        <?php for ($i = 10; $i >= 1; $i--) : ?>
            <tr>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <td class="warna"> <?= "$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>