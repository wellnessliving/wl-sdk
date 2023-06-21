<?php

namespace WellnessLiving\Wl\Profile\PurchaseList;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets the details of a specified purchase.
 *
 * This endpoint may require different IDs to be specified for different types of purchases. The IDs required for a
 * specific item will be the same IDs returned from the {@link \WellnessLiving\Wl\Profile\PurchaseList\PurchaseListModel} endpoint.
 */
class PurchaseListElementModel extends WlModelAbstract
{
  /**
   * A list of components. This won't be empty if this purchase element is a package. Every element has keys:
   * <dl>
   *   <dt>
   *     string [<var>k_enrollment_book</var>]
   *   </dt>
   *   <dd>
   *     The booking enrollment key.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_product</var>]
   *   </dt>
   *   <dd>
   *     The key referencing the product a user purchased.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_promotion</var>]
   *   </dt>
   *   <dd>
   *     The key of a user's Purchase Option.
   *   </dd>
   *   <dt>
   *     string [<var>k_session_pass</var>]
   *   </dt>
   *   <dd>
   *     The key of a user's session pass.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_component;

  /**
   * An array containing information about the image of the purchased item. Every element has the following keys:
   * <dl>
   *   <dt>
   *     int <var>i_height</var>
   *   </dt>
   *   <dd>
   *     The height of the image.
   *   </dd>
   *   <dt>
   *     int <var>i_width</var>
   *   </dt>
   *   <dd>
   *     The width of the image.
   *   </dd>
   *   <dt>
   *     bool <var>is_empty</var>
   *   </dt>
   *   <dd>
   *     If `true`, then the purchased item doesn't have an image. If `false`, then the item has an image.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_logo;

  /**
   * This field is used only for promotions. It contains restrictions that will apply to bookings made with
   * this promotion. Every element has the following keys:
   * <dl>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *     The number of sessions that may be booked during this period.
   *   </dd>
   *   <dt>
   *     int <var>i_remain</var>
   *   </dt>
   *   <dd>
   *     The number of sessions that remain available.
   *   </dd>
   *   <dt>
   *     string <var>text_date</var>
   *   </dt>
   *   <dd>
   *     The name of the period type.
   *   </dd>
   * </dl>This will be an empty array for other purchased items.
   *
   * @get result
   * @var array[]
   */
  public $a_restrict;

  /**
   * The list of taxes paid for the purchased item. Every element has the following fields:
   * <dl>
   *   <dt>
   *     string <var>f_tax_discount</var>
   *   </dt>
   *   <dd>
   *     The amount of tax.
   *   </dd>
   *   <dt>
   *     string <var>s_tax</var>
   *   </dt>
   *   <dd>
   *     The name of the tax.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_tax;

  /**
   * This is `true` only if the purchased item is a promotion and the user can control the renewal of the promotion.
   * Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $can_renew;

  /**
   * The expiration date of the promotion. This is used only if the purchased item is a promotion.
   *
   * @get result
   * @var string
   */
  public $dl_end;

  /**
   * The local date of the purchase in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dl_purchase;

  /**
   * The local date in MySQL format when mail about purchasing was sent (or will be sent) to the user.
   * This won't be empty only for gift cards.
   *
   * @get result
   * @var string
   */
  public $dl_send;

  /**
   * The start date of the promotion. This is used only if the purchased item is a promotion.
   *
   * @get result
   * @var string
   */
  public $dl_start;

  /**
   * The end date of the promotion hold. This is used only for promotions on hold.
   * This value may be empty if the hold is eternal.
   *
   * @get result
   * @var string
   */
  public $dt_hold_end;

  /**
   * The start date of the promotion hold. This is used only for promotions on hold.
   *
   * @get result
   * @var string
   */
  public $dt_hold_start;

  /**
   * The purchase date of the purchased item. This is given in UTC in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dt_purchase;

  /**
   * The date in MySQL format when gift card was redeemed. This won't be empty only for gift cards.
   *
   * @get result
   * @var string
   */
  public $dt_redeem;

  /**
   * The percentage value of the discount for the client type. This will be empty if a discount wasn't applied.
   *
   * @get result
   * @var float
   */
  public $f_discount_login_type_percent;

