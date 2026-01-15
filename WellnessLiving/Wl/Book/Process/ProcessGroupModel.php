<?php

namespace WellnessLiving\Wl\Book\Process;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * API for group booking process.
 *
 * This API allows to book a class/event for multiple clients at once.
 */
class ProcessGroupModel extends WlModelAbstract
{
  /**
   * List of errors that occurred during booking.
   *
   * @post result
   * @var array[]
   */
  public $a_book_error = [];

  /**
   * List of clients to book.
   * Each value is an array with next keys:
   * <dl>
   *     <dt>
   *         array[] [`a_event_session`]
   *     </dt>
   *     <dd>
   *         List of event sessions to book. Required for only for event that allows to select sessions to book.
   *         Each element has next keys:
   *         <dl>
   *             <dt>string `dtu_date`</dt>
   *             <dd>Session date/time.</dd>
   *             <dt>string `k_class_period`</dt>
   *
   *         </dl>
   *     </dd>
   *     <dt>
   *         array [`a_purchase_item`]
   *     </dt>
   *     <dd>
   *         Purchase option information. Required if the service requires online payment. Elements have next keys:
   *         <dl>
   *             <dt>
   *                 array[] [`a_item`]
   *             </dt>
   *             <dd>
   *                 <dl>
   *                     <dt>
   *                          int [`i_count`]
   *                      </dt>
   *                      <dd>
   *                          Number of options to purchase. Specify only if you want to pay a class booking by Drop-In.
   *                      </dd>
   *                      <dt>
   *                          int [`id_purchase_item`]
   *                      </dt>
   *                      <dd>
   *                          Kind of option to purchase. One of {@link WlPurchaseItemSid} constants.
   *                          Specify only if you want to purchase a new option.
   *                      </dd>
   *                      <dt>
   *                          bool [`is_renew`]
   *                      </dt>
   *                      <dd>
   *                          `true` if you want to enable auto-renewal for new purchase option. `false` otherwise.
   *                          Specify only if you want to purchase a new option.
   *                      </dd>
   *                      <dt>
   *                          bool [`is_owner`]
   *                      </dt>
   *                      <dd>
   *                          `true` if client is owner of this purchase option.
   *                          This means that this purchase option will be purchased for this client, even if another client
   *                          can share a similar purchase option.
   *                      </dd>
   *                      <dt>
   *                          string [`k_id`]
   *                      </dt>
   *                      <dd>
   *                          Primary key of option to purchase.
   *                          Specify only if you want to purchase a new option.
   *                      </dd>
   *                      <dt>
   *                          string [`s_signature`]
   *                      </dt>
   *                      <dd>
   *                          Signature of the client in base64 format.
   *                          Specify only if you want to buy a purchase option that requires signature.
   *                      </dd>
   *                 </dl>
   *             </dd>
   *             <dt>
   *                 string [`k_login_prize`]
   *             </dt>
   *             <dd>
   *
   *                 Specify if you want to pay by user's prize.
   *             </dd>
   *             <dt>
   *                 string [`k_login_promotion`]
   *             </dt>
   *             <dd>
   *
   *                 Specify only if you want to pay by already purchased option.
   *             </dd>
   *             <dt>
   *                 string [`k_reward_prize`]
   *             </dt>
   *             <dd>
   *
   *                 Specify if you want to redeem a prize for payment.
   *             </dd>
   *             <dt>
   *                 string [`k_session_pass`]
   *             </dt>
   *             <dd>
   *                 Session pass to be used to book a session.
   *
   *             </dd>
   *         </dl>
   *     </dd>
   *     <dt>
   *         array [`a_quiz_response`]
   *     </dt>
   *     <dd>
   *         Answers for questions. Required if the service requires answers for questions.
   *
   *     </dd>
   *     <dt>
   *         array [`a_repeat`]
   *     </dt>
   *     <dd>
   *         Recurring booking configuration:
   *         <dl>
   *           <dt>int[] `a_day`</dt>
   *           <dd>
   *             The days of week when the session repeats. One of the {@link ADateWeekSid} constants.
   *             Should be passed for any type of repetition.
   *           </dd>
   *           <dt>
   *             string [`dt_from`]
   *           </dt>
   *           <dd>
   *             Date to start recurring booking.
   *             Expected for `id_repeat_
   *           </dd>
   *           <dt>
   *             string [`dt_to`]
   *           </dt>
   *           <dd>
   *             Date to complete recurring booking.
   *             Expected for `id_repeat_
   *           </dd>
   *           <dt>
   *              int [`i_count`]
   *            </dt>
   *            <dd>
   *              The number of occurrences after which the appointment's repeat cycle stops.
   *              Should be empty if the repeat cycle doesn't stop after a certain number of occurrences.
   *              Expected for `id_repeat_
   *            </dd>
   *           <dt>int `i_duration`</dt>
   *           <dd>Count of days\weeks\months between recurring bookings.</dd>
   *           <dt>
   *             int `id_duration`
   *           </dt>
   *           <dd>
   *             The measurement unit of `i_duration`. One of the {@link ADurationSid} constants.
   *             Available duration units are: {@link ADurationSid::DAY}, {@link ADurationSid::WEEK}, {@link ADurationSid::MONTH}.
   *           </dd>
   *           <dt>int `id_repeat_end`</dt>
   *           <dd>Possible ways to stop repeatable events.</dd>
   *         </dl>
   *         You can test this key only in a case of `1` client.
   *     </dd>
   *     <dt>
   *         array[] [`a_resource`]
   *     </dt>
   *     <dd>
   *         Asset information. Required if the service requires asset booking. Each element has next keys:
   *         <dl>
   *             <dt>int <var>i_index</var></dt>
   *             <dd>Order number of the asset.</dd>
   *             <dt>int <var>k_resource</var></dt>
   *
   *         </dl>
   *     </dd>
   *     <dt>string `uid`</dt>
   *     <dd>User's primary key in {@link \PassportLoginSql} table</dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_client = [];

  /**
   * @post result
   * @var string[]
   */
  public $a_login_activity_book;

