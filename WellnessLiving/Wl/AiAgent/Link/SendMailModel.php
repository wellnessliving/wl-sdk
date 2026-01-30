<?php

namespace WellnessLiving\Wl\AiAgent\Link;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Model to send email based on AI agent link action.
 *
 * This endpoint is not public and can be used only by the AI agent.
 */
class SendMailModel extends WlModelAbstract
{
  /**
   * Purchase item ID. Required if {@link SendMailModel::$text_action} is 'purchase'.
   *
   * One of the {@link WlPurchaseItemSid} constants.
   *
   * @post get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * Service ID. Required if {@link SendMailModel::$text_action} is 'booking'.
   *
   * @post get
   * @var int
   */
  public $id_service = 0;

  /**
   * Business key. Required.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Unique identifier for the link.
   *
   * @post get
   * @var string
   */
  public $k_id = '';

  /**
   * Action type. Must be 'purchase' or 'booking'.
   *
   * @post get
   * @var string
   */
  public $text_action = '';

  /**
   * User ID. Required.
   *
   * @post get
   * @var string
   */
  public $uid = '';
}

?>