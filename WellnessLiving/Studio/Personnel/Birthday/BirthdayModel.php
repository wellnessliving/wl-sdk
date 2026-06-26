<?php

namespace WellnessLiving\Studio\Personnel\Birthday;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for sending birthday wishes to personnel.
 *
 * @method WlModelRequest post() Sends a birthday wish to the specified personnel.
 * @method WlModelRequest put()
 */
class BirthdayModel extends WlModelAbstract
{
  /**
   * Key of the personnel to send a birthday wish to.
   *
   * @post post
   * @var string
   */
  public $k_personnel_to = '';

  /**
   * Text of the birthday wish to send.
   *
   * @post result
   * @var string
   */
  public $text_result = '';

  /**
   * Text of the birthday wish to send.
   *
   * @post post
   * @var string
   */
  public $text_wish = '';
}

?>