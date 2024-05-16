<?php

namespace WellnessLiving\Wl\Purchase\Share;

use WellnessLiving\Core\a\ASocialSid;
use WellnessLiving\WlModelAbstract;

/**
 * Shares a purchase to a specified social network.
 */
class PurchaseShareModel extends WlModelAbstract
{
  /**
   * The social network. One of the {@link ASocialSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_social;

  /**
   * The key of the purchase.
   *
   * @post post
   * @var string
   */
  public $k_purchase;

  /**
   * The URL to the sharing page.
   *
   * @post result
   * @var string
   */
  public $url_share;
}

?>