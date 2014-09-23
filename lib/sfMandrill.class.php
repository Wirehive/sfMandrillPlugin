<?php

/**
 * A Symfony 1.4 plugin wrapper for the Mandrill API library.
 *
 * @author Robin Corps <robin@ngse.co.uk>
 * @version 0.1
 * @package sfMandrillPlugin
 */
class sfMandrill extends Mandrill
{
  /**
   * Construct a new Mandrill API instance
   *
   * @param string $apikey
   */
  public function __construct($apikey = null)
  {
    if (!$apikey)
    {
      $apikey = sfConfig::get('app_mandrill_api_key');
    }

    parent::__construct($apikey);
  }


  /**
   * Calls a Mandrill API method.
   *
   * Returns the result from that call or, if there was an error,
   * throws an exception.
   *
   * @param string $method
   * @param array|null $params
   * @return array
   * @throws Mandrill_Error
   */
  public function __get($method)
  {
    if (isset($this->$method))
    {
      return $this->$method;
    }
    else
    {
      throw new Mandrill_Error('Method not implemented');
    }
  }
} 