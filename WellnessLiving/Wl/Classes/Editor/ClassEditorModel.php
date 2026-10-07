<?php

namespace WellnessLiving\Wl\Classes\Editor;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Classes\Edit\EventTypeEnum;
use WellnessLiving\Wl\Classes\RequirePaySid;
use WellnessLiving\Wl\Resource\ResourceClientControlSid;
use WellnessLiving\Wl\Resource\ResourceUseSid;
use WellnessLiving\Wl\Schedule\Page\WlVisitNoteSid;
use WellnessLiving\Wl\Service\AgeRestrictionStatusSid;
use WellnessLiving\Wl\Service\BookableSid;
use WellnessLiving\Wl\Virtual\VirtualProviderSid;

/**
 * Data of the class setup page.
 *
 * Carries the fields of the class itself, section by section, together with the lists the pickers of the form are
 * filled from, the settings of the business the form depends on, the addresses of the pages the form links to and
 * the markup of the blocks that have no template on the client.
 *
 * @method WlModelRequest get() Returns everything the class setup form needs.  The form is rendered by the client, so this endpoint answers with data: the fields of the class section by section, the lists the Book Now Tab, the quick search tag and the store category pickers are filled from, the send rules of the client reminder, the currency sign, whether the Administration section may be shown, the addresses of the pages the form links to and the markup of the blocks that have no template on the client.
 */
class ClassEditorModel extends WlModelAbstract
{
  /**
 * Keys of the Book Now Tabs the class is shown in.
 *
 * Every element is a `text_key` of {@link ClassEditorModel::$a_class_tab_list}. Empty for a class that is shown
 * in no tab.
 *
 * @get result
 * @var string[]
 */
  public $a_class_tab = [];

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
 * Keys of the client types that may book the class.
 *
 * Only taken into account while {@link ClassEditorModel::$id_bookable} is
 * {@link BookableSid::CUSTOM}. Empty for a class every client type may book.
 *
 * @get result
 * @var string[]
 */
  public $a_login_type = [];

  /**
 * Keys of the client types staff may book into the class.
 *
 * Only taken into account while {@link ClassEditorModel::$is_bookable_staff} is `false`. Empty for a class staff
 * may book every client type into.
 *
 * @get result
 * @var string[]
 */
  public $a_login_type_staff = [];

  /**
 * Keys of the client groups that may book the class.
 *
 * Only taken into account while {@link ClassEditorModel::$id_bookable} is
 * {@link BookableSid::CUSTOM}. Empty for a class every client group may book.
 *
 * @get result
 * @var string[]
 */
  public $a_member_group = [];

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
 * Book-a-Spot asset categories the class requires. Every element is an array: 
 *
 * <dl>
 *   <dt>int `id_resource_control`</dt>
 *   <dd>
 *     Whether a client picks the asset of this category while booking. One of
 * {@link ResourceClientControlSid} constants.
 *   </dd>
 * 
 *   <dt>int `id_resource_use`</dt>
 *   <dd>
 *     Whether one asset of this category is taken by the whole class or one by every client. One of
 * {@link ResourceUseSid} constants.
 *   </dd>
 * 
 *   <dt>string `k_resource_type`</dt>
 *   <dd>Key of the category. </dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_resource_type = [];

  /**
 * Keys of the quick search tags of the class.
 *
 * Every element is a `k_search_tag` of {@link ClassEditorModel::$a_search_tag_list}. Empty for a class with no
 * tags.
 *
 * @get result
 * @var string[]
 */
  public $a_search_tag = [];

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
 * Keys of the store categories the event is listed under.
 *
 * Every element is a `k_shop_category` of {@link ClassEditorModel::$a_shop_category_list}. Empty for an event
 * that is listed under no category.
 *
 * @get result
 * @var string[]
 */
  public $a_shop_category = [];

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
 * Keys of the revenue categories the drop-in revenue of the class is tracked under.
 *
 * Empty for a class with no revenue category.
 *
 * @get result
 * @var string[]
 */
  public $a_tag = [];

  /**
 * Ticket types of a ticketed event, in the order they are offered. Every element is an array: 
 *
 * Empty for an event that is not ticketed, and for a ticketed event that has no types yet. The client offers an
 * empty row in either case.
 *
 * <dl>
 *   <dt>string `f_price`</dt>
 *   <dd>Price of one ticket of this type.</dd>
 * 
 *   <dt>bool `is_sold`</dt>
 *   <dd>`true` if at least one ticket of this type has been sold, `false` otherwise.</dd>
 * 
 *   <dt>string `k_ticket_option`</dt>
 *   <dd>Key of the type. </dd>
 * 
 *   <dt>string `text_title`</dt>
 *   <dd>Title of the type, for example `General admission`.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_ticket_option = [];

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
 * Last day of the early bird discount.
 *
 * Empty string if the event has no early bird discount.
 *
 * @get result
 * @var string
 */
  public $dl_early = '';

