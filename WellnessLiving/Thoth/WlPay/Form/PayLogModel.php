<?php

namespace WellnessLiving\Thoth\WlPay\Form;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**/
class PayLogModel extends WlModelAbstract
{
  /**
   * Additional data attached to the log item.
   *
   * JSON-encoded array mary arrives as a `string`.
   *
   * @post post
   * @var array|string
   */
  public $a_data = [];

  /**
   * Type of log item.
   *
   * @post post
   * @var int
   */
  public $id_log = 2;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Message content.
   *
   * @post post
   * @var string
   */
  public $text_message = '';
}

?>