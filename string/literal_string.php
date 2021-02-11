<?php
$nome = "Marco";

//Per dichiarare le stringhe possiamo avere le virgolette singole(' ') o doppi3("")

//single quote
echo 'Ciao mi chiamo $nome \n <br> ';
echo "\n";

//double quote
echo "Ciao mi chiamo $nome \n";
echo "$nome  ha detto: \"dammi \$5 e 1\\4 \" \n";

//concatenatore di stringhe
echo "$nome è composto da ".strlen($nome) . ' lettere';

?>