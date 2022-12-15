<?php
$columnNames = [];
foreach ($salesman[0] as $name => $value) {
  $label = str_replace('_', ' ', $name);
  array_push($columnNames, [
    'name' => $name,
    'label' => ucfirst($label),
    'placeholder' => 'Input ' . $label . ' here' 
  ]);
}
?>