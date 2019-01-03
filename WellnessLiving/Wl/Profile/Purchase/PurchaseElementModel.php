<?php

namespace WellnessLiving\Wl\Profile\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about 1 purchase.
 */
class PurchaseElementModel extends WlModelAbstract
{
  /**
   * Image of purchase item:
   * <dl>
   *   <dt>int <var>i_height</var></dt>
   *   <dd>Height.</dd>
   *   <dt>int <var>i_width</var></dt>
   *   <dd>Width.</dd>
   *   <dt>bool <var>is_empty</var></dt>
   *   <dd><tt>true</tt> - purchase item does not have image; <tt>false</tt> - has image.</dd>
   *   <dt>string <var>s_url</var></dt>
   *   <dd>The URL for the image.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_logo = [];

  /**
   * This field is not empty only for promotions.
   * Restrictions to booking with this promotion. Every element has keys:
   * <dl>
   *   <dt>int <var>i_limit</var></dt>
   *   <dd>How many sessions may be booked during period.</dd>
   *   <dt>int <var>i_remain</var></dt>
   *   <dd>How many sessions is not used up yet.</dd>
   *   <dt>string <var>s_date</var></dt>
   *   <dd>Name of period type.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_restrict = [];

  /**
   * List of taxes paid for purchase item. Every element has fields:
   * <dl>
   *   <dt>string <var>f_tax_discount</var></dt>
   *   <dd>Amount of tax.</dd>
   *   <dt>string <var>s_tax</var></dt>
   *   <dd>Name of tax.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_tax = [];

  /**
   * Not <tt>false</tt> only for promotions.
   * <tt>true</tt> - user can control renewing of promotion; <tt>false</tt> - can not control.
   *
   * @get result
   * @var bool
   */
  public $can_renew = false;

  /**
   * Not empty only for promotions.
   * Expiration date of promotion.
   *
   * @get result
   * @var string
   */
  public $dt_end = '';

  /**
   * Not empty only for promotions on hold.
   * Date of promotion hold end.
   * May be empty if hold is internal.
   *
   * @get result
   * @var string
   */
  public $dt_hold_end = '';

  /**
   * Not empty only for promotions on hold.
   * Date of promotion hold start.
   *
   * @get result
   * @var string
   */
  public $dt_hold_start = '';

  /**
   * GMT date of purchase in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dt_purchase = '';

  /**
   * Not empty only for gift cards.
   * Date when email about gift should be sent (or was sent) to receiver.
   *
   * @get result
   * @var string
   */
  public $dt_send = '';

  /**
   * Rate of discount for client type in percents.
   * Empty if this discount was not applied.
   *
   * @get result
   * @var string
   */
  public $f_discount_login_type_percent = '';

  /**
   * Description of purchase item.
   *
   * @get result
   * @var string
   */
  public $html_description = '';

  /**
   * Not <tt>0</tt> only for promotions.
   * How many sessions were booked by this promotion.
   *
   * @get result
   * @var int
   */
  public $i_book = 0;

  /**
   * How many units of purchase item was purchased.
   * <tt>0</tt> for purchase items obtained via redemption code and results of old import.
   *
   * @get result
   * @var int
   */
  public $i_buy = 0;

  /**
   * Rate of discount via prize in percents.
   * <tt>0</tt> if this discount was not applied.
   *
   * @get result
   * @var int
   */
  public $i_discount_count = 0;

  /**
   * Not <tt>0</tt> only for promotions.
   * Number of visits which can be made by this promotion.
   *
   * @get result
   * @var int
   */
  public $i_limit = 0;

  /**
   * Not <tt>0</tt> only for promotions with limited number of minutes.
   * How many minuses this promotion gives in general.
   *
   * @get result
   * @var int
   */
  public $i_limit_duration = 0;

  /**
   * Not <tt>0</tt> only for not sequential promotions.
   * How many books by this promotion is left.
   *
   * @get result
   * @var int
   */
  public $i_left = 0;

  /**
   * Not <tt>0</tt> only for promotions with program type "membership".
   * Duration of regular payments interval.
   *
   * @get result
   * @var int
   */
  public $i_payment_period = 0;

