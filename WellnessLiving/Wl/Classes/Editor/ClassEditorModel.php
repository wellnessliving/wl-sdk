<?php

namespace WellnessLiving\Wl\Classes\Editor;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Classes\Edit\EarlyAmountEnum;
use WellnessLiving\Wl\Classes\Edit\EarlyPeriodEnum;
use WellnessLiving\Wl\Classes\Edit\EventTypeEnum;
use WellnessLiving\Wl\Classes\RequirePaySid;
use WellnessLiving\Wl\Service\BookableSid;

/**
 * Data of the class setup page.
 *
 * Carries the settings of the class as one entity, {@link ClassEditorModel::$a_class}, together with the lists the
 * pickers of the form are filled from, the settings of the business the form depends on, the addresses of the pages the
 * form links to and the markup of the blocks that have no template on the client. The same entity is posted back to
 * save the class.
 *
 * Only an event reaches this page for now, so a few fields and checks are about the type of an event. Everything else
 * is a setting of a class, because an event is a class of its own kind.
 *
 * @method WlModelRequest get() Returns everything the class setup form needs.  The form is rendered by the client, so this endpoint answers with data: the settings of the class, the lists the Book Now Tab, the quick search tag and the store category pickers are filled from, the send rules of the client reminder, the currency sign, whether the Administration section may be shown, the addresses of the pages the form links to and the markup of the blocks that have no template on the client.
 * @method WlModelRequest post() Saves the class.  Creates the class while {@link \Wl\Classes\Editor\ClassEditorApi::$k_class} is empty, and changes the class otherwise. The settings come in {@link \Wl\Classes\Editor\ClassEditorApi::$a_class}, which has the same fields the load answers with. The key of the class that has been written is answered with in {@link \Wl\Classes\Editor\ClassEditorApi::$k_class_save}. An error of a field is reported with the name of the field on the form, one error for every field that failed.
 */
