<?php

$nome = $_GET['nome']??'Não Informado';
$sobrenome = $_GET['sobrenome']??'Não Informado';

echo $nome."<br/>"; //para inserir o nome digite ao fim da url: ?nome=roberto
echo "{$sobrenome}<br/>";

/**Exemplo de como realizar o Input dos dados:
 * http://localhost/php_masterclass/UsoDasSuperglobais_GET.php?nome=Roberto&sobrenome=Santos
 * 
*/



