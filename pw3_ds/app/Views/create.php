<?php

helper('form');

echo form_open('calculos/recebe_dados');

echo form_input('a', 'Digite o valor de A');
echo form_input('b', 'Digite o valor de B');
echo form_input('c', 'Digite o valor de C');

echo form_submit('mysubmit', 'Calcular');

echo form_close();


?>