class ClassEditorModel extends WlModelAbstract
{
  /**
   * Settings of the class the form edits.
   *
   * Filled for a saved class, and with the values a new class starts with while a new class is created. The same
   * settings are accepted back to save the class.
   *
   * <dl>
   *   <dt>int `i_capacity`</dt>
   *   <dd>
   *     Number of clients that may book each session of the class.
   * 
   * Also, the number of tickets that may be sold for each session of a ticketed event.
   *   </dd>
   * 
   *   <dt>int `id_event_type`</dt>
   *   <dd>Type of the event.
   * 
   * Only an event has a type of its own, so a class always keeps the default.</dd>
   * 
   *   <dt>int `id_note`</dt>
   *   <dd>Kind of note staff may take for a client visit.
   * 
   * `0` stands for the notes being switched off.</dd>
   * 
   *   <dt>int|null `id_virtual_provider`</dt>
   *   <dd>Virtual meeting provider of the class. `null` for an in-person class.</dd>
   * 
   *   <dt>bool `is_config_business`</dt>
   *   <dd>
   *     `true` if the class has policies of its own, `false` if it follows the policies of the business.
   *
   *   </dd>
   * 
   *   <dt>array `o_access`</dt>
   *   <dd>
   *     Settings that tell who may book the class.
   *     <dl>
   *       <dt>string[] `a_login_type`</dt>
   *       <dd>
   *         Keys of the client types that may book the class.
   * 
   * Only taken into account while {@link \Wl\Classes\Editor\Entity\ClassAccessEntity::$id_bookable} is {@link BookableSid::CUSTOM}. Empty for
   * a class every client type may book.
   *       </dd>
   * 
   *       <dt>string[] `a_login_type_staff`</dt>
   *       <dd>
   *         Keys of the client types staff may book into the class.
   * 
   * Empty for a class staff
   * may book every client type into.
   *       </dd>
   * 
   *       <dt>string[] `a_member_group`</dt>
   *       <dd>
   *         Keys of the client groups that may book the class.
   * 
   * Only taken into account while {@link \Wl\Classes\Editor\Entity\ClassAccessEntity::$id_bookable} is {@link BookableSid::CUSTOM}. Empty for
   * a class every client group may book.
   *       </dd>
   * 
   *       <dt>int|null `i_age_from_month`</dt>
   *       <dd>
   *         Months above the whole years of the minimum age of a client of the class.
   * 
   * `null` if the class has no minimum age.
   *       </dd>
   * 
   *       <dt>int|null `i_age_from_year`</dt>
   *       <dd>Whole years of the minimum age of a client of the class.
   * 
   * `null` if the class has no minimum age.</dd>
   * 
   *       <dt>int|null `i_age_to_month`</dt>
   *       <dd>
   *         Months above the whole years of the maximum age of a client of the class.
   * 
   * `null` if the class has no maximum age.
   *       </dd>
   * 
   *       <dt>int|null `i_age_to_year`</dt>
   *       <dd>Whole years of the maximum age of a client of the class.
   * 
   * `null` if the class has no maximum age.</dd>
   * 
   *       <dt>int `id_age_restrict`</dt>
   *       <dd>
   *         Kind of the age restriction of the class.
   *
   *       </dd>
   * 
   *       <dt>int `id_bookable`</dt>
   *       <dd>Who may book the class online.</dd>
   * 
   *       <dt>bool `is_age_public`</dt>
   *       <dd>
   *         `true` if the class is shown to a client who does not meet its age requirement, `false` if it is hidden from
   * them.
   *       </dd>
   * 
   *       <dt>bool `is_age_restrict`</dt>
   *       <dd>`true` if the class has an age restriction, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_birthday_update_require`</dt>
   *       <dd>
   *         `true` if staff agreed to make the birthdate a required field of the client profile, `false` otherwise.
   * 
   * Only the client sets it. It is needed while an age restriction is switched on for a business whose clients are
   * not required to give the birthdate yet.
   *       </dd>
   * 
   *       <dt>bool `is_bookable_staff`</dt>
   *       <dd>
   *         `true` if staff may book any client type into the class, `false` if only the client types of
   *
   *       </dd>
   * 
   *       <dt>bool `is_online_private`</dt>
   *       <dd>`true` if the class is hidden from a client who may not book it, `false` if it is shown to them.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `o_attendance`</dt>
   *   <dd>
   *     Settings of the way the class is attended.
   *     <dl>
   *       <dt>string[] `a_replace`</dt>
   *       <dd>
   *         Classes and events a client may transfer a missed session of this one to as a make-up.
   * 
   * Only taken into account while {@link \Wl\Classes\Editor\Entity\ClassAttendanceEntity::$is_replace} is `true`, and then may not be
   * empty.
   *       </dd>
   * 
   *       <dt>array[] `a_resource_type`</dt>
   *       <dd>
   *         Book-a-Spot asset categories the class requires.
   *
   *         <dl>
   *           <dt>int `id_resource_control`</dt>
   *           <dd>Whether a client picks the asset of this category while booking.</dd>
   * 
   *           <dt>int `id_resource_use`</dt>
   *           <dd>Whether one asset of this category is taken by the whole class or one by every client.</dd>
   * 
   *           <dt>string `k_resource_type`</dt>
   *           <dd>Key of the category.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_makeup_cap`</dt>
   *       <dd>
   *         Maximum number of make-up sessions a client may take.
   * 
   * `0` stands for as many as the number of the sessions the client missed. Only taken into account while
   *
   *       </dd>
   * 
   *       <dt>bool `is_prerequisite`</dt>
   *       <dd>`true` if a client must attend other services before booking this one, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_quick_buy`</dt>
   *       <dd>`true` if staff may sell products from the attendance list of the class, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_replace`</dt>
   *       <dd>
   *         `true` if a client may transfer a missed session of this class to an eligible make-up class or event, `false`
   * otherwise.
   *       </dd>
   * 
   *       <dt>bool `is_resource_type`</dt>
   *       <dd>`true` if the class requires Book-a-Spot assets, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_staff_session`</dt>
   *       <dd>
   *         `true` if staff may book individual sessions of a block event, `false` otherwise.
   * 
   * Ignored for a class, and for a non-block or a ticketed event.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `o_discovery`</dt>
   *   <dd>
   *     Settings that tell where the class is listed.
   *     <dl>
   *       <dt>string[] `a_class_tab`</dt>
   *       <dd>
   *         Keys of the Book Now Tabs the class is shown in.
   * 
   * Every element is a `text_key` of the tab: the ID of the tab object and the key of the tab joined with a hyphen.
   * The key of a system tab is `0`. Empty for a class that is shown in no tab.
   *       </dd>
   * 
   *       <dt>string[] `a_search_tag`</dt>
   *       <dd>Keys of the quick search tags of the class.
   * 
   * Empty for a class with no tags.</dd>
   * 
   *       <dt>string[] `a_shop_category`</dt>
   *       <dd>
   *         Keys of the store categories the class is listed under.
   * 
   * Empty for a class that is listed under no category.
   *       </dd>
   * 
   *       <dt>string[] `a_tag`</dt>
   *       <dd>
   *         Keys of the revenue categories the drop-in revenue of the class is tracked under.
   * 
   * Empty for a class with no revenue category.
   *       </dd>
   * 
   *       <dt>bool `hide_application`</dt>
   *       <dd>
   *         `true` if the class is hidden in the White Label Achieve Client App, `false` if it is shown there.
   * 
   * Only an administrator may change it. A value posted by another staff member is ignored.
   *       </dd>
   * 
   *       <dt>bool `is_gym_pass`</dt>
   *       <dd>`true` if the class is offered on Wellhub, `false` otherwise.</dd>
   * 
   *       <dt>string `k_tag_primary`</dt>
   *       <dd>
   *         Key of the revenue category the drop-in revenue of the class is tracked under first of all.
   * 
   * Empty string for a class with no revenue category.
   *       </dd>
   * 
   *       <dt>string `m_revenue_gym_pass`</dt>
   *       <dd>
   *         Revenue the business earns per client per session of a class offered on Wellhub.
   *
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `o_notification`</dt>
   *   <dd>
   *     Notification settings of the class.
   *     <dl>
   *       <dt>bool `is_client_notification`</dt>
   *       <dd>`true` if the clients of the class receive the default client notifications, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_custom_confirmation`</dt>
   *       <dd>
   *         `true` if the clients of the class receive a confirmation notification of its own, `false` if they receive the
   * default one.
   *       </dd>
   * 
   *       <dt>bool `is_custom_confirmation_mail`</dt>
   *       <dd>
   *         `true` if the confirmation notification of the class is sent by email, `false` otherwise.
   *
   *       </dd>
   * 
   *       <dt>bool `is_custom_confirmation_push`</dt>
   *       <dd>
   *         `true` if the confirmation notification of the class is sent as a push message, `false` otherwise.
   *
   *       </dd>
   * 
   *       <dt>bool `is_custom_confirmation_sms`</dt>
   *       <dd>
   *         `true` if the confirmation notification of the class is sent by SMS, `false` otherwise.
   *
   *       </dd>
   * 
   *       <dt>bool `is_custom_reminder`</dt>
   *       <dd>
   *         `true` if the clients of the class receive a reminder notification of its own, `false` if they receive the
   * default one.
   *       </dd>
   * 
   *       <dt>bool `is_custom_reminder_mail`</dt>
   *       <dd>
   *         `true` if the reminder notification of the class is sent by email, `false` otherwise.
   *
   *       </dd>
   * 
   *       <dt>bool `is_custom_reminder_push`</dt>
   *       <dd>
   *         `true` if the reminder notification of the class is sent as a push message, `false` otherwise.
   *
   *       </dd>
   * 
   *       <dt>bool `is_custom_reminder_sms`</dt>
   *       <dd>
   *         `true` if the reminder notification of the class is sent by SMS, `false` otherwise.
   *
   *       </dd>
   * 
   *       <dt>bool `is_staff_notification`</dt>
   *       <dd>`true` if staff receive the default staff notifications of the class, `false` otherwise.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `o_price`</dt>
   *   <dd>
   *     Pricing settings of the class.
   *     <dl>
   *       <dt>string `dl_early`</dt>
   *       <dd>Last day of the early bird discount.
   * 
   * Empty string if the class has no early bird discount.</dd>
   * 
   *       <dt>string `f_deposit`</dt>
   *       <dd>
   *         Deposit a client leaves while booking the class.
   * 
   * A percent of the price of the class while {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$is_deposit_percent} is `true`, an amount of
   * money otherwise. Only taken into account while {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$id_pay_require} is
   * {@link RequirePaySid::DEPOSIT}.
   *       </dd>
   * 
   *       <dt>string `f_early`</dt>
   *       <dd>
   *         Early bird amount of the class.
   * 
   * The price that replaces the price of the class while {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$id_early_amount} is
   * {@link EarlyAmountEnum::PRICE}, and the discount from the price of the class otherwise: a percent of the price
   *
   *       </dd>
   * 
   *       <dt>string `f_price`</dt>
   *       <dd>
   *         Price of one session of the class.
   *
   *       </dd>
   * 
   *       <dt>string `f_price_total`</dt>
   *       <dd>
   *         Price of the whole class.
   *
   *       </dd>
   * 
   *       <dt>bool `hide_price`</dt>
   *       <dd>
   *         `true` if the price of a single session is hidden from a client who has an applicable Purchase Option,
   * `false` if it is shown to them.
   *       </dd>
   * 
   *       <dt>int `i_early_duration`</dt>
   *       <dd>
   *         How long before the class starts the early bird period ends.
   * 
   * Only taken into account while {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$id_early_period} is {@link EarlyPeriodEnum::BEFORE}.
   *       </dd>
   * 
   *       <dt>int `id_early_amount`</dt>
   *       <dd>
   *
   * 
   * Only {@link EarlyAmountEnum::PRICE} and {@link EarlyAmountEnum::DISCOUNT} are picked on the form: a discount of
   * a percent is a discount with {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$is_early_percent} set, the same as the legacy form posts
   * it.
   *       </dd>
   * 
   *       <dt>int `id_early_duration`</dt>
   *       <dd>
   *
   * 
   * Only taken into account while {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$id_early_period} is {@link EarlyPeriodEnum::BEFORE}.
   *       </dd>
   * 
   *       <dt>int `id_early_period`</dt>
   *       <dd>Way the end of the early bird period is specified.</dd>
   * 
   *       <dt>int `id_enroll_time`</dt>
   *       <dd>
   *         Whether a client may enroll into a block event that is already in progress, and how much they pay for it.
   * 
   * Only taken into account while the event is a block event: {@link EventTypeEnum::BLOCK}.
   *       </dd>
   * 
   *       <dt>int `id_pay_require`</dt>
   *       <dd>Way a client pays for the class.</dd>
   * 
   *       <dt>bool `is_buy_promotion`</dt>
   *       <dd>
   *         `true` if a client pays for the class with a Purchase Option only, `false` otherwise.
   * 
   * One of the three ways a client pays for the class, which are mutually exclusive:
   * {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$is_buy_promotion}, {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$is_buy_single} and
   *
   *       </dd>
   * 
   *       <dt>bool `is_buy_single`</dt>
   *       <dd>
   *         `true` if a client buys one session of the class at a time, `false` otherwise.
   *
   *       </dd>
   * 
   *       <dt>bool `is_buy_total`</dt>
   *       <dd>
   *         `true` if a client buys the whole class at once, `false` otherwise.
   * 
   * Defaults to `true`, the same as the legacy form offers for a new event. See
   *
   *       </dd>
   * 
   *       <dt>bool `is_deposit_percent`</dt>
   *       <dd>
   *         `true` if {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$f_deposit} is a percent of the price of the class, `false` if it is an
   * amount of money.
   *       </dd>
   * 
   *       <dt>bool `is_early`</dt>
   *       <dd>`true` if the class has an early bird discount, `false` otherwise.</dd>
   * 
   *       <dt>bool `is_early_ended`</dt>
   *       <dd>
   *
   * 
   * Only taken into account while {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$id_early_period} is {@link EarlyPeriodEnum::DATE}. A
   * date that has ended does not block saving and does not clear {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$is_early}: only the
   * server sets this field, and a value posted by the client is ignored.
   *       </dd>
   * 
   *       <dt>bool `is_early_percent`</dt>
   *       <dd>
   *         `true` if {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$f_early} is a percent of the price of the class, `false` if it is an amount
   * of money.
   * 
   * Only taken into account while {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$id_early_amount} is {@link EarlyAmountEnum::DISCOUNT}:
   * a price that replaces the price of the class is always an amount of money.
   *       </dd>
   * 
   *       <dt>bool `is_tax_enable`</dt>
   *       <dd>`true` if taxes are applied to the sales of the class, `false` otherwise.</dd>
   * 
   *       <dt>string `text_early`</dt>
   *       <dd>
   *         Last day of the early bird discount as the calendar of the form shows it.
   * 
   * Empty string if the class has no early bird discount. {@link \Wl\Classes\Editor\Entity\ClassPriceEntity::$dl_early} carries the same day
   * in the format the form posts, and is the one the save reads: only the server sets this field, and a value
   * posted by the client is ignored.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `o_ticket`</dt>
   *   <dd>
   *     Settings a ticketed event adds to the pricing settings.
   * 
   * Only an event may be ticketed, so every field of this object is ignored for a class.
   *     <dl>
   *       <dt>array[] `a_ticket_option`</dt>
   *       <dd>
   *         Ticket types of a ticketed event, in the order they are offered.
   * 
   * Empty for an event that is not ticketed, and for a ticketed event that has no types yet.
   *         <dl>
   *           <dt>string `f_price`</dt>
   *           <dd>Price of one ticket of this type.</dd>
   * 
   *           <dt>bool `is_sold`</dt>
   *           <dd>
   *             `true` if at least one ticket of this type has been sold, `false` otherwise.
   * 
   * Only the server sets it. A value posted by the client is ignored.
   *           </dd>
   * 
   *           <dt>string `k_ticket_option`</dt>
   *           <dd>Key of the type.
   * 
   * Empty string for a type that has just been added and is not saved yet.</dd>
   * 
   *           <dt>string `text_title`</dt>
   *           <dd>Title of the type, for example `General admission`.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_order_limit`</dt>
   *       <dd>Number of tickets that may be bought in one order.</dd>
   * 
   *       <dt>bool `is_account_require`</dt>
   *       <dd>`true` if a buyer of a ticket must have an account, `false` if a name and an email address are enough.</dd>
   * 
   *       <dt>bool `is_terms`</dt>
   *       <dd>`true` if a buyer of a ticket must agree to terms and conditions, `false` otherwise.</dd>
   * 
   *       <dt>string `xml_terms`</dt>
   *       <dd>
   *         Terms and conditions a buyer of a ticket must agree to.
   *
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `s_color_background`</dt>
   *   <dd>Color of the class on the schedule in hex format.
   * 
   * Empty string while the class has no color of its own.</dd>
   * 
   *   <dt>string `s_description`</dt>
   *   <dd>Description of the class.</dd>
   * 
   *   <dt>string `s_special`</dt>
   *   <dd>Special instructions of the class.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Title of the class.</dd>
   * 
   *   <dt>bool `show_special_instructions`</dt>
   *   <dd>`true` if the special instructions may be shown publicly, `false` if only to a client who booked the class.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array
   */
  public $a_class = [];