  /**
 * Deposit a client leaves while booking the event.
 *
 * A percent of the price of the event while {@link ClassEditorModel::$is_deposit_percent} is `true`, an amount of
 * money otherwise. `0.00` unless {@link ClassEditorModel::$id_pay_require} is
 * {@link RequirePaySid::DEPOSIT}. The field keeps the name the legacy form posts, which carries
 * both an amount of money and a percent.
 *
 * @get result
 * @var string
 */
  public $f_deposit = '0.00';

  /**
 * Early bird discount of the event.
 *
 * `0.00` if the event has no early bird discount. The field keeps the name the legacy form posts.
 *
 * @get result
 * @var string
 */
  public $f_early = '0.00';

  /**
 * Price of one session of the event.
 *
 * Only taken into account while {@link ClassEditorModel::$is_buy_single} is `true`. The field keeps the name the
 * legacy form posts.
 *
 * @get result
 * @var string
 */
  public $f_price = '0.00';

  /**
 * Price of the whole event.
 *
 * Only taken into account while {@link ClassEditorModel::$is_buy_total} is `true`. The field keeps the name the
 * legacy form posts.
 *
 * @get result
 * @var string
 */
  public $f_price_total = '0.00';

  /**
 * `true` if the event is hidden in the White Label Achieve Client App, `false` if it is shown there.
 *
 * @get result
 * @var bool
 */
  public $hide_application = false;

  /**
 * `true` if the price of a single session is hidden from a client who has an applicable Purchase Option,
 * `false` if it is shown to them.
 *
 * @get result
 * @var bool
 */
  public $hide_price = false;

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
 * Months above the whole years of the minimum age of a client of the class.
 *
 * `null` if the class has no minimum age.
 *
 * @get result
 * @var int|null
 */
  public $i_age_from_month = null;

  /**
 * Whole years of the minimum age of a client of the class.
 *
 * `null` if the class has no minimum age.
 *
 * @get result
 * @var int|null
 */
  public $i_age_from_year = null;

  /**
 * Months above the whole years of the maximum age of a client of the class.
 *
 * `null` if the class has no maximum age.
 *
 * @get result
 * @var int|null
 */
  public $i_age_to_month = null;

  /**
 * Whole years of the maximum age of a client of the class.
 *
 * `null` if the class has no maximum age.
 *
 * @get result
 * @var int|null
 */
  public $i_age_to_year = null;

  /**
 * Number of clients that may enroll into each instance of the event.
 *
 * @get result
 * @var int
 */
  public $i_capacity = 10;

  /**
 * Number of tickets that may be sold for each instance of a ticketed event.
 *
 * The same number as {@link ClassEditorModel::$i_capacity}, in a field of its own because a ticketed event asks
 * for it in a field the legacy form posts under this name.
 *
 * @get result
 * @var int
 */
  public $i_capacity_ticket = 10;

  /**
 * Maximum length of description.
 *
 * @get result
 * @var int
 */
  public $i_description_limit = 0;

  /**
 * Maximum number of make-up sessions a client may take.
 *
 * `0` stands for as many as the number of the sessions the client missed.
 *
 * @get result
 * @var int
 */
  public $i_makeup_cap = 0;

  /**
 * Number of tickets that may be bought in one order of a ticketed event.
 *
 * @get result
 * @var int
 */
  public $i_order_limit = 1;

  /**
 * Kind of the age restriction of the class.
 *
 * Only taken into account while {@link ClassEditorModel::$is_age_restrict} is `true`.
 *
 * @get result
 * @var int
 * @see AgeRestrictionStatusSid
 */
  public $id_age_restrict = 2;

  /**
 * Who may book the class online.
 *
 * The class keeps the client types and the groups whether online booking is open or not, so the form works this
 * out from them: a class that is closed to everyone is only told apart from a restricted one by them being
 * empty.
 *
 * @get result
 * @var int
 * @see BookableSid
 */
  public $id_bookable = 1;

  /**
 * Type of the event.
 *
 * @get result
 * @var int
 * @see EventTypeEnum
 */
  public $id_event_type = 0;

  /**
 * Kind of note staff may take for a client visit.
 *
 * @get result
 * @var int
 * @see WlVisitNoteSid
 */
  public $id_note = 0;

  /**
 * Way a client pays for the event.
 *
 * @get result
 * @var int
 * @see RequirePaySid
 */
  public $id_pay_require = 1;

