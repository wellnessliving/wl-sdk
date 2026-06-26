<?php

namespace WellnessLiving\Wl\Service\Promotion;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlProgramSid;

/**
 * Return list of promotion what can in theory pay for service from business.
 *
 * @method WlModelRequest get() Returns list of promotions that can be used to pay for the service.
 */
class ServicePromotionModel extends WlModelAbstract
{
  /**
   * Promotion data with structure:.
   *
   * <dl>
   *   <dt>string `k_promotion`</dt>
   *   <dd>Promotion key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of promotion.</dd>
   * 
   *   <dt>int `id_program`</dt>
   *   <dd>One of {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>bool `is_select`</dt>
   *   <dd><tt>true</tt> if the promotion is related to the service, <tt>false</tt> otherwise.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_promotion = [];

  /**
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Default promotion key.
   * `null` if `k_service` was not provided, or if the service has no default promotion.
   *
   * @get result
   * @var string|null
   */
  public $k_promotion_default = null;

  /**
   * Service key.
   *  The service with which you want to connect the promotions. <tt>null</tt> or <tt>0</tt> if you need to return a list
   *  of promotions for an uncreated service.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;
}

?>