  /**
   * Book Now Tabs the class may be shown in. Every element is an array: 
   *
   * <dl>
   *   <dt>string `text_key`</dt>
   *   <dd>
   *     Key of the tab: the ID of the tab object and the key of the tab joined with a hyphen. The key of a system
   * tab is `0`.
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the tab.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_class_tab_list = [];

  /**
   * Send rules of the client reminder. Keys are: 
   *
   * <dl>
   *   <dt>array[] `a_config`</dt>
   *   <dd>
   *     Times the reminder is sent at, the earliest one first. Every element is an array:
   *     <dl>
   *       <dt>int `i_before`</dt>
   *       <dd>Number of the units of time the reminder is sent before the session.</dd>
   * 
   *       <dt>int `id_duration_delay`</dt>
   *       <dd>Unit of time the reminder is sent before the session. One of {@link ADurationSid} constants.</dd>
   * 
   *       <dt>string `text_time`</dt>
   *       <dd>Title of the unit of time.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_login_type`</dt>
   *   <dd>Number of the client types the reminder is sent to.</dd>
   * 
   *   <dt>int `i_login_type_all`</dt>
   *   <dd>Number of the client types of the business.</dd>
   * 
   *   <dt>int `i_member_group`</dt>
   *   <dd>Number of the client groups the reminder is sent to.</dd>
   * 
   *   <dt>int `i_member_group_all`</dt>
   *   <dd>Number of the client groups of the business.</dd>
   * 
   *   <dt>bool `is_login_type`</dt>
   *   <dd>`true` if the reminder is sent to certain client types only, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_login_type_all`</dt>
   *   <dd>`true` if every client type of the business is selected, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_member_group`</dt>
   *   <dd>`true` if the reminder is sent to certain client groups only, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_member_group_all`</dt>
   *   <dd>`true` if every client group of the business is selected, `false` otherwise.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_reminder_info = [];

  /**
   * Classes and events of the business that a client may use a make-up session on, grouped by service.
   *
   * Every element is an array: 
   *
   * <dl>
   *   <dt>array[] `a_list`</dt>
   *   <dd>
   *     Classes or events of the group. Every element is an array:
   *     <dl>
   *       <dt>string `k_id`</dt>
   *       <dd>Key of the class or event. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of the class or event.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_level`</dt>
   *   <dd>Level of the group. Always `1`, there is only one level of groups.</dd>
   * 
   *   <dt>string `text_group_key`</dt>
   *   <dd>Key of the group.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the group.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_replace_available = [];

  /**
   * Quick search tags of the category of the business. Every element is an array: 
   *
   * <dl>
   *   <dt>string `k_search_tag`</dt>
   *   <dd>Key of the tag. </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the tag.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_search_tag_list = [];

  /**
   * Store categories of the business. Every element is an array: 
   *
   * <dl>
   *   <dt>string `k_shop_category`</dt>
   *   <dd>Key of the category. </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the category.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_shop_category_list = [];

  /**
   * Addresses of the pages the form links to: 
   *
   * <dl>
   *   <dt>string `url_category_manage`</dt>
   *   <dd>List of store categories.</dd>
   * 
   *   <dt>string `url_notification_client`</dt>
   *   <dd>Client notifications.</dd>
   * 
   *   <dt>string `url_notification_confirmation`</dt>
   *   <dd>Client confirmation notification of a class.</dd>
   * 
   *   <dt>string `url_notification_reminder`</dt>
   *   <dd>Client reminder notification of a class.</dd>
   * 
   *   <dt>string `url_notification_staff`</dt>
   *   <dd>Staff notifications.</dd>
   * 
   *   <dt>string `url_policy_manage`</dt>
   *   <dd>Default business policies.</dd>
   * 
   *   <dt>string `url_product_manage`</dt>
   *   <dd>List of products.</dd>
   * 
   *   <dt>string `url_resource_manage`</dt>
   *   <dd>List of Book-a-Spot assets.</dd>
   * 
   *   <dt>string `url_ticket_card`</dt>
   *   <dd>Store settings that require a card at sign-up.</dd>
   * 
   *   <dt>string `url_ticket_waiver`</dt>
   *   <dd>Online waiver settings.</dd>
   * </dl>
   * @get result
   * @var string[]
   */
  public $a_url = [];

