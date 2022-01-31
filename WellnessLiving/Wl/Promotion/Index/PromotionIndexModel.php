<?php

namespace WellnessLiving\Wl\Promotion\Index;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlProgramTypeSid;

/**
 * Point to get packages/passes/memberships available in a certain location.
 */
class PromotionIndexModel extends WlModelAbstract
{
  /**
   * Item list. Every element has keys:
   * <dl><dt>array <var>a_image</var></dt><dd>Image data.</dd>
   * <dt>bool <var>is_introductory</var></dt><dd>If <tt>true</tt> this promotion is for introductory clients.</dd>
   * <dt>string <var>k_promotion</var></dt><dd>Item key.</dd>
   * <dt>string <var>m_price</var></dt><dd>Price.</dd>
   * <dt>string <var>text_description</var></dt><dd>Description.</dd>
   * <dt>string <var>text_title</var></dt><dd>Title.</dd></dl>
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var array[]|null
   */
  public $a_promotion = null;

  /**
   * Program type to get items of.
   * One of {@link WlProgramTypeSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_program_type = WlProgramTypeSid::PACKAGE;

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>