  /**
   * The description of the purchased item.
   *
   * @get result
   * @var string
   */
  public $html_description;

  /**
   * The number of sessions remaining for a promotion. This value is used only for promotions. This value will be `0` if
   * the purchased item isn't a promotion or if there are no remaining sessions.
   *
   * @get result
   * @var int
   */
  public $i_book;

  /**
   * Displays the number of minutes of sessions that were booked by this promotion. This isn't `0` only for promotions.
   *
   * @get result
   * @var int
   */
  public $i_book_duration;

  /**
   * The number of purchased items bought at the time of purchase.
   * This will be `0` for purchase items obtained via a redemption code or as a result of an import.
   *
   * @get result
   * @var int
   */
  public $i_buy;

  /**
   * The percentage value of the discount given by a reward prize. This will be `0` if a discount wasn't applied.
   *
   * @get result
   * @var int
   */
  public $i_discount_count;

  /**
   * The duration of the promotion. The measurement unit is <var>id_duration</var>. This field is only added for promotions.
   *
   * @get result
   * @var int
   */
  public $i_duration;

  /**
   * Image Height in pixels. Please specify this value if you need purchase image to be returned in specific size.
   * In case this value is not specified returned image will have default purchase size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image Width in pixels. Please specify this value if you need purchase image to be returned in specific size.
   * In case this value is not specified returned image will have default purchase size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The number of bookings left with this promotion. This value is used only for non-sequential promotions.
   *
   * @get result
   * @var int
   */
  public $i_left;

  /**
   * The number of visits that can be made with this promotion. This value is used only for promotions.
   *
   * @get result
   * @var int
   */
  public $i_limit;

  /**
   * The interval duration of the regular payments. This value is used only for membership-type promotions.
   *
   * @get result
   * @var int
   */
  public $i_payment_period;

  /**
   * The number of remaining bookings for the promotion. This is used only for promotions.
   *
   * @get result
   * @var int
   */
  public $i_remain;

  /**
   * The number of minutes remaining for the promotion.
   * This is used only for promotions that work with a limited number of minutes.
   *
   * @get result
   * @var int
   */
  public $i_remain_duration;

  /**
   * Displays how many times promotion was updated. This isn't `0` only for promotions.
   *
   * @get result
   * @var int
   */
  public $i_renew;

  /**
   * The number of visits that were attended for the promotion. This is used only for promotions.
   *
   * @get result
   * @var int
   */
  public $i_use;

  /**
   * The number of minutes the user has already used with this purchase of this promotion. This isn't `0` only for promotions.
   *
   * @get result
   * @var int
   */
  public $i_use_duration;

  /**
   * The activation mode. One of the {@link \WellnessLiving\RsActivationSid} constants. This field is only added for promotions.
   *
   * @get result
   * @var int
   */
  public $id_activation;

  /**
   * The type of discount given via a reward prize. One of the {@link \WellnessLiving\WlCommissionTypeSid} constants. This will be empty
   * if this discount wasn't applied.
   *
   * @get result
   * @var int
   */
  public $id_discount_commission_type;

  /**
   * The type of duration for the promotion. This is used only for membership-type promotions. This determines
   * whether the promotion lasts indefinitely, has a fixed duration, or ends on a specific date. The measurement unit
   * for key <var>i_payment_period</var>. One of the {@link \WellnessLiving\WlDurationTypeSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_duration;

  /**
   * The ID of the promotion program. This is used only for promotions.
   * The measurement unit for key <var>i_payment_period</var>. The ID of promotion program type.
   * One of the {@link \WellnessLiving\WlProgramTypeSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_program_type;

  /**
   * The ID of the purchase item type. The measurement unit for key <var>i_payment_period</var>.
   * The ID of purchase item type. One of the {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item;

  /**
   * The ID of the sale category. One of the constants {@link \WellnessLiving\WlSaleSid}.
   *
   * @get result
   * @var int
   */
  public $id_sale;

  /**
   * If `true`, then the purchase item is active. If `false`, then the purchase item isn't active.
   *
   * @get result
   * @var bool
   */
  public $is_active;