  /**
 * Virtual meeting provider of the event. `null` for an in-person event.
 *
 * @get result
 * @var int|null
 * @see VirtualProviderSid
 */
  public $id_virtual_provider = null;

  /**
 * `true` if a buyer of a ticket must have an account, `false` if a name and an email address are enough.
 *
 * Ignored for an event that is not ticketed.
 *
 * @get result
 * @var bool
 */
  public $is_account_require = false;

  /**
 * `true` if the Administration section may be shown, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_admin = false;

  /**
 * `true` if the class is shown to a client who does not meet its age requirement, `false` if it is hidden from
 * them.
 *
 * @get result
 * @var bool
 */
  public $is_age_public = false;

  /**
 * `true` if the class has an age restriction, `false` otherwise.
 *
 * The legacy form keeps no flag of its own for this switch, so it is worked out from the age bounds, the same
 * as in the legacy form.
 *
 * @get result
 * @var bool
 */
  public $is_age_restrict = false;

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
 * `true` if staff may book any client type into the class, `false` if only the client types of
 * {@link ClassEditorModel::$a_login_type_staff}.
 *
 * @get result
 * @var bool
 */
  public $is_bookable_staff = true;

  /**
 * `true` if a client pays for the event with a Purchase Option only, `false` otherwise.
 *
 * One of the three ways a client pays for the event, which are mutually exclusive:
 * {@link ClassEditorModel::$is_buy_promotion}, {@link ClassEditorModel::$is_buy_single} and
 * {@link ClassEditorModel::$is_buy_total}.
 * expects.
 *
 * @get result
 * @var bool
 */
  public $is_buy_promotion = false;

  /**
 * `true` if a client buys one session of the event at a time, `false` otherwise.
 *
 * {@link ClassEditorModel::$f_price} is the price of a session. See
 * {@link ClassEditorModel::$is_buy_promotion} for the other ways a client pays for the event.
 *
 * @get result
 * @var bool
 */
  public $is_buy_single = false;

  /**
 * `true` if a client buys the whole event at once, `false` otherwise.
 *
 * {@link ClassEditorModel::$f_price_total} is the price of the event. Defaults to `true`, the same as the legacy
 * form offers for a new event. See {@link ClassEditorModel::$is_buy_promotion} for the other ways a client pays
 * for the event.
 *
 * @get result
 * @var bool
 */
  public $is_buy_total = true;

  /**
 * `true` if the clients of the class receive the default client notifications, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_client_notification = true;

  /**
 * `true` if the class has policies of its own, `false` if it follows the policies of the business.
 *
 * @get result
 * @var bool
 */
  public $is_config_business = false;

  /**
 * `true` if the clients of the class receive a confirmation notification of its own, `false` if they receive the
 * default one.
 *
 * @get result
 * @var bool
 */
  public $is_custom_confirmation = false;

  /**
 * `true` if the confirmation notification of the class is sent by email, `false` otherwise.
 *
 * Ignored while {@link ClassEditorModel::$is_custom_confirmation} is `false`.
 *
 * @get result
 * @var bool
 */
  public $is_custom_confirmation_mail = false;

  /**
 * `true` if the confirmation notification of the class is sent as a push message, `false` otherwise.
 *
 * Ignored while {@link ClassEditorModel::$is_custom_confirmation} is `false`.
 *
 * @get result
 * @var bool
 */
  public $is_custom_confirmation_push = false;

  /**
 * `true` if the confirmation notification of the class is sent by SMS, `false` otherwise.
 *
 * Ignored while {@link ClassEditorModel::$is_custom_confirmation} is `false`.
 *
 * @get result
 * @var bool
 */
  public $is_custom_confirmation_sms = false;

  /**
 * `true` if the clients of the class receive a reminder notification of its own, `false` if they receive the
 * default one.
 *
 * @get result
 * @var bool
 */
  public $is_custom_reminder = false;

  /**
 * `true` if the reminder notification of the class is sent by email, `false` otherwise.
 *
 * Ignored while {@link ClassEditorModel::$is_custom_reminder} is `false`.
 *
 * @get result
 * @var bool
 */
  public $is_custom_reminder_mail = false;

  /**
 * `true` if the reminder notification of the class is sent as a push message, `false` otherwise.
 *
 * Ignored while {@link ClassEditorModel::$is_custom_reminder} is `false`.
 *
 * @get result
 * @var bool
 */
  public $is_custom_reminder_push = false;

  /**
 * `true` if the reminder notification of the class is sent by SMS, `false` otherwise.
 *
 * Ignored while {@link ClassEditorModel::$is_custom_reminder} is `false`.
 *
 * @get result
 * @var bool
 */
  public $is_custom_reminder_sms = false;

