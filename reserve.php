<?
    var_dump($_POST)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="POST">

<input type="text" name="tr" placeholder="tr">
<input type="text" name="td" placeholder="td">

<input type="submit">
</form>


<table border="1">

<?
    if(!empty($_POST))
    {
        $tr = $_POST['tr'];
        $td = $_POST['td'];
        for($i = 0; $i < $tr; $i++)
        {
           ?>
            
             <tr><?=$i?></tr>
            
             <?
            for($j = 0; $j < $td; $j++)
            {
                ?>
                <td><?=$j?></td>
                <?
             }
        }
    }


    $users = [
        1 => [
            'name' => 'Valera',
            'surname' => 'Ivanov',
            'age' => 23,
        ],

        2 => [
            'name' => 'Yrui',
            'surname' => 'Ivanov',
            'age' => 48,
        ],

        3 => [
            'name' => 'Mariah',
            'surname' => 'Ivanova',
            'age' => 36,
        ],
    ];


   /
        ?>
        <table>
        <?php

        foreach($users as $key => $value)
        {
            ?><tr><?
            ?><td><?
            echo $key;
            ?></td><?

            foreach($value as $key => $info)
            {
                ?><td><?
                echo $info
                ?></td><?
            }
            
            
            ?></tr><?
        }

        ?>
        </table>
        <?
    }
    
?>




</table>
















    
</body>
</html>