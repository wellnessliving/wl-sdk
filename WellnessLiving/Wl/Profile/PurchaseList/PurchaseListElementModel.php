<?php 

namespace WellnessLiving\Wl\Profile\PurchaseList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about purchase.
 */
class PurchaseListElementModel extends WlModelAbstract
{
  /**
   * List of components (not empty if this purchase element is a package). Every element has keys:
   * <dl>
   *   <dt>
   *     string [<var>k_enrollment_book</var>]
   *   </dt>
   *   <dd>
   *     Primary key in {@link \RsEnrollmentBookSql} table.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_product</var>]
   *   </dt>
   *   <dd>
   *     Primary key in {@link \RsLoginProductSql} table.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_promotion</var>]
   *   </dt>
   *   <dd>
   *     Primary key in {@link \RsLoginPromotionSql} table.
   *   </dd>
   *   <dt>
   *     string [<var>k_session_pass</var>]
   *   </dt>
   *   <dd>
   *     Primary key in {@link \Wl\Session\Pass\Sql} table.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_component;

  /**
   * Image data:
   * <dl>
   *   <dt>
   *     int <var>i_height</var>
   *   </dt>
   *   <dd>
   *     Height.
   *   </dd>
   *   <dt>
   *     int <var>i_width</var>
   *   </dt>
   *   <dd>
   *     Width.
   *   </dd>
   *   <dt>
   *     bool <var>is_empty</var>
   *   </dt>
   *   <dd>
   *     `true` - purchase item does not have image; `false` - has image.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_logo;

  /**
   * For promotions - list of booking restrictions. Every element has next keys:
   * <dl>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *     How many sessions may be booked during period.
   *   </dd>
   *   <dt>
   *     int <var>i_remain</var>
   *   </dt>
   *   <dd>
   *     How many sessions is not used up yet.
   *   </dd>
   *   <dt>
   *     string <var>text_date</var>
   *   </dt>
   *   <dd>
   *     Name of period type.
   *   </dd>
   * </dl>Empty array for another purchase items.
   *
   * @get result
   * @var array[]
   */
  public $a_restrict;

  /**
   * List of taxes paid for purchase item. Every element has next keys:
   * <dl>
   *   <dt>
   *     string <var>f_tax_discount</var>
   *   </dt>
   *   <dd>
   *     Amount of tax.
   *   </dd>
   *   <dt>
   *     string <var>s_tax</var>
   *   </dt>
   *   <dd>
   *     Name of tax.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_tax;

  /**
   * Not `false` only for promotions. `true` - user can control renewing of promotion; `false` - can not control.
   *
   * @get result
   * @var bool
   */
  public $can_renew;

  /**
   * Not empty only for promotions and events. Expiration date of promotion or end date of event.
   *
   * @get result
   * @var string
   */
  public $dl_end;

  /**
   * Local date of purchase in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dl_purchase;

  /**
   * Not empty only for gift cards. Local date in MySQL format when mail about purchasing was sent (or will be sent) to user.
   *
   * @get result
   * @var string
   */
  public $dl_send;

  /**
   * Start date. Not empty only for passes/memberships and events.
   *
   * @get result
   * @var string
   */
  public $dl_start;

  /**
   * Not empty only for promotions. Date of promotion hold end. May be empty if hold is internal.
   *
   * @get result
   * @var string
   */
  public $dt_hold_end;

  /**
   * Not empty only for promotions. Date of promotion hold start.
   *
   * @get result
   * @var string
   */
  public $dt_hold_start;

  /**
   * UTC date/time of purchase in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dt_purchase;

  /**
   * Not empty only for gift cards. Date in MySQL format when gift card was redeemed.
   *
   * @get result
   * @var string
   */
  public $dt_redeem;

  /**
   * Size in percents of discount for client type.
   *
   * @get result
   * @var float
   */
  public $f_discount_login_type_percent;

  /**
   * Formatted description.
   *
   * @get result
   * @var string
   */
  public $html_description;

  /**
   * Not `0` only for promotions and enrollments. How many sessions were booked by this promotion or enrollment.
   *
   * @get result
   * @var int
   */
  public $i_book;

  /**
   * Not `0` only for promotions. How many minutes of sessions were booked by this promotion.
   *
   * @get result
   * @var int
   */
  public $i_book_duration;

  /**
   * How many units of purchase item were bought.
   *
   * @get result
   * @var int
   */
  public $i_buy;

  /**
   * Size in percents of discount via prize.
   *
   * @get result
   * @var int
   */
  public $i_discount_count;

  /**
   * This field is only added for promotions. Duration of promotion. Measurement unit is <var>id_duration</var>.
   *
   * @get result
   * @var int
   */
  public $i_duration;

