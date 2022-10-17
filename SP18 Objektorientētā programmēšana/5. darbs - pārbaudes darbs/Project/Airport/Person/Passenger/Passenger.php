<?php

require_once('./Project/Utilities/Accessors.php');
require_once(dirname(__DIR__) . '/Person.php');

class Passenger extends Person
{
  protected const WHITELISTED_ACCESSORS = [
    ...parent::WHITELISTED_ACCESSORS,
    'flightsDone', 'scheduledFlights', 'ticketPayments', 'vipStatus'
  ];

  use Accessors;

  public function __construct(
    // parent
    string $firstName,
    string $lastName,
    string $email,
    int $phoneNo,
    // child
    protected bool $vipStatus = false,
    protected array $flightsDone = [],
    protected array $scheduledFlights = [],
    protected array $ticketPayments = [],
    )
  {
    parent::__construct($firstName, $lastName, $email, $phoneNo);
  }
}