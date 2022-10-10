<?php
require_once("./Uzdevums1/Cat.class.php");
require_once("./Uzdevums1/Human.class.php");
require_once("./Uzdevums2/TaskTwo.class.php");
require_once("./Uzdevums3/AbstractCatDescriber.class.php");
require_once("./Uzdevums5/DataObject.class.php");

/**
 * Programmas testēšana
 */

/**
 * 1. uzdevums
 */
$myHuman = new Human(10);
print('Cilvēka vecums: "' . $myHuman->getAge() . '".<br />');
print('Cilvēka vecums kaķa gados: "' . Cat::toCatAge($myHuman->getAge()) . '".<br /><br />');

/**
 * 2. uzdevums
 */
$myTask = new TaskTwo('test');
print('<br />');

/**
 * 3., 4. uzdevums
 */

// Klases `Cat` pielietošana
$myCat = new Cat;
$myCat->nameCat();
$myCat->describeCat();
print('<br />');


/**
 * 5. uzdevums
 * Piemēra pēc parādu, ka tur varu glabāt objektus, kurus veidoju šīs
 * programmas testēšanā `myHuman` un `myCat`
 */

$dataObj = new DataObject;
$dataObj->setData([$myHuman, $myCat]);
var_dump($dataObj->getData());