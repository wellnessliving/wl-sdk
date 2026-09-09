<?php

namespace WellnessLiving\Core\Request\Api;

/**
 * List of supported formats for API request result.
 *
 * Last used ID: 2
 */
class ApiModelResultSid
{
  /**
   * Result of the request returned in JSON format.
   */
  const JSON = 1;

  /**
   * Result of the request returned in raw format.
   */
  const RAW = 3;

  /**
   * Result of the request returned in XML format.
   */
  const XML = 2;
}

?>