  /**
   * Markup of the Business policies block of the form.
   *
   * The block is the form of the policy rules of the business. There is no template of this form on the client, so
   * the block is rendered here and the client only moves the markup into the section it belongs to.
   *
   * @get result
   * @var string
   */
  public $html_policy = '';

  /**
   * Markup of the Prerequisites block of the form.
   *
   * The block is a picker of the services of the business. There is no template of this picker on the client, so
   * the block is rendered here and the client only moves the markup into the section it belongs to.
   *
   * @get result
   * @var string
   */
  public $html_prerequisite = '';

  /**
   * Markup of the Purchase Options block of the form.
   *
   * The block is a picker of the Purchase Options of the business, followed by the list of the picked ones. There
   * is no template of either of them on the client, so the block is rendered here and the client only moves the
   * markup into the section it belongs to.
   *
   * @get result
   * @var string
   */
  public $html_promotion = '';

  /**
   * Markup of the Quick Buy block of the form.
   *
   * The block is a picker of the products of the business. There is no template of this picker on the client, so
   * the block is rendered here and the client only moves the markup into the section it belongs to.
   *
   * @get result
   * @var string
   */
  public $html_quick_buy = '';

  /**
   * Markup of the Taxes block of the form.
   *
   * The block is a selector of the taxes of the business. There is no template of this select on the client, so the
   * block is rendered here and the client only moves the markup into the section it belongs to.
   *
   * @get result
   * @var string
   */
  public $html_tax = '';

