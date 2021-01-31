<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body class='container-fluid bg-dark' style="color:rgba(1,111,412,.3);font-weight:bolder;text-shadow:1px 2px .4px rgba(79,38,299,.7);">
    
    <form action="sendmail.php" method="POST" class="jumbotron bg-light" style="margin:8px;padding:12px;border-radius:14px;">
        <label for="nome" class="col-md-2 col-form-label">Nome Completo</label>
        <input type="text" name="nome" placeholder="informe o seu nome..." class="form-control form-control-sm " style="padding:3px;margin:0px;text-align:center;">
        <br><br>
        <label for="pais" class="col-md-1 col-form-label">Pais</label>
        <select name="pais" >
            <option value="">Selecione um País</option>
            <option value="brasil">Brasil</option>
            <option value="usa">Estados Unidos</option>
        </select>
        <br><br>
        <label for="mensagem" class="col-sm-10">Mensagem</label>
        <textarea name="mensagem" cols="30" rows="10" placeholder ="Insira sua mensagem aqui..."></textarea>
        <br><br>
        <input type="submit" value="Enviar" style="padding:13px;position:absolute;top:545px;right:70px;float:right;color:rgba(1,111,412,.3);font-weight:bolder;text-shadow:1px 2px .4px rgba(79,38,299,.7);" class="btn btn-light block">
    </form>
</body>
</html>