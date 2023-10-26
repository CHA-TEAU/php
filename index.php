<!-- 
// var_dump($_FILES);

// $udir = 'files/';
// $uploadfile = $udir.$_FILES['ufile']['name'];
// echo $uploadfile;

// if (move_uploaded_file($_FILES['ufile']['tmp_name'], $uploadfile)){

//     echo "File upload was successfull";
// } -->



<!--     <form method="post" enctype="multipart/form-data">
        <input type="file" name="ufile">
        <input type="submit" value="send">
    </form>



    <pre>


<?php
    
    // include "oop.php";
    
    // $fw = new FileWorker();
    

    // if(!empty($_FILES))
    // {
    //     $status = $fw -> UploadFileForm('files', 'ufile');
    //     var_dump($status);

    //     if($status)
    //     {
    //         echo "ok";
    //     }
    //     else
    //     {
    //         echo 'ne ok';
    //     }
    // }

    
    
?>
</pre> -->



<?php

// $db_address = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_testdb = "test DB";




// $db = @new mysqli($db_address, $db_user, $db_pass, $db_testdb);

// if(isset($_POST['submit'])){
    
//     if($db -> connection_errno)
//     {
//         echo "Error occured!" . $db -> connection_errno;
//     }else
//     {
//         $anim = $_POST['new_animal'];
//         $query = $db -> query("INSERT INTO `myFzoo`(`animal`) VALUES ('$anim')");
//     }
// }

// if(isset($_POST['del'])){

  
//         $anim = $_POST['new_animal'];
//         $query = $db -> query("DELETE FROM `myFzoo` WHERE `animal` = ('$anim')");
    
// }



// if($db -> connection_errno)
// {
//     echo "Error occured!" . $db -> connection_errno;
// }else
// {
//     $query = $db -> query("SELECT * FROM `myFzoo`");
//     // $result = $query -> fetch_assoc();
//     // var_dump($result);

//     echo "<table border = 1>";
//     while($row = $query -> fetch_assoc()){

//         echo "<tr>";
//         echo "<td>";
//         echo $row['id'];
//         echo "</td>";

//         echo "<td>";
//         echo $row['animal'];
//         echo "</td>";
//         echo "</tr>";
//     }

//     echo "</table>";
// }
?>

<?php

include 'DBCrud.php';
$dbcrud = new DBCrud('zoo', 'localhost', 'root', '', 'testdb');


$arr = [
    "Animal" => "Frog"
];


$dbcrud->Insert($arr);

$dbcrud->Delete('animal', "Собака");

$dt = $dbcrud->Select(["id", "animal"]);
echo '<pre>';
var_dump($dt);
echo '</pre>';
$db = @new mysqli($db_address,$db_user, $db_pass,$db_testdb);
if(isset($_POST['submit']))
{
    if($db->connection_errno)
    {
        echo "error: ".$db->connection_errno;
    }else
    {
        $anim = $_POST['new_animal'];
        $query = $db->query("INSERT INTO `zoo`(`animal`) VALUES ('$anim')");
    }
}

if(isset($_POST['delete']))
{
    if($db->connection_errno)
    {
        echo "error: ".$db->connection_errno;
    }else
    {
        $anim = $_POST['new_animal'];
        $query = $db->query("DELETE FROM `zoo` WHERE `animal` = '$anim';");
    }
}



if($db->connection_errno)
{
    echo "error: ".$db->connection_errno;
}else{
    $query = $db->query("SELECT * FROM `zoo`");
    //$res = $query->fetch_assoc();
    echo '<table border="1">';
    while($row = $query->fetch_assoc())
    {
        echo '<tr>';

        echo '<td>';
        echo $row['id'];
        echo '</td>';


        echo '<td>';
        echo $row['animal'];
        echo '</td>';

        echo '</tr>';
        
    }
    echo '</table>';
    //var_dump($res);
}
?>


<form method="post">

    <input type="text" name="new_animal">
    <input type="submit" value="Add" name="submit">
    <input type="submit" value="Delete" name="del">

</form>
