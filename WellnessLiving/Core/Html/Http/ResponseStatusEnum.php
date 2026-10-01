<?php

namespace WellnessLiving\Core\Html\Http;

/**
 * HTTP response status codes.
 */
class ResponseStatusEnum
{
  /**
   * Bad Gateway.
   */
  const BAD_GATEWAY = 502;

  /**
   * OK.
   */
  const OK = 200;

  /**
   * Not standard HTTP status code, but used by some servers to
   * indicate that the server is overloaded and cannot handle the request at the moment.
   */
  const UNKNOWN_ERROR_530 = 530;
}

?>