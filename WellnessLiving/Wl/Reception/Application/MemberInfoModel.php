<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about user for self check in application.
 */
class MemberInfoModel extends WlModelAbstract
{
  /**
   * Items, which are prepared for application.
   *
   * They are generated here, because js has limitation for work with translated messages.
   *
   * <dl>
   *   <dt>string <var>id_color</var></dt>
   *   <dd>
   *     ID of color the notice is displayed in.
   *     One of {@link \WellnessLiving\Wl\Reception\Application\MemberInfoColorSid} constants.
   *   </dd>
   *   <dt>string <var>id_icon</var></dt>
   *   <dd>
   *     ID of icon that accompanies the message.
   *     One of {@link \WellnessLiving\Wl\Reception\Application\MemberInfoIconSid} constants
   *   </dd>
   *   <dt>string <var>text_class</var></dt>
   *   <dd>Name of the class for styles.</dd>
   *   <dt>string <var>text_message</var></dt>
   *   <dd>Plain message for info box.</dd>
   *   <dt>string <var>html_message</var></dt>
   *   <dd>Message for info box.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_items = [];

  /**
   * Key of the location, where Self Check In application is run.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Key of the Check In application.
   *
   * @get get
   * @var string
   */
  public $s_secret = '';
}

?>