<?php

namespace WellnessLiving\Wl\Lead;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Field\WlFieldGeneralSid;
use WellnessLiving\Wl\Field\WlFieldTypeSid;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Gets information from the Lead Capture widget and saves a new user’s information.
 *
 * A user can be added to a second business by adding them first as a lead. If your business uses Enterprise Cloud,
 * there may be a restriction where clients can only be members in one enterprise location (travellers in all
 * other enterprise locations).
 *
 * This endpoint using captcha check.
 *  To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 *  For this API an action is {@link LeadCaptcha::CID}.
 */
class LeadModel extends WlModelAbstract
{
  /**
   * A list of fields containing the lead information.
   * The keys are the field keys and values are field values.
   *
   * If field key is `Address` field key, value may be an array or string.
   * Can be a string if only address field is used. Will be an array if city and postal code are used,
   * with the following keys:
   *
   * @post post
   * @var string[]
   */
<dl>
  <dt>string `text_address`</dt>
  <dd>Address.</dd>

  <dt>string `k_city`</dt>
  <dd>City key. 

  <dt>string `text_postal`</dt>
  <dd>Postal code.</dd>
</dl>
  public $a_field_data = [];

  /**
   * A list of profile fields in the business. Every element has the following keys:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>array[] `a_item`</dt>
  <dd>
    A list of possible options for an HTML select field. This value is only used if this field is an HTML select.
Every element has the following keys:
<dl>
  <dt>string <var>s_id</var></dt>
  <dd>The option ID.</dd>
  <dt>string <var>text_title</var></dt>
  <dd>The option title.</dd>
</dl> <dl>
      <dt>string `s_id`</dt>
      <dd>The option ID.</dd>

      <dt>string `text_title`</dt>
      <dd>The option title.</dd>
    </dl>
  </dd>

  <dt>int `id_field_general`</dt>
  <dd>
    The type of the general field. This is one of the {@link WlFieldGeneralSid}.
This value is only set if the field is one of the general fields.
  </dd>

  <dt>int `id_field_type`</dt>
  <dd>The field type. This is one of the {@link WlFieldTypeSid} constants.</dd>

  <dt>bool `is_require`</dt>
  <dd>If `true`, then the field is mandatory. If `false`, then the field isn't mandatory.</dd>

  <dt>string `k_field`</dt>
  <dd>The field key. 

  <dt>string `text_field`</dt>
  <dd>The field title.</dd>
</dl>
  public $a_field_list;

  /**
   * The skin configuration: 
   *
   * @get result
   * @var array
   */
<dl>
  <dt>array[] `a_style`</dt>
  <dd>
    List of compiled CSS style blocks. Each element:
<dl>
<dt>string `s_style`</dt>
<dd>Compiled CSS style block string.</dd>

<dt>string `s_value_name`</dt>
<dd>Name of the skin value this style block belongs to.</dd>
  </dl> <dl>
      <dt>string `s_style`</dt>
      <dd>Compiled CSS style block string.</dd>

      <dt>string `s_value_name`</dt>
      <dd>Name of the skin value this style block belongs to.</dd>
    </dl>
  </dd>

  <dt>array `background`</dt>
  <dd>
    Background styling for the widget container:
<dl>
<dt>string `class`</dt>
<dd>CSS class names to apply to the element.</dd>

<dt>string `css`</dt>
<dd>Inline CSS style string to apply to the element.</dd>
  </dl> <dl>
      <dt>string `class`</dt>
      <dd>CSS class names to apply to the element.</dd>

      <dt>string `css`</dt>
      <dd>Inline CSS style string to apply to the element.</dd>
    </dl>
  </dd>

  <dt>array `field-font`</dt>
  <dd>
    Font styling for form fields:
<dl>
<dt>string `class`</dt>
<dd>CSS class names to apply to the element.</dd>

<dt>string `css`</dt>
<dd>Inline CSS style string to apply to the element.</dd>
  </dl> <dl>
      <dt>string `class`</dt>
      <dd>CSS class names to apply to the element.</dd>

      <dt>string `css`</dt>
      <dd>Inline CSS style string to apply to the element.</dd>
    </dl>
  </dd>

  <dt>array `header-text`</dt>
  <dd>
    Header section settings:
<dl>
<dt>string `class`</dt>
<dd>CSS class names to apply to the element.</dd>

<dt>string `css`</dt>
<dd>Inline CSS style string to apply to the element.</dd>

<dt>string `text`</dt>
<dd>Header text content.</dd>
  </dl> <dl>
      <dt>string `class`</dt>
      <dd>CSS class names to apply to the element.</dd>

      <dt>string `css`</dt>
      <dd>Inline CSS style string to apply to the element.</dd>

      <dt>string `text`</dt>
      <dd>Header text content.</dd>
    </dl>
  </dd>

  <dt>array `info-show`</dt>
  <dd>
    Visibility settings for information elements:
<dl>
<dt>bool[] `a_require`</dt>
<dd>Map of required element names. Keys are element names, values are `true`.</dd>

<dt>bool[] `a_show`</dt>
<dd>Map of visible element names. Keys are element names, values are `true`.</dd>

<dt>bool `empty`</dt>
<dd>`true` if no elements are visible.</dd>
  </dl> <dl>
      <dt>bool[] `a_require`</dt>
      <dd>Map of required element names. Keys are element names, values are `true`.</dd>