  /**
   * Maximum length of the description of a class that is not virtual.
   *
   * @get result
   * @var int
   */
  public $i_description_limit = 0;

  /**
   * Maximum length of the description of a virtual class.
   *
   * @get result
   * @var int
   */
  public $i_description_limit_virtual = 0;

  /**
   * `true` if the Administration section may be shown, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_admin = false;

  /**
   * `true` if the birthdate is a required field of the client profile of the business, `false` otherwise.
   *
   * An age restriction can only be kept to when the birthdate is known, so the form asks staff to make the field
   * required while the restriction is switched on for a business that does not require it yet.
   *
   * @get result
   * @var bool
   */
  public $is_birthday_require = false;

  /**
   * `true` if the sign of the currency of the business is written before the amount, `false` if it is written after
   * it.
   *
   * A setting of the currency, not of the business: the dollar sign leads the amount, while the Swedish krona
   * follows it. Every money field of the form puts the sign on this side.
   *
   * @get result
   * @var bool
   */
  public $is_currency_before = true;

  /**
   * `true` if the event may no longer be turned into a ticketed one, or back from it, `false` otherwise.
   *
   * A client who booked or bought locks the move to and from a ticketed event. The lock stays once a purchase has
   * been made, even after it is refunded or voided, so the flag reports whether the event ever had an enrollment
   * rather than whether it has one now. Block and non-block stay interchangeable either way.
   *
   * @get result
   * @var bool
   */
  public $is_event_type_lock = false;

