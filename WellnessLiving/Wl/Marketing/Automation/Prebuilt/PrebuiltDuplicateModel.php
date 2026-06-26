<?php

namespace WellnessLiving\Wl\Marketing\Automation\Prebuilt;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages pre-built automation duplication.
 *
 * @method WlModelRequest get() Get the business types connected to the pre-built automation.
 * @method WlModelRequest post() Duplicate the pre-built automation.
 */
class PrebuiltDuplicateModel extends WlModelAbstract
{
  /**
   * List of business types.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_business_type = [];

  /**
   * Whether the prebuilt automation is connected to all business types.
   * If `true`, the prebuilt automation is connected to all business types and can not be duplicated.
   * If `false`, the automation is connected only to business types in `a_business_type`.
   *
   * @get result
   * @var bool
   */
  public $is_business_type_all = false;

  /**
   * Automation key.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_automation = null;
}

?>