  /**
   * Not `0` only for not sequential promotions. How many books by this promotion is left.
   *
   * @get result
   * @var int
   */
  public $i_left;

  /**
   * Not `0` only for promotions. How many book may be made by promotion in total.
   *
   * @get result
   * @var int
   */
  public $i_limit;

  /**
   * Not `0` only for promotions with program type "membership". Duration of regular payments interval.
   *
   * @get result
   * @var int
   */
  public $i_payment_period;

  /**
   * Not `0` only for promotions. How many books by this promotion is left.
   *
   * @get result
   * @var int
   */
  public $i_remain;

  /**
   * Not `0` only for promotions. How many minutes of sessions can be booked by promotion.
   *
   * @get result
   * @var int
   */
  public $i_remain_duration;

  /**
   * Not `0` only for promotions. How many times promotion was updated.
   *
   * @get result
   * @var int
   */
  public $i_renew;

  /**
   * Not `0` only for promotions. How many visits were made by promotion.
   *
   * @get result
   * @var int
   */
  public $i_use;

  /**
   * Not `0` only for promotions. Number of minutes the user has already used with this purchase of this promotion.
   *
   * @get result
   * @var int
   */
  public $i_use_duration;

  /**
   * Activation mode. One on {@link \RsActivationSid} constants. This field is only added for promotions.
   *
   * @get result
   * @var int
   */
  public $id_activation;

  /**
   * Type of discount via prizes. One on {@link \RsCommissionTypeSid} constants. Empty if this discount was not applied.
   *
   * @get result
   * @var int
   */
  public $id_discount_commission_type;

  /**
   * Not `0` only for promotions with program type "membership". Measurement unit for key <var>i_payment_period</var>. One on {@link \RsDurationTypeSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_duration;

  /**
   * Not `0` only for promotions. Measurement unit for key <var>i_payment_period</var>. ID of promotion program type. One on {@link \RsProgramTypeSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_program_type;

  /**
   * Measurement unit for key <var>i_payment_period</var>. ID of purchase item type. One on {@link \RsPurchaseItemSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item;

  /**
   * ID of sale category in store. One of constants {@link \RsSaleSid}.
   *
   * @get result
   * @var int
   */
  public $id_sale;

  /**
   * `true` if purchase item is active; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_active;

  /**
   * `true` if purchase item is a component of another purchase item (package); `false` if purchase item is not a component.
   *
   * @get result
   * @var bool
   */
  public $is_component;

  /**
   * Not `false` only for promotions. `true` if after expiration promotion should be converted to another promotion; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_convert;

  /**
   * Not `false` only for promotions. `true` if promotion is expired; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_expire;

  /**
   * Not `false` only for promotions. `true` if promotion is on hold; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_hold;

  /**
   * `true` if usage purchase item is restricted; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_limit;

  /**
   * `true` - discount was applied for member type; `false` - discount was applied for pass holder type; `null` - discount was applied for prospect type or if this discount was not
   * applied.
   *
   * @get result
   * @var bool|null
   */
  public $is_login_type_member;

  /**
   * Not `false` only for gift cards. `true` if email notification about gift should be sent; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_mail;

  /**
   * Not `false` only for gift cards. `true` if email notification about gift was sent; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_past;

  /**
   * Not `false` only for gift cards. `true` - gift card is redeemed; `false` - gift cart is not redeemed.
   *
   * @get result
   * @var bool
   */
  public $is_redeem;

  /**
   * Not `false` only for promotions. `true` if promotion will be renewed after expiration; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_renew;

  /**
   * Not `false` only for promotions. `true` if promotion has been transferred; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_transfer;

  /**
   * ID of redemption code which is used to obtain some goods.
   *
   * Should be specified only to obtain via redemption code
   * (not for ordinary purchases or for purchased promotions without purchases).
   *
   * Primary key in {@link \RsCodeSql}.
   *
   * @get get
   * @var string
   */
  public $k_code = '0';

  /**
   * Redemption code via purchase item was purchased. Primary key in {@link \RsCodeSql} table. Empty if purchase item was purchased not via redemption code.
   *
   * @get result
   * @var string
   */
  public $k_code_result;

  /**
   * Purchase item currency. Primary key in {@link \RsCurrencySql} table.
   *
   * @get result
   * @var string
   */
  public $k_currency;

  /**
   * ID of entirely booked event.
   *
   * Must be specified if purchase item is a component of a package and it is whole event book.
   *
   * @get get
   * @var string
   */
  public $k_enrollment_book = '0';

  /**
   * The key of the item. Can correspond to one of many values depending on {@link \Wl\Profile\PurchaseList\PurchaseListElementApi::$id_sale}.
   *
   * @get result
   * @var string
   */
  public $k_id = '0';

  /**
   * ID of purchased product.
   *
   * Must be specified if purchase item is a component of a package.
   *
   * @get get
   * @var string
   */
  public $k_login_product = '0';

