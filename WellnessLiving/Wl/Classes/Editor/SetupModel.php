<?php

namespace WellnessLiving\Wl\Classes\Editor;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Data of the class setup page that the client cannot work out itself.
 *
 * Carries the lists the pickers of the form are filled from, the settings of the business the form depends on, the
 * addresses of the pages the form links to and the markup of the blocks that have no template on the client.
 *
 * @method WlModelRequest get() Returns everything the class setup form needs besides the class itself.  The form is rendered by the client, so this endpoint answers with data: the lists the Book Now Tab, the quick search tag and the store category pickers are filled from, the business policies the Business policies section starts with, the send rules of the client reminder, the currency sign, whether the Administration section may be shown, the addresses of the pages the form links to and the markup of the blocks that have no template on the client.
 */
class SetupModel extends WlModelAbstract
{
  /**
 * Book Now Tabs the class may be shown in. Every element is an array: 
 *
 * <dl>
 *   <dt>bool `is_selected`</dt>
 *   <dd>`true` if the class is shown in this tab, `false` otherwise.</dd>
 * 
 *   <dt>string `s_key`</dt>
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
  public $a_class_tab = [];

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
  public $a_search_tag = [];

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
  public $a_shop_category = [];

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
 * `true` if the Administration section may be shown, `false` otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_admin = false;

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
 * Currency sign of the business.
 *
 * @get result
 * @var string
 */
  public $text_currency = '';
}

?>