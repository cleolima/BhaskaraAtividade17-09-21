<?php

helper('form');
echo "<pre>";
echo form_open('calculos/recebe_dados');
echo form_label('Id =>');
echo form_input('id', $tabela['id']);
echo "<br>";
echo form_label('Valor de A =>');
echo form_input('a', $tabela['a']);
echo "<br>";
echo form_label('Valor de B =>');
echo form_input('b', $tabela['b']);
echo "<br>";
echo form_label('Valor de C =>');
echo form_input('c', $tabela['c']);
echo "<br>";

echo form_submit('mysubmit', 'Novo Calculo');

echo form_close();


?>


