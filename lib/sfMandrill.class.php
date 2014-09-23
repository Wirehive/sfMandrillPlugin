<?php


/**
 * A Symfony 1.4 plugin wrapper for the Mandrill API library.
 *
 * @author  Robin Corps <robin@ngse.co.uk>
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
} 