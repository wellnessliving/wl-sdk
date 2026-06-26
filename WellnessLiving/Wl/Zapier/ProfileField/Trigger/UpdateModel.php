<?php

namespace WellnessLiving\Wl\Zapier\ProfileField\Trigger;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for trigger when profile field are updated.
 *
 * @method WlModelRequest delete() Makes webhook unsubscribe action. {@inheritdoc}
 * @method WlModelRequest get() Returns sample data for trigger. {@inheritdoc}
 * @method WlModelRequest post() Makes webhook subscribe action. {@inheritdoc}
 */
class UpdateModel extends WlModelAbstract
{
  /**
   * List of custom fields information where key is `k_field` - {@link \RsFieldSql} and value is a string as:
   *  `s_value` - for custom text field,
   *  `s_title` - for radio and select custom fields,
   *  `Checked` or `Unchecked` - for checkbox custom field.
   *
   * @get result
   * @post post,result
   * @var array
   */
  public $a_custom_field = [];

  /**
   * Business key for which trigger/action is performed.
   *
   * @delete get
   * @get get
   * @patch get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Field key.
   *
   * @post post
   * @var string
   */
  public $k_field = '';

  /**
   * Identifier of the webhook in Zapier.
   *
   * @delete post
   * @post post
   * @var string
   */
  public $s_id = '';

  /**
   * Home address of the client.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_address = '';

  /**
   * Date of birth of the client.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_birth = '';

  /**
   * Mobile phone number.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_cell_phone = '';

  /**
   * Client type.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_client_type = '';

  /**
   * Gender name of the client.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_gender = '';

  /**
   * Home phone number.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_home_phone = '';

  /**
   * Name of the lead for this user.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_lead = '';

  /**
   * Client home location name.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_location = '';

  /**
   * Email of the client.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_mail = '';

  /**
   * First name of the client.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_name_first = '';

  /**
   * Last name of the client.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_name_last = '';

  /**
   * Name of a referrer of this user.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_referrer = '';

  /**
   * Client timezone name.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_timezone = '';

  /**
   * Value for the field.
   *
   * `null` in case when value is not passed.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $text_value = null;

  /**
   * Work phone number.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $text_work_phone = '';

  /**
   * UID of the user.
   *
   * @get result
   * @post post,result
   * @var string
   */
  public $uid = '';

  /**
   * Webhook URL.
   *
   * @delete post
   * @post post
   * @var string
   */
  public $url_webhook = '';
}

?>