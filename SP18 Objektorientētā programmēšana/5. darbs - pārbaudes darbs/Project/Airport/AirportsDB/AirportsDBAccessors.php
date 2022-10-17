<?php

trait AirportsDBAccessors {
  /**
   * Get the value of airports
   *
   * @return  Airport[]
   */ 
  public function getAirports()
  {
    return $this->airports;
  }

  /**
   * Set the value of airports
   *
   * @param  Airport[]  $airports
   *
   * @return  self
   */ 
  public function setAirports(array $airports)
  {
    $this->airports = $airports;

    return $this;
  }

  /**
   * Get the value of planes
   *
   * @return  Plane[]
   */ 
  public function getPlanes()
  {
    return $this->planes;
  }

  /**
   * Set the value of planes
   *
   * @param  Plane[]  $planes
   *
   * @return  self
   */ 
  public function setPlanes(array $planes)
  {
    $this->planes = $planes;

    return $this;
  }

  /**
   * Get the value of flights
   *
   * @return  Flight[]
   */ 
  public function getFlights()
  {
    return $this->flights;
  }

  /**
   * Set the value of flights
   *
   * @param  Flight[]  $flights
   *
   * @return  self
   */ 
  public function setFlights(array $flights)
  {
    $this->flights = $flights;

    return $this;
  }
}