<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?= esc($title) ?>
    </title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>

<body>
    <h1>
        <?= esc($heading) ?>
    </h1>
    <table>
        <thead>
            <tr>
                <th>Time Used</th>
                <th>Step</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todo_list as $key => $value): ?>
                <tr>
                    <td>
                        <?php echo $key ?>
                    </td>
                    <?php foreach ($value as $td): ?>
                        <td>
                            <?php echo $td ?>
                        </td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>