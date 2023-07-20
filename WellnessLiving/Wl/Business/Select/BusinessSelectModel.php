<?php

namespace WellnessLiving\Wl\Business\Select;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that provides the list of business that a staff member may access.
 */
class BusinessSelectModel extends WlModelAbstract
{
  /**
   * Configuration data used to determine the list of businesses returned. This array has the following keys:
   * <dl>
   *   <dt>bool <var>is_role</var></dt>
   *   <dd>This will be `true` if we are checking for businesses where the user is a staff member.</dd>
   *   <dt>string <var>[k_business]</var></dt>
   *   <dd>The business key. </dd>
   * </dl>
   *
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * Business list with additional parameters for a business select HTML component.
   * This array contains the following keys and values.
   * <dl>
   *   <dt>array <var>a_business<var></dt>
   *   <dd>List of businesses the user can access. It is an array, each value is an array with the following keys:<dl>
   *     <dt>string <var>k_business<var></dt>
   *     <dd>The key of the business.</dd>
   *     <dt>string <var>s_title<var></dt>
   *     <dd>The name of the business.</dd>
   *     <dt>bool <var>selected<var></dt>
   *     <dd>This will be true for the current business.</dd>
   *   </dl></dd>
   *   <dt>string <var>is_select<var></dt>
   *   <dd>This will be `true` if one of the listed businesses is selected.</dd>
   *   <dt>string <var>name<var></dt>
   *   <dd>Information for the widget, the name of the key in the list. This should always be `k_business`.</dd>
   *   <dt>string <var>onchange<var></dt>
   *   <dd>Information for the widget, what the widget will do on selection.</dd>
   *   <dt>string <var>s_id<var></dt>
   *   <dd>Information for the widget, the widget instance ID.</dd>
   *   <dt>string <var>s_style<var></dt>
   *   <dd>Information for the widget, any additional CSS to apply.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_select = [];

  /**
   * Business in which a list of business is requested.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User who is requesting the list of businesses.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>