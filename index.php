<!-- 
// var_dump($_FILES);

// $udir = 'files/';
// $uploadfile = $udir.$_FILES['ufile']['name'];
// echo $uploadfile;

// if (move_uploaded_file($_FILES['ufile']['tmp_name'], $uploadfile)){

//     echo "File upload was successfull";
// } -->



    <form method="post" enctype="multipart/form-data">
        <input type="file" name="ufile">
        <input type="submit" value="send">
    </form>



    <pre>


<?php
    
    include "oop.php";
    
    $fw = new FileWorker();
    

    if(!empty($_FILES))
    {
        $status = $fw -> UploadFileForm('files', 'ufile');
        var_dump($status);

        if($status)
        {
            echo "ok";
        }
        else
        {
            echo 'ne ok';
        }
    }

    
    
?>
</pre>