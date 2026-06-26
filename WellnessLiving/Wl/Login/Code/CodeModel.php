<?php

namespace WellnessLiving\Wl\Login\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Methods to accept redemption code or number of gift card.
 *
 * @method WlModelRequest post() Applies login code.
 */
class CodeModel extends WlModelAbstract
{
  /**
   * Key of source mode.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * Key of current business.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Login code.
   *
   * @post post
   * @var string
   */
  public $s_code = '';

  /**
   * Key of a user.
   *
   * @post post
   * @var string
   */
  public $uid = '0';
}

?>