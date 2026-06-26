<?php

namespace WellnessLiving\Wl\Promotion\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint to edit promotion for affected clients.
 *
 * @method WlModelRequest get()
 */
class PromotionEditAffectModel extends WlModelAbstract
{
  /**
   * Params which were changed in promotion.
   *
   * <dl>
   *   <dt>int `id_convert`</dt>
   *   <dd>Promotion Conversion type.</dd>
   * 
   *   <dt>bool `is_renew_public`</dt>
   *   <dd>If <tt>false</tt> it should not be shown for clients in booking process, online store and profile purchases.</dd>
   * 
   *   <dt>string `k_promotion_convert`</dt>
   *   <dd>Promotion key to which {@link PromotionEditAffectModel::$k_promotion} will be converted.</dd>
   * 
   *   <dt>string `s_expire_action`</dt>
   *   <dd>Action after expiration.</dd>
   * </dl>
   * @post get
   * @var array
   */
  public $a_params;

  /**
   * Number of clients who has purchased promotion without editing.
   *
   * @get result
   * @var int
   */
  public $i_clients = 0;

  /**
   * Number of clients who has purchased and edited promotion.
   *
   * @get result
   * @var int
   */
  public $i_clients_edited = 0;

  /**
   * Whether any clients including with promotion edited have their membership extended.
   *
   * @get result
   * @var bool
   */
  public $is_extend_all = false;

  /**
   * Whether clients without edited promotion have their membership extended.
   *
   * @get result
   * @var bool
   */
  public $is_extend_without_edited = false;

  /**
   * Whether promotion was edited for affected clients.
   * <tt>true</tt> - promotion was edited for affected clients, <tt>false</tt> - otherwise.
   *
   * @post get
   * @var bool
   */
  public $is_sold_edited = false;

  /**
   * Business key promotion belongs to.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of promotion.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_promotion;

  /**
   * Url of list of the promotion affected clients where sold promotions were not edited.
   *
   * @get result
   * @var string
   */
  public $url_affected_clients;

  /**
   * Url of list of the promotion affected clients.
   *
   * @get result
   * @var string
   */
  public $url_affected_clients_edited;
}

?>