  /**
   * `true` if the business may use the FitLIVE virtual provider, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_fitlive = false;

  /**
   * `true` if the business may offer the class on Wellhub, `false` otherwise.
   *
   * The Wellhub block of the Online visibility section is only shown while this is `true`.
   *
   * @get result
   * @var bool
   */
  public $is_gym_pass_support = false;

  /**
   * `true` if a new client of the business must add a card at sign-up, `false` otherwise.
   *
   * One of the sign-up rules the form lists for a buyer of a ticket who has no account yet. A setting of the
   * business, not of the class.
   *
   * @get result
   * @var bool
   */
  public $is_ticket_card_require = false;

  /**
   * `true` if a new client of the business must sign a waiver, `false` otherwise.
   *
   * One of the sign-up rules the form lists for a buyer of a ticket who has no account yet. A setting of the
   * business, not of the class.
   *
   * @get result
   * @var bool
   */
  public $is_ticket_waiver_require = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Class key.
   *
   * `0` while a new class is created, so the key of the model of the client has a value. The key is only checked
   * when it points at a class.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class = '';

  /**
   * Key of the class the save wrote.
   *
   * The key of {@link ClassEditorModel::$k_class} while a saved class is changed, and the key of the class that has
   * just been created otherwise. Empty string until the save has run.
   *
   * @post result
   * @var string
   */
  public $k_class_save = '';

  /**
   * Currency sign of the business.
   *
   * @get result
   * @var string
   */
  public $text_currency = '';
}

?>