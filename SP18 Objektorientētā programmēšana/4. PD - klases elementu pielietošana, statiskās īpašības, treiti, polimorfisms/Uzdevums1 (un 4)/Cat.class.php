<?php

/**
 * 1. uzdevums
 * Veidot jaunu klasi Cat! Klases ietvaros realizēt funkciju toCatAge! Šī 
 * funkcija saņems vienu parametru no citas klases (cilvēka gadus) un 
 * aprēķinās kaķa gadus attiecībā 1:4 (1 cilvēka gads = 4 kaķa gadi). 
 * Funkcija atgriezīs izrēķināto gadu skaitu. Izvadīt gadu skaitu uz ekrāna! 
 * 
 * 4. uzdevums (abstraktās funkcijas)
 * Funkcijā describeCat veidot jaunu masīvu! Masīvā saglabāt 5 vārdus, 
 * kas raksturo kaķus! Ar foreach cikla palīdzību izvadīt visus
 * masīva elementus uz ekrāna! 
 * - Ja nebūtu jāpielieto foreach, tad būtu pielietojis `join()` funckciju
 */

namespace Uzdevums1;

use Uzdevums3;

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

class Cat extends Uzdevums3\AbstractCatDescriber
{
  /**
   * @var mixed Name of the cat.
   */
  protected string $catName;

  public function setCatName($catName): void
  {
    $this->catName = $catName;
  }
  public function getCatName(): string
  {
    return $this->catName;
  }

  /**
   * Returns converted human age to cat age in ratio 1 : 4.
   *
   * @param  int|float $humanAge
   * @return int|float
   */
  public static function toCatAge(int|float $humanAge): int|float
  {
    return $humanAge * 4;
  }

  /**
   * Returns random Cat name from global const `CAT_NAMES`
   *
   * @return string
   */
  public static function returnRandomCatName(): string
  {
    return CAT_NAMES[rand(0, sizeof(CAT_NAMES) - 1)];
  }

  /**
   * Prints out on screen predefined description of `Cat` class entity.
   * Used from abstract class. 
   * 
   * @return void
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

  /**
   * Sets `$catName` to random cat name with `setCatName()` and 
   * `returnRandomCatName()` functions and prints tne new 
   * `Cat` entity `$catName` on the screen.
   *
   * @return void
   */
  public function nameCat()
  {
    $this->setCatName(self::returnRandomCatName());
    print('Kaķa vārds ir "' . $this->getCatName() . '". <br />');
  }
}