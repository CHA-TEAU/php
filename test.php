<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" id="textForm">
        <input type="text" name="addText" id="addText">
    </form>
    <button id="add">Update</button>



    <script>
        let btn = document.getElementById("add");

        btn.addEventListener("click", ()=>{

            let form = document.getElementById("textForm");
            let formData = new FormData(form);

            fetch("/Update.php", {
                method: 'POST',
                body: formData
            })

            .then(response => response.json())
            .then(data => {
                console.log(data);
            })

            
        })
    </script>
    
</body>
</html>