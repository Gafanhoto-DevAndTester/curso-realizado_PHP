<?php

date_default_timezone_set('America/Sao_Paulo');

echo "Hoje é ".date("d/m/Y")."<br/>";
echo "Hoje é ".date("d.m.Y")."<br/>";
echo "Hoje é ".date("Y-m-d")."<br/>";
echo "Hoje é ".date("l")."<br/>";

echo "<hr/>";

echo "Agora é ".date("h:i:s");

echo "<hr/>";

echo "Data e Hora Completa: ".date("d/m/Y h:i:s");