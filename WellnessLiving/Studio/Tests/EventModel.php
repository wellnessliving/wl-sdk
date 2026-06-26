<?php

namespace WellnessLiving\Studio\Tests;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for gets information about specific test event.
 *
 * @method WlModelRequest get() Gets information about specific test event.
 */
class EventModel extends WlModelAbstract
{
  /**
   * Prepared log of the test.
   *
   * @get result
   * @var string
   * @uses ATestLog::parse()
   */
  public $html_log = '';

  /**
   * Test file key.
   *
   * @get get
   * @var string
   */
  public $k_test_file = '0';

  /**
   * Test run key.
   *
   * @get get
   * @var string
   */
  public $k_test_run = '0';
}

?>