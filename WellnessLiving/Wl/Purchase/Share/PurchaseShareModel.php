<?php

namespace WellnessLiving\Wl\Purchase\Share;

use WellnessLiving\WlModelAbstract;

/**
 * Shares the purchase to specified social network.
 */
class PurchaseShareModel extends WlModelAbstract
{
  /**
   * Social network. One of {@link \WellnessLiving\Core\a\ASocialSid} constants.
   *
   * @post get
   * @var int
   */
  public $id_social = 0;

  /**
   * Key of the purchase.
   *
   * @post get
   * @var string
   */
  public $k_purchase = '0';

  /**
   * Url to sharing page.
   *
   * @post result
   * @var string
   */
  public $url_share = '';
}

?>