      <dt>bool[] `a_show`</dt>
      <dd>Map of visible element names. Keys are element names, values are `true`.</dd>

      <dt>bool `empty`</dt>
      <dd>`true` if no elements are visible.</dd>
    </dl>
  </dd>

  <dt>array `submit-background`</dt>
  <dd>
    Background styling for the submit button:
<dl>
<dt>string `class`</dt>
<dd>CSS class names to apply to the element.</dd>

<dt>string `css`</dt>
<dd>Inline CSS style string to apply to the element.</dd>
  </dl> <dl>
      <dt>string `class`</dt>
      <dd>CSS class names to apply to the element.</dd>

      <dt>string `css`</dt>
      <dd>Inline CSS style string to apply to the element.</dd>
    </dl>
  </dd>

  <dt>array `submit-font`</dt>
  <dd>
    Font styling for the submit button:
<dl>
<dt>string `class`</dt>
<dd>CSS class names to apply to the element.</dd>

<dt>string `css`</dt>
<dd>Inline CSS style string to apply to the element.</dd>
  </dl> <dl>
      <dt>string `class`</dt>
      <dd>CSS class names to apply to the element.</dd>

      <dt>string `css`</dt>
      <dd>Inline CSS style string to apply to the element.</dd>
    </dl>
  </dd>

  <dt>array `submit-text`</dt>
  <dd>
    Text settings for the submit button:
<dl>
<dt>string `class`</dt>
<dd>CSS class names to apply to the element.</dd>

<dt>string `css`</dt>
<dd>Inline CSS style string to apply to the element.</dd>

<dt>string `text`</dt>
<dd>Submit button text content.</dd>
  </dl> <dl>
      <dt>string `class`</dt>
      <dd>CSS class names to apply to the element.</dd>

      <dt>string `css`</dt>
      <dd>Inline CSS style string to apply to the element.</dd>

      <dt>string `text`</dt>
      <dd>Submit button text content.</dd>
    </dl>
  </dd>
</dl>
  public $a_skin;

  /**
   * Whether it is possible to give free promotion when adding a user (only if free promotion is configured in the widget).
   * `true` or `null` if it is possible, `false` if not.
   * `null` used for backward compatibility.
   *
   * @get result
   * @post get
   * @var bool|null
   */
  public $can_use_free_purchase = null;

  /**
   * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
   *
   * @post get
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` if newly created lead should be automatically signed in, `false` otherwise.
   *
   * Lead will not be signed in if:
   * - email is used already for another existing user;
   * - different user is signed in already (can be changed with {@link LeadModel::$is_sing_in_force}).
   *
   * If lead is not signed in, then {@link LeadModel::$text_sign_in_error} will contain an error message.
   *
   * @post post
   * @var bool
   */
  public $is_sing_in = false;

  /**
   * `true` if newly created lead should be automatically signed in instead of the currently signed-in user,
   * `false` if currently singed-in user should not be signed out.
   * If lead is not signed in, then {@link LeadModel::$text_sign_in_error} will contain an error message.
   *
   * @post post
   * @var bool
   */
  public $is_sing_in_force = false;

  /**
   * The key of business to which the new user must be captured.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of the lead source.
   *
   * Must be `null` if <var>text_lead_source</var> is set.
   * If both parameters are empty, the {@link ModeSid::API} lead source will be used.
   *
   * @post post,result
   * @var string|null
   */
  public $k_lead_source = null;

  /**
   * The key of the widget skin. If left empty, then the default skin is used.
   * This will be the Lead Capture widget skin with "Use this widget for the Add Lead form" selected.
   * If your business doesn't have a skin selected, this endpoint will default to the system-wide default,
   * which may lack fields your business requires when adding a lead or a client.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_skin = '0';

  /**
   * The characters entered by the lead for the captcha test.
   * This isn't necessary if the GET method returned an empty {@link LeadModel::$url_captcha}.
   * This field isn't necessary if the GET method returned an empty {@link LeadModel::$url_captcha}.
   *
   * @post post
   * @var string
   */
  public $s_captcha = '';

  /**
   * Lead source title.
   *
   * A new lead source will be created if it does not exist.
   * Must be `null` if <var>k_lead_source</var> is set.
   * If both parameters are empty, the {@link ModeSid::API} lead source will be used.
   *
   * @post post
   * @var string|null
   */
  public $text_lead_source = null;

  /**
   * An error code if the lead is not signed in after creation.
   * This field is filled in the POST method.
   *
   * Possible values:
   * - `email-exists` - the email is already used by another lead;
   * - `different-user` - another user is signed in already.
   *
   * @post result
   * @var string
   */
  public $text_sign_in_error = '';

  /**
   * The key of the new user.
   *
   * Typing is not added because the variable is an integer.
   * Specifying typing may break third party integration.
   *
   * @post result
   * @var string
   */
  public $uid = null;

  /**
   * The URL to load the image with a captcha test.
   * This string is empty if it's not necessary to pass a captcha test.
   *
   * @get result
   * @var string
   */
  public $url_captcha;
}

?>