  /**
   * ID of purchased promotion.
   *
   * Must be specified only for purchases promotions without purchases
   * (not for ordinary purchases or to obtain via redemption codes).
   *
   * Primary key in {@link \RsLoginPromotionSql}.
   *
   * @get get
   * @var string
   */
  public $k_login_promotion = '0';

  /**
   * Purchased promotion. Primary key in {@link \RsLoginPromotionSql} table. Not empty only for promotions and components of package.
   *
   * @get result
   * @var string
   */
  public $k_login_promotion_result;

  /**
   * ID of purchase item.
   *
   * Must be specified only for ordinary purchases
   * (not for obtain via redemption codes or for purchased promotions without purchases).
   * And only for items which are not components of package.
   *
   * @get get
   * @var string
   */
  public $k_purchase_item = '0';

  /**
   * Purchase ID. Primary key in {@link \RsPurchaseSql} table. Empty for purchases obtained via redemption code and results of old import.
   *
   * @get result
   * @var string
   */
  public $k_purchase_result;

  /**
   * ID of makeup to attend event.
   *
   * Must be specified if purchase item is a component of a package and it is whole event book.
   * And only for items which are not components of package.
   *
   * @get get
   * @var string
   */
  public $k_session_pass = '0';

  /**
   * Final cost of this purchase item.
   *
   * @get result
   * @var string
   */
  public $m_cost_item;

  /**
   * Final cost of purchase which includes this purchase item.
   *
   * @get result
   * @var string
   */
  public $m_cost_total;

  /**
   * Amount of discount via prize. Empty if this discount was not applied.
   *
   * @get result
   * @var string
   */
  public $m_discount_amount;

  /**
   * Amount of discount for client type. Empty if this discount was not applied.
   *
   * @get result
   * @var string
   */
  public $m_discount_login_type_amount;

  /**
   * Amount of manual discount. Empty if this discount was not applied.
   *
   * @get result
   * @var string
   */
  public $m_discount_manual;

  /**
   * Not empty only for promotions with program type "membership". Amount of regular payment.
   *
   * @get result
   * @var string
   */
  public $m_period_price;

  /**
   * Source price of item.
   *
   * @get result
   * @var string
   */
  public $m_price;

  /**
   * Refunded amount. `0` if were no refunds.
   *
   * @get result
   * @var string
   */
  public $m_refund;

  /**
   * Redemption code. Not empty only if purchase is obtained via redemption code.
   *
   * @get result
   * @var string
   */
  public $s_code;

  /**
   * Not empty only for gift cards. Code to redeem gift card.
   *
   * Can be auto-generated or custom (entered manually by the staff member during purchase).
   * Max length - 20 characters. Can include numbers and letters.
   *
   * @get result
   * @var string
   */
  public $s_gift_code;

  /**
   * Not empty only for gift cards. Name of gift recipient.
   *
   * @get result
   * @var string
   */
  public $s_gift_recipient;

  /**
   * Name of staff member who disabled usage of purchase item. Empty if usage of purchase item is enabled.
   *
   * @get result
   * @var string
   */
  public $s_limit_actor;

  /**
   * Not empty only for gift cards. `true` if mail about purchase was sent (or will be sent); `false` otherwise.
   *
   * @get result
   * @var string
   */
  public $s_mail;

  /**
   * Not empty only for gift cards. Message to gift receiver. Empty if email notification should not be sent.
   *
   * @get result
   * @var string
   */
  public $s_message;

  /**
   * Name of user who has paid for this purchase.
   *
   * @get result
   * @var string
   */
  public $s_payer;

  /**
   * Not empty only for promotions which must be converted to another promotion after expiration. Title of promotion to which convent.
   *
   * @get result
   * @var string
   */
  public $s_promotion_convert;

  /**
   * Number of receipt.
   *
   * @get result
   * @var string
   */
  public $s_purchase;

  /**
   * Name of user who has paid for this purchase.
   *
   * @get result
   * @var string
   */
  public $s_recipient;

  /**
   * Not empty only for gift cards. Gift sender.
   *
   * @get result
   * @var string
   */
  public $s_sender;

  /**
   * Title of purchase item.
   *
   * @get result
   * @var string
   */
  public $s_title;

  /**
   * Unique string ID of purchase item kind.
   *
   * @get result
   * @var string
   */
  public $sid_value;

  /**
   * ID of user who is owner of this purchase. Primary key in {@link \PassportLoginSql} table.
   *
   * @get result
   * @var string
   */
  public $uid_payer;

  /**
   * ID of user who is owner of this purchase. Primary key in {@link \PassportLoginSql} table.
   *
   * @get result
   * @var string
   */
  public $uid_recipient;
}

?>