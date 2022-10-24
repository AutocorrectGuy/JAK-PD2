<?php

namespace Project\Airport;

class Airport {
  protected array $planes;
  protected array $fligts;
  protected array $costumers;
  protected array $employees;

  public function __construct(
    array $planes,
    array $fligts,
    array $costumers,
    array $employees
  ) {
    $this->planes = $planes;
    $this->fligts = $fligts;
    $this->costumers = $costumers;
    $this->employees = $employees;
    
    print('Airport initialisation succesfful!');
  }
}
