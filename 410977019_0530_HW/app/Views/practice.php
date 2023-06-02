<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $heading; ?></h1>
    <table>
        <thead>
            <tr>
                <th>Time Used</th>
                <th>Step</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todo_list as $week => $tasks) : ?>
                <?php foreach ($tasks as $taskKey => $taskValue) : ?>
                    <tr>
                        <?php if ($taskKey === 0) : ?>
                            <td rowspan="<?php echo count($tasks); ?>"><?php echo $week; ?></td>
                        <?php endif; ?>
                        <?php if ($taskKey === 0) : ?>
                            <td rowspan="<?php echo count($tasks); ?>"><?php echo $tasks[0]; ?></td>
                        <?php endif; ?>
                        <?php if ($taskKey === 0) : ?>
                            <td rowspan="<?php echo count($tasks); ?>"><?php echo $tasks[1]; ?></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
