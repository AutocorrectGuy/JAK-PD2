<?php

trait Accessors
{
  protected array $ACCESSOR_TYPES = ['set', 'get'];

  /**
   * @param  string $method Setter or getter function. For example, `getFirstName`
   * @param  mixed $args No argument needed if `$method` was getter fn.
   * If setter fn, than argument is required. For example 'John', if using `setFirstName()`
   * @return void
   */
  public function __call($method, $args = null)
  {
    // validates method name (string) length.
    if (strlen($method) < 4)
      throw new ErrorException('Error: not valid `$method` length!');

    // splices off accessor type (as string).
    $accessorType = substr($method, 0, 3);

    // validates if `ACCESSOR_TYPE` is 'set' or 'get'
    if (!in_array($accessorType, $this->ACCESSOR_TYPES))
      throw new ErrorException('Not valid accessor name! Function must ' .
        'start with "set" or "get" keywords!');

    // validates if there is argument if setter fn.
    if ($accessorType === 'set' && $args === null)
      throw new ErrorException('Argument is required for setter function!');

    // splices of variable name of which setter or getter fn will be called.
    $variableName = lcfirst(substr($method, 3, strlen($method)));

    // validates if spliced variable exists in class.
    if (!property_exists(__CLASS__, $variableName))
      throw new ErrorException('Variable "' . $variableName
        . '" does not exists in class "' . __CLASS__ . '"!');

    // validates if variable name is whitelisted (allowed to use setter and getter functions).
    if (!in_array($variableName, self::WHITELISTED_ACCESSORS))
      throw new ErrorException('variable name not in `WHITELISTED_FOR_ACCESSORS` list. ' .
        'Whitelisted list: "' . join('", "', self::WHITELISTED_ACCESSORS) . '". ');

    // uses setter or getter fn based on `accessorType` string value
    switch ($accessorType) {
      case 'set':
        $this->{ $variableName} = $args;
        break;
      case 'get':
        return $this->{ $variableName};
    }
  }
}