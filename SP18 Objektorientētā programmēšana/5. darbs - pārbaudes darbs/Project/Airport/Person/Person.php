<?php

class Person
{
  protected const WHITELISTED_ACCESSORS = [
    'firstName', 'lastName', 'email', 'phoneNo'
  ];

  protected function __construct(
    protected string $firstName,
    protected string $lastName,
    protected string $email,
    protected int $phoneNo
    )
  {
  }
}