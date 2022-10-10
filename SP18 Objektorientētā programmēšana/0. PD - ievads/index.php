<?php

class Cars
{
  protected $color, $price, $type;

  public function __construct($color, $price, $type)
  {
    $this->color = $color;
    $this->price = $price;
    $this->type = $type;
  }

  /**
   * Prints out in console selected cars color (in HEX)
   */
  public function showColor()
  {
    print($this->color);
  }
}

/*
 BMW M3 Competition Sedan
 source: https://configure.bmw.lv/lv_LV/configure/G80/31AY/FVBTQ,P0X16,S01CB,S01DF,S01MB,S01T7,S0230,S0248,S02PA,S02T4,S02VB,S02VC,S02VF,S0302,S0316,S0322,S03KA,S03M6,S03MF,S0428,S0430,S0431,S0453,S0459,S0488,S0493,S0494,S04GQ,S04ML,S04NE,S04U0,S0534,S0544,S0548,S05AC,S05AL,S05AV,S05AZ,S05DA,S05DC,S05DN,S0654,S0688,S06AE,S06AF,S06AK,S06C3,S06U2,S06VB,S06WC,S0712,S0760,S0775,S07M9,S07ME,S0850,S0853,S0880,S08EK,S08KA,S08R9,S08TF,S08TG,S08WM,S0993?expanded=true
 */
$bmw = new Cars("#d6d6d6", "93700 €", "sedan");
$bmw->showColor();