<?php

// TODO: create these from description / row names only.
// Now input fields and table headers are not rendering
// if there are no entries in table!
 
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