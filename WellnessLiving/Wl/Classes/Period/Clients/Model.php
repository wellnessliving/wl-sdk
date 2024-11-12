<?php

namespace WellnessLiving\Wl\Classes\Period\Clients;

use WellnessLiving\WlModelAbstract;

/**
 * Class to manage class period info with Api.
 *
 * @sdk
 */
class Model extends WlModelAbstract
{
  /**
   * List of clients that registered on class each element contains information:
   * <ul>
   *   <li>array <var>a_asset</var> A list of the assets.<dl>
   *     <dt>string <var>k_resource</var></dt><dd>Resource key.</dd>
   *     <dt>string <var>text_name</var></dt>
   *     <dd>Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets) by '#'.</dd>
   *     <dt>string <var>text_title</var></dt><dd>Title of the asset.</dd>
   *   </dl>
   *   </li>
   *   <li>string <var>first_name</var> Client's first name.
   *   </li>
   *   <li>string <var>gender</var> Gender of client.
   *   </li>
   *   <li>string <var>last_name</var> Client's last name.
   *   </li>
   *   <li>string <var>mail</var> Mail of client.
   *   </li>
   *   <li>string <var>name</var> Full name. Combination of the first and last names.
   *   </li>
   *   <li>bool <var>pass_prospect</var> Whether client used Pass Promote to visit class.
   *   </li>
   *   <li>string <var>phone</var> Phone number of client.
   *   </li>
   *   <li>int <var>uid</var> User identifier.
   *   </li>
   *   <li>string <var>visit</var> State of visit.
   *   </li>
   * </ul>
   *
   * @field clients
   * @get result
   * @var array[]
   */
  public $a_client;

  /**
   * Date and time of the currently viewed attendance list.
   *
   * @get get
   * @var string
   */
  public $dtl_date;

  /**
   * Whether only clients from <tt>Classpass</tt> should be returned.
   *
   * @get get
   * @var bool
   */
  public $is_classpass_only;

  /**
   * Class period key of the attendance list.
   *
   * @get get
   * @var string
   */
  public $k_class_period;
}

?>