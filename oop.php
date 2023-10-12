<!-- <?php

// class MyClass {

// public function Num(){

// for($i = 0; $i <= 10; $i++){

//     echo $i." ";
// }

// }



// } 
 


// interface Fruits 
// {

//     public function showFruits();
    

    
// }

// class moreFruits implements Fruits {
//     public function showFruits(){
//         echo "Apple, Pear, Banana";
//     }
//     public function showmoreFruits(){
//         echo "Pineapple, Grapes, Orange";
//     }



// }


// abstract class Adv {

// abstract public function show();

// public function showUr()
// {
//     echo "Your advertisment...";
// }

// }

// class yourAdv extends Adv {

//     public function show(){

//         echo "salkdadr";
//     }


// }


class FileWorker
{
    public function UploadFileForm($directory, $keyInput)
    {
        if(!empty($_FILES))
        {
            if(is_dir($directory))
            {
                return $this -> Uploader($directory, $keyInput);
            } 
            else
            {
                mkdir($directory, '0777');
                return $this -> Uploader($directory, $keyInput);
            }
        }
    }


    public function Uploader()
    {
        $uploadfiles = $directory.'/'.$_FILES[$keyInput]['name'];
        if(move_uploaded_file($_FILES[$keyInput]['tmp_name']. $uploadfiles))
        {
            return true;
        }
        else
        {
            return true;
        }

    }

    public function Log()
    {
        
    }


}