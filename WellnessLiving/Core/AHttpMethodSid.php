<?php

namespace WellnessLiving\Core;

/**
 * A list of HTTP methods.
 */
abstract class AHttpMethodSid
{
  /**
   * DELETE method.
   */
  const DELETE = 3;

  /**
   * GET method.
   */
  const GET = 1;

  /**
   * PATCH method.
   */
  const PATCH = 4;

  /**
   * POST method.
   */
  const POST = 2;

  /**
   * PUT method.
   */
  const PUT = 5;
}

?>