<?php
$table = new \CodeIgniter\View\Table();

echo anchor(base_url('calculos/formInsert'), 'Novo Valores ');


$table->setHeading('Id','A', 'B', 'C', 'Delta', 'x1', 'x2');

$template = [
        'table_open' => '<table border="2" cellpadding="4" cellspacing="1" class="mytable">'
];

$table->setTemplate($template);
echo $table->generate($tabela);


?>