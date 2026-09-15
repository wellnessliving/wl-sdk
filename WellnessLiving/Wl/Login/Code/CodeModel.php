<?php

namespace WellnessLiving\Wl\Login\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Methods to accept redemption code or number of gift card.
 *
 * @method WlModelRequest post() Applies login code.  Validates the source mode, business, redemption code, and that the current user has access to  the target profile. Attempts to redeem the code as a coupon first; if the code is not a coupon,  falls back to checking it as another type of redemption code, for example a gift card number,  and logs the change.
 */
class CodeModel extends WlModelAbstract
{
  /**
 * Key of source mode. One of {@link ModeSid} constants.
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