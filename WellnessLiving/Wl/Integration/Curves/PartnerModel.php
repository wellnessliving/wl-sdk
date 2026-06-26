<?php

namespace WellnessLiving\Wl\Integration\Curves;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for get data of the partners.
 *
 * @method WlModelRequest get()
 */
class PartnerModel extends WlModelAbstract
{
  /**
   * A partner list. Where key is key partner, value is name of the partner.
   *
   * @get result
   * @var array|null
   */
  public $a_partner;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * User key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid;
}

?>