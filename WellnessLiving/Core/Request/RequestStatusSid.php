<?php

namespace WellnessLiving\Core\Request;

/**
 * Request http statuses.
 */
class RequestStatusSid
{
  /**
   * Malformed data.
   */
  const BAD_REQUEST = 400;

  /**
   * Created successfully.
   */
  const CREATED = 201;

  /**
   * Success.
   */
  const GONE = 410;

  /**
   * Internal server error.
   *
   * @see RequestStatusSid::INTERNAL_SERVER_UNKNOWN_ERROR
   */
  const INTERNAL_SERVER_ERROR = 500;

  /**
   * Internal logged server error.
   *
   * Differs from {@link RequestStatusSid::INTERNAL_SERVER_ERROR} in that the user will be provided
   */
  const INTERNAL_SERVER_UNKNOWN_ERROR = 520;

  /**
   * Resource not fount.
   */
  const NOT_FOUND = 404;

  /**
   * Method is not implemented.
   */
  const NOT_IMPLEMENTED = 501;

  /**
   * Empty result.
   */
  const NOT_RESULT = 204;

  /**
   * Success.
   */
  const OK = 200;

  /**
   * Authorization error occurred.
   */
  const UNAUTHORIZED = 401;

  /**
   * Entity can not be processed.
   */
  const UNPROCESSABLE_ENTITY = 422;
}

?>