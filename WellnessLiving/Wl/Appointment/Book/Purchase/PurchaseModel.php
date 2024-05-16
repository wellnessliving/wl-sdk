<?php

namespace WellnessLiving\Wl\Appointment\Book\Purchase;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlProgramCategorySid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Retrieves information about Purchase Options that can be used to pay for an appointment.
 */
class PurchaseModel extends WlModelAbstract
{
  /**
   * Data about the login prize which can be used to pay for service.
   * <dl>
   *   <dt>int <var>i_count</var></dt><dd>Login prize remaining quantity.</dd>
   *   <dt>string <var>k_login_prize</var></dt><dd>Key of login prize.</dd>
   *   <dt>string <var>text_description</var></dt><dd>User friendly login prize description.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_login_prize;

  /**
   * A list of the client`s login promotions that can be applied to a given service.
   * <dl>
   *   <dt>array <var>a_login_promotion_info</var></dt>
   *   <dd>
   *      Information about the Purchase Option. It contains the following information:
   *      <dl>
   *        <dt>int <var>i_limit</var></dt>
   *        <dd>The count of visits that the Purchase Option allows the client to make.</dd>
   *        <dt>int|null <var>i_limit_duration</var></dt>
   *        <dd>The maximum number of minutes that current Purchase Option can be used for.</dd>
   *        <dt>int <var>i_remain</var></dt>
   *        <dd>The count of the remaining visits.</dd>
   *        <dt>int|null <var>i_remain_duration</var></dt>
   *        <dd>The number of minutes left in this Purchase Option.</dd>
   *      </dl>
   *   </dd>
   *   <dt>string[] <var>a_visit_limit</var></dt>
   *   <dd>The list of calendar restrictions of the Purchase Option. For example, four per week.</dd>
   *   <dt>array <var>a_restrict</var></dt>
   *   <dd>Data about the shortest restriction period:
   *     <dl>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the shortest restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the shortest restriction period.</dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of the shortest restriction period. For example "this week" or "for a four-day period".</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_restrict_data</var></dt>
   *   <dd>Data about all restriction periods. Given as an array, where each record has the following structure:
   *     <dl>
   *       <dt>int <var>i_book</var></dt>
   *       <dd>The count of future sessions that are paid with this Purchase Option.</dd>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the restriction period.</dd>
   *       <dt>int <var>i_use</var></dt>
   *       <dd>The usage count of the Purchase Option.</dd>
   *       <dt>int <var>i_visit_past</var></dt>
   *       <dd>
   *         The count of attended sessions before the last renewal.
   *         This will be `0` if no sessions before the last renewal or if the Purchase Option doesn't auto-renew.
   *       </dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of restriction period. For example, "this week" or "for a four-day period".</dd>
   *     </dl>
   *   </dd>
   *   <dt>int <var>i_limit</var></dt>
   *   <dd>The count of visits that the Purchase Option allows the client to make.</dd>
   *   <dt>int|null <var>i_limit_duration</var></dt>
   *   <dd>The maximum number of minutes that current Purchase Option can be used for.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>The program ID for promotions. One of the {@link WlProgramSid} constants.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The Purchase Option login key.</dd>
   *   <dt>string <var>s_class_include</var></dt>
   *   <dd>The list of services provided by this Purchase Option.</dd>
   *   <dt>string <var>s_description</var></dt>
   *   <dd>The Purchase Option description.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>The Purchase Option duration.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The Purchase Option name.</dd>
   *   <dt>string <var>text_package_item</var></dt>
   *   <dd>If this Purchase Option is a package, then this field contains a list of Purchase Options contained in the package.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_login_promotion;

  /**
   * An array with information about available Purchase Options.
   * <dl>
   *   <dt>
   *     array <var>a_image</var>
   *   </dt>
   *   <dd>
   *     Information describing the logo of the purchase option. This value can be false if there is no logo described.
   *     Image information will have the following fields:
   *     <dl>
   *       <dt>
   *         int <var>i_height</var>
   *       </dt>
   *       <dd>
   *         Actual height of thumbnail image.
   *       </dd>
   *       <dt>
   *         int <var>i_height_src</var>
   *       </dt>
   *       <dd>
   *         Height of original image.
   *       </dd>
   *       <dt>
   *         int <var>i_rotate</var>
   *       </dt>
   *       <dd>
   *         Angle on which image was rotated compared to the original.
   *       </dd>
   *       <dt>
   *         int <var>i_width</var>
   *       </dt>
   *       <dd>
   *         Actual width of thumbnail image.
   *       </dd>
   *       <dt>
   *         int <var>i_width_src</var>
   *       </dt>
   *       <dd>
   *         Width of original image.
   *       </dd>
   *       <dt>
   *         bool <var>is-resize</var>
   *       </dt>
   *       <dd>
   *         Whether thumbnail is a resized variant of original image. If set to <tt>false</tt>
   *         value returned in <var>url-thumbnail</var> equals value in <var>url-view</var>.
   *       </dd>
   *       <dt>
   *         string <var>url-view</var>
   *       </dt>
   *       <dd>
   *         Url to original image in file storage.
   *       </dd>
   *       <dt>
   *         string <var>url-thumbnail</var>
   *       </dt>
   *       <dd>
   *         Url to resized and rotated image in file storage. If size of original image is larger then specified by
   *         arguments, image thumbnail as created, and a link to this thumbnail is returned. Otherwise link to
   *         original image is returned here.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array <var>a_payment</var>
   *   </dt>
   *   <dd>
   *     The set of calculated values for payment:
   *     <dl>
   *       <dt>
   *         string <var>m_discount</var>
   *       </dt>
   *       <dd>
   *         The amount of the whole discount of one purchase item.
   *       </dd>
   *       <dt>
   *         string <var>m_discount_login</var>
   *       </dt>
   *       <dd>
   *         The discount amount for the client type of one purchase item.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string[] <var>a_visit_limit</var>
   *   </dt>
   *   <dd>
   *     A list of calendar restrictions of the Purchase Option in a human readable format, for example: '4 per week'.
   *   </dd>
   *   <dt>
   *     string <var>dt_expire</var>
   *   </dt>
   *   <dd>
   *     Date, when promotion expires.
   *   </dd>
   *   <dt>
   *     string <var>dt_start</var>
   *   </dt>
   *   <dd>
   *     Date, when promotion starts.
   *   </dd>
   *   <dt>
   *     string <var>f_price</var>
   *   </dt>
   *   <dd>
   *     The price of the Purchase Option.
   *   </dd>
   *   <dt>
   *     int <var>i</var>
   *   </dt>
   *   <dd>
   *     Order number of the purchase option in the list.
   *   </dd>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *     Count of visits that purchase option allows to make.
   *   </dd>
   *   <dt>
   *     int|null <var>i_limit_duration</var>
   *   </dt>
   *   <dd>
   *     Maximum number of minutes that current promotion can be used.
   *   </dd>
   *   <dt>
   *     int <var>i_payment_period</var>
   *   </dt>
   *   <dd>
   *     Count of calendar periods (weeks, months, years) between payment for membership.
   *   </dd>
   *   <dt>
   *     int <var>id_duration</var>
   *   </dt>
   *   <dd>
   *     Duration ID. Constant from {@link ADurationSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program</var>
   *   </dt>
   *   <dd>
   *     Program ID for promotions from {@link WlProgramSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program_type</var>
   *   </dt>
   *   <dd>
   *     Program type ID. Constant from {@link WlProgramTypeSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_promotion_price</var>
   *   </dt>
   *   <dd>
   *     How the Purchase Item price is specified. One of the {@link WlProgramTypeSid} constants.
   *   </dd>
   *   <dt>
   *     int <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     ID of the purchase item from {@link WlPurchaseItemSid}
   *   </dd>
   *   <dt>
   *     bool <var>is_contract</var>
   *   </dt>
   *   <dd>
   *     This will be `true` if the Purchase Option is a contract. It will `false` otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_description</var>
   *   </dt>
   *   <dd>
   *     `true` if purchase option has description.
   *   </dd>
   *   <dt>
   *     bool <var>is_introductory</var>
   *   </dt>
   *   <dd>
   *     `true` if promotion is introductory offer, `false` otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_renew</var>
   *   </dt>
   *   <dd>
   *     This will be `true` if the Purchase Option will auto-renew. It will be `false` otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_renew_check</var>
   *   </dt>
   *   <dd>
   *     If `true` - the Purchase Option is renewable and the "auto-renew" option should be turned on by default.
   *    `This will be `false` otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_start</var>
   *   </dt>
   *   <dd>
   *     This will be `true` if the Purchase Option has a duration that begins on purchase. It will be `false` otherwise.
   *   </dd>
   *   <dt>
   *     int <var>k_id</var>
   *   </dt>
   *   <dd>
   *     Primary ID of the element in it's table.
   *   </dd>
   *   <dt>
   *     string|null [<var>m_price_old</var>]
   *   </dt>
   *   <dd>
   *     Price of single session purchase before online discount. `null` if service does not have online discount.
   *     Is set only if this purchase option is purchase of single visit.
   *   </dd>
   *   <dt>
   *     string <var>s_activation</var>
   *   </dt>
   *   <dd>
   *     Activation settings of the promotion.
   *   </dd>
   *   <dt>
   *     string <var>s_class</var>
   *   </dt>
   *   <dd>
   *     Class for designer to mark purchase options with different icons.
   *   </dd>
   *   <dt>
   *     string <var>s_class_include</var>
   *   </dt>
   *   <dd>
   *     List of included in the promotion services.
   *   </dd>
   *   <dt>
   *     string <var>s_description</var>
   *   </dt>
   *   <dd>
   *     Description of the purchase option.
   *   </dd>
   *   <dt>
   *     string <var>s_duration</var>
   *   </dt>
   *   <dd>
   *     Duration of the promotion.
   *   </dd>
   *   <dt>
   *     string <var>s_payment_duration</var>
   *   </dt>
   *   <dd>
   *     Period between payments for memberships.
   *   </dd>
   *   <dt>
   *     string <var>sid_program_category</var>
   *   </dt>
   *   <dd>
   *     Category of the program for promotions from {@link WlProgramCategorySid}.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Name of the purchase option.
   *   </dd>
   *   <dt>
   *     string <var>s_value</var>
   *   </dt>
   *   <dd>
   *     Key of the purchase option in the format [<var>purchase_item_id</var>]::[<var>k_id</var>]
   *   </dd>
   *   <dt>
   *     string <var>text_package_item</var>
   *   </dt>
   *   <dd>
   *     If this promotion is a package. This field contains list of promotions contained in the package.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_purchase;

  /**
   * List of redeemable prizes which can be used to pay for service.
   * <dl>
   *   <dt>int <var>i_score</var></dt><dd>Prize price in points.</dd>
   *   <dt>string <var>k_reward_prize</var></dt><dd>Key of redeemable prize..</dd>
   *   <dt>string <var>text_description</var></dt><dd>User friendly prize description.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_reward_prize;

  /**
   * List of selected services without current {@link PurchaseModel::$k_service}.
   *
   * The list of these services directly affects the list of selected promotions.
   * Depending on the number and order of services, there may be different results.
   *
   * The current {@link PurchaseModel::$k_service} will be added to the end of this list.
   * It is worth considering this list as a list of previously selected services.
   *
   * Each element has the following structure:
   * <dl>
   *  <dt>array <var>a_purchase</var></dt>
   *  <dd>
   *    List of purchase options selected for the service.
   *    Should be set if a new purchase option is selected for this service.
   *    <dl>
   *      <dt>int <var>id_purchase_item</var></dt>
   *      <dd>Purchase item ID. Constant from {@link WlPurchaseItemSid}.</dd>
   *      <dt>string <var>k_id</var></dt>
   *      <dd>Purchase item key.</dd>
   *    </dl>
   *  </dd>
   *  <dt>string <var>dt_date</var></dt>
   *  <dd>Local date/time to check purchase options expiration.</dd>
   *  <dt>string|null <var>k_login_prize</var></dt>
   *  <dd>
   *    Login prize key.
   *    `null` if no login prize used to pay for this service.
   *  </dd>
   *  <dt>string|null <var>k_login_promotion</var></dt>
   *  <dd>
   *    Login promotion key.
   *    Should be set if login promotion selected for this service.
   *  </dd>
   *  <dt>string <var>k_service</var></dt>
   *  <dd>Service key.</dd>
   *  <dt>string <var>k_timezone</var></dt>
   *  <dd>
   *    The timezone key for `dt_date` field.
   *
   *    Can be `null` if timezone is not selected.
   *
   *    In any case, the timezone will be used if the business allows client timezones.
   *  </dd>
   * </dl>
   *
   * @get get
   * @var array[]
   *
   * @see PurchaseModel::$k_service
   */
  public $a_service = [];

