<?php

namespace WellnessLiving\Core\Amazon\S3\Sos\Provider;

/**
 * Represents the list of providers for Simple Object Storage.
 *
 * Last used ID: 4
 */
class SosProviderSid
{
  /**
   * Storage provider based on Amazon S3.
   */
  const AMAZON_S3 = 1;

  /**
   * Storage provider that saves data in MySQL database.
   */
  const DATABASE = 4;

  /**
   * Storage provider based on filesystem.
   */
  const FILE = 2;

  /**
   * Storage provider using local variable.
   */
  const VARIABLE = 3;
}

?>