  /**
   * Not <tt>0</tt> only for promotions.
   * How many books by this promotion is left.
   *
   * @get result
   * @var int
   */
  public $i_remain = 0;

  /**
   * Not <tt>0</tt> only for promotions with limited number of minutes.
   * How many minuses by promotion is left.
   *
   * @get result
   * @var int
   */
  public $i_remain_duration = 0;

  /**
   * Not <tt>0</tt> only for promotions.
   * How many visits by promotion were attended.
   *
   * @get result
   * @var int
   */
  public $i_use = 0;

  /**
   * Type of discount via prizes. One on {@link WlCommissionTypeSid} constants.
   * Empty if this discount was not applied.
   *
   * @get result
   * @var int
   */
  public $id_discount_commission_type = 0;

  /**
   * Not <tt>0</tt> only for promotions with program type "membership".
   * Measurement unit for key <tt>Wl_Profile_Purchase_PurchaseElementModel.i_payment_period</tt>.
   * One on {@link WlDurationTypeSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_duration = 0;

  /**
   * Not <tt>0</tt> only for promotions.
   * ID of promotion program. One on {@link WlProgramTypeSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_program_type = 0;

  /**
   * ID of purchase item type. One on {@link WlPurchaseItemSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * ID of sale category. One on {@link WlSaleSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_sale = 0;

  /**
   * <tt>true</tt> - purchase item is active; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_active = false;

  /**
   * <tt>true</tt> if purchase item is component of another purchase item (package);
   * <tt>false</tt> if purchase item is not component.
   *
   * @get result
   * @var bool
   */
  public $is_component = false;

  /**
   * Not <tt>false</tt> only for promotions.
   * <tt>true</tt> - after expiration promotion should be converted to another promotion;
   * <tt>false</tt> - should not be.
   *
   * @get result
   * @var bool
   */
  public $is_convert = false;

  /**
   * Not <tt>false</tt> only for promotions.
   * <tt>true</tt> - promotion is expired; <tt>false</tt> - is not expired.
   *
   * @get result
   * @var bool
   */
  public $is_expire = false;

  /**
   * Not <tt>false</tt> only for promotions.
   * <tt>true</tt> - promotion is on hold; <tt>false</tt> - in not on hold.
   *
   * @get result
   * @var bool
   */
  public $is_hold = false;

  /**
   * <tt>true</tt> - usage of purchase item is disabled because of certain reason; <tt>false</tt> - usage is enabled.
   *
   * @get result
   * @var bool
   */
  public $is_limit = false;

  /**
   * Not <tt>null</tt> only if discount for client type was applied.
   * <tt>true</tt> - discount was applied for member type;
   * <tt>false</tt> - discount was applied for pass holder type;
   * <tt>null</tt> - discount was applied for prospect type.
   *
   * @get result
   * @var bool|null
   */
  public $is_login_type_member = null;

  /**
   * Not <tt>false</tt> for gift cards only.
   * <tt>true</tt> if email notification about gift should be sent; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_mail = false;

  /**
   * Not <tt>false</tt> for gift cards only.
   * <tt>true</tt> if email notification about gift was sent; <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_past = false;

  /**
   * Not <tt>false</tt> for gift cards only.
   * <tt>true</tt> - gift card is redeemed; <tt>false</tt> - gift cart is not redeemed.
   *
   * @get result
   * @var bool
   */
  public $is_redeem = false;

  /**
   * Not <tt>false</tt> only for promotions.
   * <tt>true</tt> - promotion is auto-renewable; <tt>false</tt> - is not auto-renewable.
   *
   * @get result
   * @var bool
   */
  public $is_renew = false;

  /**
   * Not <tt>false</tt> only for promotions.
   * <tt>true</tt> - promotion has been transferred; <tt>false</tt> - has not been transferred.
   *
   * @get result
   * @var bool
   */
  public $is_transfer = false;

  /**
   * ID of redemption code which is used to obtain some goods.
   * Should be specified only for obtaining via redemption code
   * (not for ordinary purchases or for purchased promotions without purchases).
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_code = null;

  /**
   * ID of redemption code.
   * Not <tt>0</tt> if purchase item is obtained via redemption code or
   * if is component of package which is obtained via redemption code.
   *
   * @get result
   * @var string
   */
  public $k_code_result = '0';