  /**
   * A list of payment sources to pay with.
   *
   * Each element has next keys:
   * <dl>
   *   <dt>
   *     array [<var>a_pay_card</var>]
   *   </dt>
   *   <dd>
   *     The payment card information:
   *     <dl>
   *       <dt>
   *         array <var>a_pay_address</var>
   *       </dt>
   *       <dd>
   *         The payment address:
   *         <dl>
   *           <dt>boolean <var>is_new</var></dt>
   *           <dd>Set this value to <tt>1</tt> to add a new payment address or to <tt>0</tt> to use a saved payment address.</dd>
   *           <dt>string [<var>k_geo_country</var>]</dt>
   *           <dd>The key of the country used for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>k_geo_region</var>]</dt>
   *           <dd>The key of the region for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>k_pay_address</var>]</dt>
   *           <dd>The key of the saved payment address. Specify this to use a saved address.</dd>
   *           <dt>string [<var>s_city</var>]</dt>
   *           <dd>The city used for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_name</var>]</dt>
   *           <dd>The card name. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_phone</var>]</dt>
   *           <dd>The payment phone. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_postal</var>]</dt>
   *           <dd>The postal code for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_street1</var>]</dt>
   *           <dd>The payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_street2</var>]</dt>
   *           <dd>The optional payment address. Specify this to add a new address.</dd>
   *         </dl>
   *       </dd>
   *       <dt>
   *         int [<var>i_csc</var>]
   *       </dt>
   *       <dd>
   *         The credit card CSC. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_month</var>]
   *       </dt>
   *       <dd>
   *         The credit card expiration month. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_year</var>]
   *       </dt>
   *       <dd>
   *         The credit card expiration year. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         boolean <var>is_new</var>
   *       </dt>
   *       <dd>
   *         Specify <tt>1</tt> to add a new card, or <tt>0</tt> to use a saved card.
   *       </dd>
   *       <dt>
   *         string [<var>k_pay_bank</var>]
   *       </dt>
   *       <dd>
   *         The key of the credit card. Specify this to use saved card.
   *       </dd>
   *       <dt>
   *         string [<var>s_comment</var>]
   *       </dt>
   *       <dd>
   *         Optional comment(s). Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         string [<var>s_number</var>]
   *       </dt>
   *       <dd>
   *         The card number. Specify this to add a new card.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>f_amount</var>
   *   </dt>
   *   <dd>
   *     The amount of money to withdraw with this payment source.
   *   </dd>
   *   <dt>
   *     boolean [<var>is_hide</var>]
   *   </dt>
   *   <dt>
   *     bool [<var>is_save</var>=true]
   *   </dt>
   *   <dd>
   *     Whether payment method should be saved to user's account.
   *   </dd>
   *   <dd>
   *     Determines whether this payment method is hidden.
   *   </dd>
   *   <dt>
   *     boolean [<var>is_success</var>=<tt>false</tt>]
   *   </dt>
   *   <dd>
   *     Identifies whether this source was successfully charged.
   *   </dd>
   *   <dt>
   *     string [<var>m_surcharge</var>]
   *   </dt>
   *   <dd>
   *     The client-side calculated surcharge.
   *   </dd>
   *   <dt>
   *     string [<var>s_index</var>]
   *   </dt>
   *   <dd>
   *     The index of this form (optional).
   *   </dd>
   *   <dt>
   *     string <var>sid_pay_method</var>
   *   </dt>
   *   <dd>
   *     The payment method ID.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * @post result
   * @var string[]
   */
  public $a_visit;

  /**
   * Date/time to which session is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * The mode type. One of the {@link ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` if action is performed as a staff member; `false` otherwise.
   *
   * If `true` is sent, access to the business and to the client will be checked.
   * If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
   *
   * @get get
   * @post get
   *
   * @var bool
   */
  public $is_backend = false;

  /**
   * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag is set to `false`.
   *
   * Use this field with caution.
   * The final booking will not use this flag, and the check will still be performed.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_credit_card_check = true;

  /**
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * `null` if no purchase was made.
   *
   * @post result
   * @var string|null
   */
  public $k_login_activity_purchase;

  /**
   * `null` to not use installment template.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_installment_template = null;

  /**
   * The discount code to be applied to the purchase.
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';
}

?>