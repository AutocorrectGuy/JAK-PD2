<?php

/**
 * 3. uzdevums
 * Veidot jaunu abstrakto klasi! Nosaukums pēc brīvas izvēles, ņemot vērā 
 * failu un klašu nosaukumu noteikumus. Klasē Cat realizēt 2 abstraktās 
 * funckijas (no abstraktās klases) describeCat un nameCat! 
 */

abstract class AbstractCatDescriber
{
  abstract public function describeCat();
  abstract public function nameCat();
}