  /**
   * ID of currency used for purchase.
   *
   * @get result
   * @var string
   */
  public $k_currency = '';

  /**
   * ID of entirely booked event.
   * Must be specified if purchase item is a whole event and a component of a package.
   *
   * @get get
   * @var string|null
   */
  public $k_enrollment_book = null;

  /**
   * ID of purchased product.
   * Must be specified if purchase item is a product and a component of a package.
   *
   * @get get
   * @var string|null
   */
  public $k_login_product = null;

  /**
   * ID of user's promotion.
   * Should be specified only for purchases promotions without purchases
   * (not for ordinary purchases or for obtaining via redemption codes).
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * ID of purchased promotion. Not <tt>0</tt> only for promotions.
   *
   * @get result
   * @var string
   */
  public $k_login_promotion_result = '0';

  /**
   * ID of purchase item.
   * Should be specified only for ordinary purchases
   * (not for obtaining via redemption codes or for results of old import).
   *
   * @get get
   * @var string|null
   */
  public $k_purchase_item = null;

  /**
   * ID of whole purchase which includes given purchase item.
   *
   * @get result
   * @var string
   */
  public $k_purchase_result = '0';

  /**
   * ID of makeup to attend event.
   *
   * @get get
   * @var string|null
   */
  public $k_session_pass = null;

  /**
   * Purchase item cost.
   *
   * @get result
   * @var string|null
   */
  public $m_cost_item = '';

  /**
   * Purchase cost.
   *
   * @get result
   * @var string
   */
  public $m_cost_total = '';

  /**
   * Amount of discount via prize.
   * Empty if this discount was not applied.
   *
   * @get result
   * @var string
   */
  public $m_discount_amount = '';

  /**
   * Amount of discount for client type.
   * Empty if this discount was not applied.
   *
   * @get result
   * @var string
   */
  public $m_discount_login_type_amount = '';

  /**
   * Not empty only for promotions with program type "membership".
   * Amount of regular payment.
   *
   * @get result
   * @var string
   */
  public $m_period_price = '';

  /**
   * Refunded amount.
   * <tt>0</tt> if were no refunds.
   *
   * @get result
   * @var string
   */
  public $m_refund = '';

  /**
   * Redemption code.
   * Not empty if purchase is bought via redemption code.
   *
   * @get result
   * @var string
   */
  public $s_code = '';

  /**
   * Name of staff who disabled usage of purchase item.
   * Empty if usage of purchase item is enabled.
   *
   * @get result
   * @var string
   */
  public $s_limit_actor = '';

  /**
   * Not empty for gift cards.
   * <tt>true</tt> if mail about purchase was sent (or will be sent); <tt>false</tt> otherwise.
   *
   * @get result
   * @var string
   */
  public $s_mail = '';

  /**
   * Not empty only for gift cards.
   * Message to gift receiver. Empty if email notification should not be sent.
   *
   * @get result
   * @var string
   */
  public $s_message = '';

  /**
   * Name of user who has paid for this purchase.
   *
   * @get result
   * @var string
   */
  public $s_payer = '';

  /**
   * This field is only added for promotions which must be converted to another promotion after expiration.
   * Title of promotion to which convent.
   *
   * @get result
   * @var string
   */
  public $s_promotion_convert = '';

  /**
   * Number of receipt.
   *
   * @get result
   * @var string
   */
  public $s_purchase = '';

  /**
   * Name of user who has paid for this purchase.
   *
   * @get result
   * @var string
   */
  public $s_recipient = '';

  /**
   * Not empty only for gift cards.
   * Gift sender.
   *
   * @get result
   * @var string
   */
  public $s_sender = '';

  /**
   * Title of purchase item.
   *
   * @get result
   * @var string
   */
  public $s_title = '';

  /**
   * String ID of purchase item.
   * May be used to change view of purchase item.
   *
   * @get result
   * @var string
   */
  public $sid_value = '';

  /**
   * ID of user who is owner of this purchase.
   *
   * @get result
   * @var string
   */
  public $uid_payer = '';

  /**
   * ID of user who is owner of this purchase.
   *
   * @get result
   * @var string
   */
  public $uid_recipient = '';
}

?>