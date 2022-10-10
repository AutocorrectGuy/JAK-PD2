<?php
require_once("./Uzdevums1 (un 4)/Cat.class.php");
require_once("./Uzdevums1 (un 4)/Human.class.php");
require_once("./Uzdevums2/TaskTwo.class.php");
require_once("./Uzdevums3/AbstractCatDescriber.class.php");
require_once("./Uzdevums5/DataObject.class.php");

/**
 * Programmas testēšana
 * Piezīme: neizmantoju `use` atslēgas vārdu, jo uzdevumam ir šāds nosacījums: 
 * "uzdevumu izpildē visām realizētajām klasēm pielietot **namespace**".
 * Tādēļ pirms katras importētās klases atsevišķi pierakstu viņas `namespace`
 */

/**
 * 1. uzdevums
 */
$myHuman = new Uzdevums1\Human(10);
print('Cilvēka vecums: "' . $myHuman->getAge() . '".<br />');
print('Cilvēka vecums kaķa gados: "' . Uzdevums1\Cat::toCatAge($myHuman->getAge()) . '".<br /><br />');

/**
 * 2. uzdevums
 */
$myTask = new Uzdevums2\TaskTwo('test');
print('<br />');

/**
 * 3., 4. uzdevums
 */

// Klases `Cat` pielietošana
$myCat = new Uzdevums1\Cat;
$myCat->nameCat();
$myCat->describeCat();
print('<br />');


/**
 * 5. uzdevums
 * Piemēra pēc parādu, ka tur varu glabāt objektus, kurus veidoju šīs
 * programmas testēšanā `myHuman` un `myCat`
 */

$dataObj = new Uzdevums5\DataObject;
$dataObj->setData([$myHuman, $myCat]);
var_dump($dataObj->getData());