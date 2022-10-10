<?php

/**
 * 1. uzdevums
 * Veidot jaunu klasi Cat! Klases ietvaros realizēt funkciju toCatAge! Šī 
 * funkcija saņems vienu parametru no citas klases (cilvēka gadus) un 
 * aprēķinās kaķa gadus attiecībā 1:4 (1 cilvēka gads = 4 kaķa gadi). 
 * Funkcija atgriezīs izrēķināto gadu skaitu. Izvadīt gadu skaitu uz ekrāna! 
 */

// '../' nedarbojās, tādēļ izmantoju šādu sintaksi:
require_once(dirname(__DIR__) . '/Uzdevums3/AbstractCatDescriber.class.php');

/**
 * There is no need to save all possible random cat names for `HomeCat` class,
 * so they are saved in memory globally
 */
const CAT_NAMES = [
  'Bubbles',
  'Cheddar',
  'Fishbait',
  'Jiggles',
  'Katy Purry',
  'Kit-Kat',
  'Meowise',
  'Puddy Tat'
];

class Cat extends AbstractCatDescriber
{

  protected string $catName;

  /* Aprēķinās kaķa gadus attiecībā 1:4
   * - Neatkarīga no šī kaķa vecuma (jo kaķim netiek definēts viņa vecums),
   * tādēļ šī funkcija ir statiska. Rezultātā nav jāveido jauns kaķis tikai
   * konvertētu vecumu
   */
  public static function toCatAge(int|float $humanAge)
  {
    return $humanAge * 4;
  }

  // Funkcija atgriež `kaķa vārdu` (no iespējamajiem kaķu vārdiem `CAT_NAMES`) 
  public static function returnRandomCatName(): string
  {
    return CAT_NAMES[rand(0, sizeof(CAT_NAMES) - 1)];
  }

  /**
   * 4. uzdevums (abstraktās funkcijas)
   * Funkcijā describeCat veidot jaunu masīvu! Masīvā saglabāt 5 vārdus, 
   * kas raksturo kaķus! Ar foreach cikla palīdzību izvadīt visus
   * masīva elementus uz ekrāna! 
   * 
   * Ja nebūtu jāpielieto foreach, tad būtu pielietojis `join()` funckciju
   */
  public function describeCat()
  {
    $catProperties = ['garspalvains', 'jauks', 'ātrs', 'elegants', 'ruds'];
    print('Šī kaķa īpašības: ');
    foreach ($catProperties as $key => $property) {
      print($property . strval($key < sizeof($catProperties) - 1 ? ', ' : '.'));
    }
    print('<br />');
  }

  // Dod kaķim vārdu: saglabā mainīgajā `catName`
  public function nameCat()
  {
    $this->setCatName(self::returnRandomCatName());
    print('Kaķa vārds ir "' . $this->getCatName() . '". <br />');
  }

  // geter un setter f-jas priekš $catName
  public function setCatName($catName): void
  {
    $this->catName = $catName;
  }
  public function getCatName(): string
  {
    return $this->catName;
  }
}