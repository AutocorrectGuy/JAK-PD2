<?php

require_once('./Project/Utilities/Accessors.php');
require_once(dirname(__DIR__) . '/Person.php');

class Employee extends Person
{
  protected const WHITELISTED_ACCESSORS = [
    ...parent::WHITELISTED_ACCESSORS,
    'profession', 'flightsDone', 'scheduledFlights', 'salaryPayments'
  ];

  use Accessors;

  public function __construct(
    // parent
    string $firstName,
    string $lastName,
    string $email,
    int $phoneNo,
    // child
    protected string $profession,
    protected array $flightsDone = [],
    protected array $scheduledFlights = [],
    protected array $salaryPayments = []
    )
  {
    parent::__construct($firstName, $lastName, $email, $phoneNo);
  }
}