  /**
 * `true` if {@link ClassEditorModel::$f_deposit} is a percent of the price of the event, `false` if it is an
 * amount of money.
 *
 * Copy of the `is_deposit_percent` column of the class.
 *
 * @get result
 * @var bool
 */
  public $is_deposit_percent = false;

  /**
 * `true` if a buyer may reserve a ticket and pay for it at the door, `false` if a ticket is paid for at once.
 *
 * Ignored for an event that is not ticketed.
 *
 * @get result
 * @var bool
 */
  public $is_door_pay = false;

  /**
 * `true` if the event has an early bird discount, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_early = false;

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
 * `true` if the event is offered on Wellhub, `false` otherwise.
 *
 * Ignored while {@link ClassEditorModel::$is_gym_pass_support} is `false`.
 *
 * @get result
 * @var bool
 */
  public $is_gym_pass = false;

  /**
 * `true` if the business may offer the event on Wellhub, `false` otherwise.
 *
 * The Wellhub block of the Online visibility section is only shown while this is `true`.
 *
 * @get result
 * @var bool
 */
  public $is_gym_pass_support = false;

  /**
 * `true` if the class is hidden from a client who may not book it, `false` if it is shown to them.
 *
 * @get result
 * @var bool
 */
  public $is_online_private = false;

  /**
 * `true` if a client must attend other services before booking this one, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_prerequisite = false;

  /**
 * `true` if staff may sell products from the attendance list of the class, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_quick_buy = false;

  /**
 * `true` if the number of the make-up sessions of the event is limited, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_replace = false;

  /**
 * `true` if the class requires Book-a-Spot assets, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_resource_type = false;

  /**
 * `true` if staff receive the default staff notifications of the class, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_staff_notification = true;

  /**
 * `true` if staff may book individual sessions of a block event, `false` otherwise.
 *
 * Ignored for a non-block or a ticketed event.
 *
 * @get result
 * @var bool
 */
  public $is_staff_session = false;

  /**
 * `true` if taxes are applied to the sales of the class, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_tax_enable = false;

  /**
 * `true` if a buyer of a ticket must agree to terms and conditions, `false` otherwise.
 *
 * Ignored for an event that is not ticketed.
 *
 * @get result
 * @var bool
 */
  public $is_terms = false;

  /**
 * `true` if a new client of the business must add a card at sign-up, `false` otherwise.
 *
 * One of the sign-up rules the form lists for a buyer of a ticket who has no account yet. A setting of the
 * business, not of the event.
 *
 * @get result
 * @var bool
 */
  public $is_ticket_card_require = false;

  /**
 * `true` if a new client of the business must sign a waiver, `false` otherwise.
 *
 * One of the sign-up rules the form lists for a buyer of a ticket who has no account yet. A setting of the
 * business, not of the event.
 *
 * @get result
 * @var bool
 */
  public $is_ticket_waiver_require = false;

  /**
 * Business key.
 *
 * @get get
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
 * @var string
 */
  public $k_class = '';

  /**
 * Key of the revenue category the drop-in revenue of the class is tracked under first of all.
 *
 * Empty string for a class with no revenue category. Always one of {@link ClassEditorModel::$a_tag}.
 *
 * @get result
 * @var string
 */
  public $k_tag_primary = '';

  /**
 * Revenue the business earns per client per session of an event offered on Wellhub.
 *
 * Ignored while {@link ClassEditorModel::$is_gym_pass} is `false`.
 *
 * @get result
 * @var string
 */
  public $m_revenue_gym_pass = '0.00';

  /**
 * Color of the event on the schedule in hex format.
 *
 * @get result
 * @var string
 */
  public $s_color_background = '';

  /**
 * Description of the event.
 *
 * @get result
 * @var string
 */
  public $s_description = '';

  /**
 * Special instructions of the event.
 *
 * @get result
 * @var string
 */
  public $s_special = '';

  /**
 * Title of the event.
 *
 * @get result
 * @var string
 */
  public $s_title = '';

  /**
 * `true` if the special instructions may be shown publicly, `false` if only to a client who booked the event.
 *
 * @get result
 * @var bool
 */
  public $show_special_instructions = true;

  /**
 * Currency sign of the business.
 *
 * @get result
 * @var string
 */
  public $text_currency = '';

  /**
 * Last day of the early bird discount as the calendar of the form shows it.
 *
 * Empty string if the event has no early bird discount. {@link ClassEditorModel::$dl_early} carries the same day
 * in the format the form posts.
 *
 * @get result
 * @var string
 */
  public $text_early = '';

  /**
 * Terms and conditions a buyer of a ticket must agree to.
 *
 * Empty string for an event that is not ticketed, and for a ticketed event with no terms.
 *
 * @get result
 * @var string
 */
  public $xml_terms = '';
}

?>