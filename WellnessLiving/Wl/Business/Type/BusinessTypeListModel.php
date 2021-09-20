<?php

namespace WellnessLiving\Wl\Business\Type;

use WellnessLiving\WlModelAbstract;

/**
 * Api to get list of business types.
 */
class BusinessTypeListModel extends WlModelAbstract
{
  /**
   * List of business types. Each element has next structure: <dl>
   *  <dt>string <var>k_business_type</var></dt>
   *  <dd>Key of business type.</dd>
   *  <dt>string <var>text_title</var></dt>
   *  <dd>Title of business type.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_business_type;
}

?>