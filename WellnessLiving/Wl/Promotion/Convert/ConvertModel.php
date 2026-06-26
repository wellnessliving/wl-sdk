<?php

namespace WellnessLiving\Wl\Promotion\Convert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlProgramSid;

/**
 * Receives promotions set to convert.
 *
 * The GET method will return a list of promotions' data which are set to convert to current.
 *
 * @method WlModelRequest get() Returns list of promotions that can be used to pay for the service.
 */
class ConvertModel extends WlModelAbstract
{
  /**
   * Promotion data containing the following structure: 
   *
   * <dl>
   *   <dt>int `id_program`</dt>
   *   <dd>Program ID for promotions from {@link WlProgramSid}.</dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>Promotion key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Promotion title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The promotion key the given promotion will be converted to.
   *
   * @get get
   * @var string
   */
  public $k_promotion_to = '';
}

?>