  /**
   * If `true`, then the purchased item is a component of another purchase item, as is the case of a package.
   * If `false`, then the purchased item isn't a component of another purchase item.
   *
   * @get result
   * @var bool
   */
  public $is_component;

  /**
   * If `true`, then this promotion will be converted to a different promotion after it expires. If `false`, then the
   * promotion won't be converted to a different promotion after it expires. This can only be true for certain
   * promotions.
   *
   * @get result
   * @var bool
   */
  public $is_convert;

  /**
   * This is `true` only if the purchased item is a promotion that has expired. Otherwise, this will be `false`
   * in all other cases.
   *
   * @get result
   * @var bool
   */
  public $is_expire;

  /**
   * This is `true` only if the purchased item is a promotion and has been placed on hold.
   * Otherwise, this is `false` in all other cases.
   *
   * @get result
   * @var bool
   */
  public $is_hold;

  /**
   * If `true`, then the usage of this purchased item is disabled.
   * If `false`, then the usage of this purchased item is enabled.
   *
   * @get result
   * @var bool
   */
  public $is_limit;

  /**
   * If `true`, then the discount was applied for the member type.
   * If `false`, then the discount was applied for the pass holder type.
   * If `null`, then the discount was applied for the prospect type. This won't be `null` only if a discount based
   * on a client type was applied.
   *
   * @get result
   * @var bool|null
   */
  public $is_login_type_member;

  /**
   * If `true`, then the gift card email notification will be sent to the receiver. This is `true` only if the
   * purchased item is a gift card. Otherwise, this will be `false` in all other cases.
   *
   * @get result
   * @var bool
   */
  public $is_mail;

  /**
   * If `true`, then the gift card email notification has been sent. This can only be `true` if the purchased item
   * is a gift card. Otherwise, this will be `false` in all other cases.
   *
   * @get result
   * @var bool
   */
  public $is_past;

  /**
   * Not `false` only for promotions.
   *
   * @get result
   * @var bool
   */
  public $is_promotion;

  /**
   * This is `true` if the gift card has been redeemed.
   * This can only be `true` if the purchased item is a gift card. Otherwise, this will be `false` in all other cases.
   *
   * @get result
   * @var bool
   */
  public $is_redeem;

  /**
   * This is `true` if the promotion is auto-renewable. This can only be `true` if the purchased item is a promotion.
   * Otherwise, this will be `false` in all other cases.
   *
   * @get result
   * @var bool
   */
  public $is_renew;

  /**
   * This is `true` if the promotion has been transferred. This can only be true if the purchased item is a promotion.
   * This is `false` if the promotion hasn't been transferred or in all other cases.
   *
   * @get result
   * @var bool
   */
  public $is_transfer;

  /**
   * The ID of the redemption code used to obtain the item. This should be specified only for items obtained via
   * redemption code (not for ordinary purchases or for purchased promotions without purchases).
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_code = '0';

  /**
   * The key of the redemption code. This value will not be `0` if the purchased item is obtained via a redemption
   * code or if it's a component of a package obtained via a redemption code.
   *
   * @get result
   * @var string
   */
  public $k_code_result;

  /**
   * The key of the currency used to make the purchase.
   *
   * @get result
   * @var string
   */
  public $k_currency;

  /**
   * The key of an entirely booked event. This must be specified if the purchased item is a whole event
   * and part of a package.
   *
   * @get get
   * @var string
   */
  public $k_enrollment_book = '0';

  /**
   * The key of the item. This can correspond to one of many values depending on {@link \WellnessLiving\Wl\Profile\PurchaseList\PurchaseListElementModel::$id_sale}.
   *
   * @get result
   * @var string
   */
  public $k_id = '0';

  /**
   * The key of a purchased product. This must be specified if the purchased item is a product and part of a package.
   *
   * @get get
   * @var string
   */
  public $k_login_product = '0';

  /**
   * The key of the user's promotion. This should only be specified for promotions given without a purchase.
   * This isn't for ordinary purchases or for promotions obtained via redemption codes. This will be `null` if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_login_promotion = '0';

  /**
   * The key of the purchased promotion. This won't be `0` only for promotions.
   *
   * @get result
   * @var string
   */
  public $k_login_promotion_result;

