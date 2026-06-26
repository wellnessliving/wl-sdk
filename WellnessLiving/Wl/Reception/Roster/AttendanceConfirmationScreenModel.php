<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to get information about a client that has just checked in.
 *
 * @method WlModelRequest get() Gets information about a client who has just checked in.
 */
class AttendanceConfirmationScreenModel extends WlModelAbstract
{
  /**
   * Data about a login logo.
   *
   * <dl>
   *   <dt>int `i_height`</dt>
   *   <dd>Image height.</dd>
   * 
   *   <dt>int `i_width`</dt>
   *   <dd>Image height.</dd>
   * 
   *   <dt>string `url_photo`</dt>
   *   <dd>Image URL.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_photo = [];

  /**
   * Data of the visit.
   *
   * <dl>
   *   <dt>array `a_payment`</dt>
   *   <dd>
   *     Data for informational card about promotion. Important for the card fields are:
   *     <dl>
   *       <dt>array `a_image`</dt>
   *       <dd>
   *         Logo of the promotion.
   *         <dl>
   *           <dt>int `i_height`</dt>
   *           <dd>Height of the image in pixels.</dd>
   * 
   *           <dt>int `i_width`</dt>
   *           <dd>Width of the image in pixels.</dd>
   * 
   *           <dt>bool `is_empty`</dt>
   *           <dd>`true` means that image is empty.</dd>
   * 
   *           <dt>string `url_thumbnail`</dt>
   *           <dd>Link on the image.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_resources_not_shared`</dt>
   *       <dd>
   *         The list of assets reserved individually at the time of booking containing:
   *         <dl>
   *           <dt>int `i_index`</dt>
   *           <dd>The busy resource index.</dd>
   * 
   *           <dt>string `s_title`</dt>
   *           <dd>The resource name.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_restrict`</dt>
   *       <dd>
   *         Information about calendar restrictions.
   *         <dl>
   *           <dt>int `i_limit`</dt>
   *           <dd>Count of possible visits.</dd>
   * 
   *           <dt>int `i_remain`</dt>
   *           <dd>Count of remaining visits.</dd>
   * 
   *           <dt>string `s_date`</dt>
   *           <dd>Name of the calendar period.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `html_expire`</dt>
   *       <dd>Message about expiration date of the promotion.</dd>
   * 
   *       <dt>int `i_book`</dt>
   *       <dd>Count of future books that are paid with this promotion.</dd>
   * 
   *       <dt>int `i_limit`</dt>
   *       <dd>Limit on the visit count of the promotion.</dd>
   * 
   *       <dt>int `i_remain`</dt>
   *       <dd>Remaining count of visits.</dd>
   * 
   *       <dt>int `i_use`</dt>
   *       <dd>Count of usage of the promotion.</dd>
   * 
   *       <dt>int `i_visit_past`</dt>
   *       <dd>
   *         Count of attended sessions before last renew.
   * `0` if there are no sessions before last renew or promotion is not auto-renew.
   *       </dd>
   * 
   *       <dt>bool `is_last_use`</dt>
   *       <dd>If `true`, the promotion has a usage limit and no remaining visits. Otherwise, this will be `false`.</dd>
   * 
   *       <dt>string `text_renew`</dt>
   *       <dd>Date, when PO is going to be renewed. Empty, if it's not going.</dd>
   * 
   *       <dt>string `s_expire`</dt>
   *       <dd>Message about expiration date of the promotion.</dd>
   * 
   *       <dt>string `s_start`</dt>
   *       <dd>
   *         Start date if promotion has not started yet.
   *  If the promotion has already started, the field is not presented.
   *       </dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>Name of the promotion.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>Promotion owner.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `text_expire`</dt>
   *   <dd>Date when promotion ends in user-friendly format.</dd>
   * 
   *   <dt>string `text_payment`</dt>
   *   <dd>
   *     If visit not payed yet value is `Not payed`.
   *  If specified visit don't need to be paid value is `Free`. Else title of the promotion.
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_visit = [];

  /**
   * Date and time of the visit.
   *
   * @get get
   * @var string
   */
  public $dtu_date = '';

  /**
   * Key of the business. Primary key in {@link \RsBusinessSql} table
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Class schedule key.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '';

  /**
   * Secret string.
   *
   * @get get
   * @var string
   */
  public $s_secret = '';

  /**
   * Status of the operation.
   *
   * @get result
   * @var string
   */
  public $s_status = '';

  /**
   * The class title.
   *
   * @get result
   * @var string
   */
  public $text_class = '';

  /**
   * User's member ID.
   *
   * @get result
   * @var string
   */
  public $text_member = '';

  /**
   * The staff member's full name.
   *
   * @get result
   * @var string
   */
  public $text_staff_name = '';

  /**
   * Class session time in user-friendly format.
   *
   * @get result
   * @var string
   */
  public $text_time = '';

  /**
   * Full name of the user.
   *
   * @get result
   * @var string
   */
  public $text_user = '';

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>