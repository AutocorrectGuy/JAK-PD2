<?php
/** 
 * 
 * Autora piezīmes:
 * Nav norādīts, ka klašu konstruktoros jāinicializē jebkādas
 * vērtības (uzdevuma izpildes laikā tiek pieņemts, ka konstruktorus
 * nedrīkst neizmantot, jo nekur nav pieminēts, ka manīgos nepieciešams
 * inicializēt konstruktoros). Tādēļ klašu mainīgo vērtības šajā
 * uzdevumā iespējams inicializēt tikai ar "setter" metodēm.
 * 
 * Par 4. un 5. uzdevumu: nav zināms, vai tiks glabāts stipendijas veids,
 * vai pati stipendija, tādēļ nav zināms, vai to glabāt kā integer, float,
 * vai string datu tipu. Tādēļ izvēlēts variants, kurš der visās
 * situācijās: string. Tāda pati situācija ar pārējiem klašu mainīgajiem.
 * 
 * 5. uzdevumā norādīts, ka tikai jāievada divi "protected" tipa laiki,
 * taču nekas nav minēts par setter un getter funkcijām, taču tās pievienotas
 * loģikas dēļ: savādāk, šīs vērtības šobrīd bezjēdzīgas - tās nevar tik
 * vienkārši mainīt.
 * 
 * 5. uzdevumā norādīts, ka braukšnas kategorija var būt tikai viens 
 * no trim variantiem, tādēļ pievienota papildus konstante ārpus klases.
 *
 * Nosacījumi: 
 * 3. uzdevums: izveidojiet šīs klases objektu: vārds: "John", vecums: 25, alga: 
 *    1000. Izveidojiet otru šīs klases objektu: vārds: "Bob", vecums: 
 *    26, alga: 2000. Atrodiet John un Bob algu summu. 
 */
require_once("./Worker.php");
require_once("./Student.php");
require_once("./Driver.php");

// 3.(1) Create two objects with given paramets

// object "John" initialization
$user1 = new Worker();
$user1->setName("John");
$user1->setAge(25);
$user1->setSalary(1000);

// object "Bob" initialization
$user2 = new Worker();
$user2->setName("Bob");
$user2->setAge(26);
$user2->setSalary(2000);

// 3.(2) stores $user1 and $user2 retrieved sum of theri salaries
$salarySum = $user1->getSalary() + $user2->getSalary();