  /**
   * Session pass information in a case if user books same appointment second time and already has Drop-in.
   *
   * @get result
   * @var array
   */
  public $a_session_pass = [];

  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * The date to use to check for expiration of Purchase Options.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * The asset booking duration.
   *
   * @get get
   * @var int
   */
  public $i_duration = 0;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   *
   * @get get
   * @var int|null
   */
  public $i_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   *
   * @get get
   * @var int|null
   */
  public $i_width = 0;

    /**
     * The mode type. One of the {@link ModeSid} constants.
     *
     * @get get
     * @var int
     */
    public $id_mode = 0;

  /**
   * The mode type. One of the {@link ModeSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` - get all Purchase Options suitable for appointment.
   * `false` - get only Purchase Options available for the client.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Indicates if drop-in rate should be the default purchase option.
   *
   * @get result
   * @var bool
   */
  public $is_single_default = false;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The Purchase Option ID used to pay for the appointment.
   *
   * This will be `null` if the client doesn't have a suitable Purchase Option.
   *
   * @get get,result
   * @var string
   * @see PurchaseModel::$text_login_promotion
   */
  public $k_login_promotion;

  /**
   * Default promotion key.
   * Empty if the appointment has no default promotion.
   *
   * @get result
   * @var string
   */
  public $k_promotion_default = '';

  /**
   * The resource key.
   *
   * @get get
   * @var string
   */
  public $k_resource = '0';

  /**
   * The service key used to select available Purchase Options.
   * If multiple services are selected, they should be specified in {@link PurchaseModel::$a_service} array.
   *
   * @get get
   * @var string
   * @see PurchaseModel::$a_service
   */
  public $k_service = '0';

  /**
   * The timezone key for {@link PurchaseModel::$dt_date}.
   *
   * Can be `null` if timezone is not selected.
   *
   * In any case, the timezone will be used if the business allows client timezones.
   *
   * @get get
   * @var string|null
   */
  public $k_timezone = null;

  /**
   * Login promotion title suitable to pay for the services.
   *
   * @get result
   * @var string
   *
   * @see PurchaseModel::$k_login_promotion
   */
  public $text_login_promotion = '';

  /**
   * The user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>