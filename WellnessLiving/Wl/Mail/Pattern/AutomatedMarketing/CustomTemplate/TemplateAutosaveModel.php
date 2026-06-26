<?php

namespace WellnessLiving\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for determining whether template autosave is enabled.
 *
 * @method WlModelRequest get() Gets value of the option that determines whether template autosave is enabled.
 * @method WlModelRequest post() Sets value of the option that determines whether template autosave is enabled.
 */
class TemplateAutosaveModel extends WlModelAbstract
{
  /**
   * Determines whether template autosave is enabled. `true` if autosave is enabled, `false` - otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_autosave = true;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * User key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>