  /**
   * The key of the purchased item. This should be specified only for ordinary purchases
   * and not for purchases obtained via redemption codes or as a result of an old import.
   *
   * @get get
   * @var string
   */
  public $k_purchase_item = '0';

  /**
   * The key of the whole purchase, including the given purchased item.
   *
   * @get result
   * @var string
   */
  public $k_purchase_result;

  /**
   * The ID of the makeup session used to attend an event.
   *
   * This must be specified if the purchase item is a component of a package and a whole event booking.
   * And only for items which aren't components of package.
   *
   * @get get
   * @var string
   */
  public $k_session_pass = '0';

  /**
   * The cost of the purchased item.
   *
   * @get result
   * @var string
   */
  public $m_cost_item;

  /**
   * The total cost of the purchase, including taxes and fees.
   *
   * @get result
   * @var string
   */
  public $m_cost_total;

  /**
   * The amount of the discount via prize. This will be empty if this discount wasn't applied.
   *
   * @get result
   * @var string
   */
  public $m_discount_amount;

  /**
   * The amount of the discount for the client type. This value will be empty if the discount wasn't applied.
   *
   * @get result
   * @var string
   */
  public $m_discount_login_type_amount;

  /**
   * The amount of the manual discount. This will be empty if this discount wasn't applied.
   *
   * @get result
   * @var string
   */
  public $m_discount_manual;

  /**
   * The amount to pay for each payment period. This is used only for promotions with the membership program type.
   *
   * @get result
   * @var string
   */
  public $m_period_price;

  /**
   * The source price of item.
   *
   * @get result
   * @var string
   */
  public $m_price;

  /**
   * The amount refunded. This will be `0` if there are no refunds.
   *
   * @get result
   * @var string
   */
  public $m_refund;

  /**
   * The redemption code. This value is used only if the purchase is bought via a redemption code.
   *
   * @get result
   * @var string
   */
  public $s_code;

  /**
   * The code to redeem the gift card. This isn't empty only for gift cards.
   *
   * This can be auto-generated or custom (entered manually by the staff member during purchase).
   * The max length is 20 characters, including numbers and letters.
   *
   * @get result
   * @var string
   */
  public $s_gift_code;

  /**
   * The name of gift recipient. This isn't empty only for gift cards.
   *
   * @get result
   * @var string
   */
  public $s_gift_recipient;

  /**
   * The name of the staff member who disabled the usage of the purchased item.
   * This will be empty if the purchased item is enabled.
   *
   * @get result
   * @var string
   */
  public $s_limit_actor;

  /**
   * The email address to which the gift card was sent. This is used only for gift cards.
   *
   * @get result
   * @var string
   */
  public $s_mail;

  /**
   * The test of the message sent to the gift card recipient. This is used only for gift cards.
   * This will be empty if an email notification shouldn't be sent.
   *
   * @get result
   * @var string
   */
  public $s_message;

  /**
   * The name of the user who paid for this purchase.
   *
   * @get result
   * @var string
   */
  public $s_payer;

  /**
   * The title of the converted promotion. This value is used only for promotions that must be converted to another
   * promotion after expiration.
   *
   * @get result
   * @var string
   */
  public $s_promotion_convert;

  /**
   * The purchase ID number as it appears on the receipt. This value will also include the leading 0s for the ID number.
   *
   * @get result
   * @var string
   */
  public $s_purchase;

  /**
   * The name of the user who paid for this purchase.
   *
   * @get result
   * @var string
   */
  public $s_recipient;

  /**
   * The name of the sender. This value is used only for gift cards.
   *
   * @get result
   * @var string
   */
  public $s_sender;

  /**
   * The name of the purchased item.
   *
   * @get result
   * @var string
   */
  public $s_title;

  /**
   * The string ID of the purchased item. This ID may be used to change the view of the purchased item.
   *
   * @get result
   * @var string
   */
  public $sid_value;

  /**
   * The key of the user who paid for this purchase.
   *
   * @get result
   * @var string
   */
  public $uid_payer;

  /**
   * The key of the user who paid for this purchase.
   *
   * @get result
   * @var string
   */
  public $uid_recipient;
}

?>