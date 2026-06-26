<?php

namespace WellnessLiving\Wl\QuickStart;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint to load and edit quick start user configuration.
 *
 * @method WlModelRequest get() Gets stored quick start configuration.
 * @method WlModelRequest post() Updates stored quick start configuration.
 */
class QuickStartConfigModel extends WlModelAbstract
{
  /**
   * Last configuration for the quick start state.
   *
   * `null` if not initialized yet. `array` for compatibility with JavaScript.
   *
   *  Has the following structure:
   *
   * <dl>
   *   <dt>bool `is_expand`</dt>
   *   <dd>Whether the Quick Start is expanded.</dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Whether the Quick Start is hidden.</dd>
   * 
   *   <dt>array `a_category_collapsed`</dt>
   *   <dd>
   *     Array of booleans with category numbers as keys and values indicating
   *      whether the category is collapsed.
   *   </dd>
   * </dl>
   * @get result
   * @post post
   * @var array|null
   */
  public $a_config = null;

  /**
   * Quick Start class CID.
   *
   * @get get
   * @post get
   * @var int|null
   */
  public $cid = null;

  /**
   * Key of business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * User key to bind configuration to a specific user.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>