<!-- <?php
        for ($i = 1; $i < 150; $i += 2) {
            echo $i;
            echo "<br>";
        }
        for ($i = 0; $i < 500; $i++) {
            echo "Je dois faire des sauvegardes régulières de mes fichiers<br>";
        }
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($i = 1; $i < 150; $i += 2) { ?>
        <div><?= $i . "<br>" ?></div>
    <?php } ?>
    <?php for ($i = 0; $i < 500; $i++) { ?>
        <div><?= $i+1 . " - Je dois faire des sauvegardes régulières de mes fichiers<br>" ?></div>
    <?php } ?>
    <table frame="void" rules="rows" style="border: 1px solid black;">
        <thead>
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <th style="width:30px;height:30px;">
                    <?= $i ?>
                <th>
                <?php } ?>
        </thead>
        <tbody>
            <?php for ($i = 1; $i < 10; $i++) { ?>
                <tr>
                    <th style="width:30px;height:30px;">
                        <?= $i ?>
                    <th>
                    <?php for ($j = 1; $j < 10; $j++) { ?>
                        <td style="border: 1px solid #000;margin:0px;text-align:center;width:30px;height:30px;">
                            <?= $i * $j ?>
                        <td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>