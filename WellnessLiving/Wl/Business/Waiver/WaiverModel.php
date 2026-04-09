<?php

namespace WellnessLiving\Wl\Business\Waiver;

use WellnessLiving\WlModelAbstract;

/**
 * Information about business waiver.
 */
class WaiverModel extends WlModelAbstract
{
  /**
   * Does the business have a waiver or not?
   *
   * @get result
   * @var bool
   */
  public $has_waiver;

  /**
   * Text of the current waiver with the substituted variables.
   *
   * @get result
   * @var string
   */
  public $html_waiver;

  /**
   * ID of business to get waiver for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Full username.
   * Used as a variable in a contract.
   * It may be set if user does not exist.
   *
   * @get get
   * @var string
   */
  public $text_fullname = '';

  /**
   * User key for which the waiver is shown.
   * Used to fill the variables in the contract
   * Not necessarily if the user does not already exist. In this case, you need to set {@link WaiverModel::$text_fullname}.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>