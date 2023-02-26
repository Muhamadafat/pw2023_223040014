<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
</head>
<style>
    .table {
        border: 1px solid black;
    }

    .warna {
        background-color: black;
        width: 50px;
        height: 50px;
        border: 3px solid black;
    }

    .warna2 {
        background-color: white;
        width: 50px;
        height: 50px;
    }
</style>

<body>
    <table class="table" cellpading="10" cellspascing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <?php if (($i + $j) % 2 == 0) : ?>
                        <td class="warna">
                        <?php else : ?>
                        <td class="warna2">
                        <?php endif; ?>
                        </td>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>