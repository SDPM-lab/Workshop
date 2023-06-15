<!DOCTYPE html>
<html>
<head>
    
</head>
<body>



   
    
    <h1><?= esc($heading) ?></h1>
    
    
    <table>
        <tr>
            <th>Time Used</th>
            <th>Step</th>
            <th>Description</th>
        </tr>
        
        <?php foreach (esc($todo_list) as $key => $value): ?>
          <tr>
                    <td>
                        <?php echo $key ?>
                    </td>
                    <?php foreach ($value as $a): ?>
                        <td>
                            <?php echo $a ?>
                        </td>
                    <?php endforeach ?>
                    </tr>
            <?php endforeach ?>
          
    </table>
</body>
</html>