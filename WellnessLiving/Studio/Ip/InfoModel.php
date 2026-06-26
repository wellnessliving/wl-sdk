<?php

namespace WellnessLiving\Studio\Ip;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to manage information about an IP address.
 *
 * @method WlModelRequest put() Saves information about an IP address.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Timeout of IP address.
   *
   * <tt>null</tt> to leave this field unchanged.
   *
   * @put post
   * @var int
   */
  public $id_timeout;

  /**
   * Whether this IP address is used in the office.
   *
   * <tt>null</tt> to leave this field unchanged.
   *
   * @put post
   * @var bool|null
   */
  public $is_office;

  /**
   * Comment on IP address.
   *
   * <tt>null</tt> if comment should not be changed.
   *
   * @put post
   * @var string|null
   */
  public $text_comment;
}

?>