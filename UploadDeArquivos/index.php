<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Send File</title>
</head>
<body class='container bg-dark' style="color:black;font-weight:bolder;text-shadow:1px 2px 4px rgba(99,11,191,.7);">

    <form action="upload.php" method="POST" enctype="multipart/form-data" class="jumbotron bg-light row" style="margin:8px;padding:12px;border-radius:14px;">
        Selecione uma imagem:
        <input type="file" name="fileToUpload" class="form-control form-control-sm " style="padding:3px;margin:0px;text-align:center;">
        <br>
        <input type="submit" name="submit" value="Enviar Imagem" style="margin-top:13px;padding:13px;top:5px;float:left;color:black;font-weight:bolder;text-shadow:1px 2px 4px rgba(99,11,191,.7);" class="btn btn-outline-primary">
    </form>    
</body>
</html>