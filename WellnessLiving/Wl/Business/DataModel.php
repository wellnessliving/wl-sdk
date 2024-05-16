<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Service\ServiceSid;
use WellnessLiving\Wl\WlRankTypeSid;
use WellnessLiving\Wl\WlRegionSid;

/**
 * Displays information for a specified business.
 */
class DataModel extends WlModelAbstract
{
  /**
   * A list of all business services and their availability data.
   * This is presented as an array, where keys are SIDs from {@link ServiceSid} and values are Boolean.
   * If `true`, at least one service is enabled in the business. Otherwise, this will be `false`.
   *
   * @get result
   * @var array
   */
  public $a_service_list;

  /**
   * The list of predefined tips in percentages.
   *
   * @get result
   * @var float[]
   */
  public $a_tip_predefine;

  /**
   * The maximum height of the business image (in pixels).
   *
   * @get get
   * @var int
   */
  public $i_logo_height = 100;

  /**
   * The maximum width of the business image (in pixels).
   *
   * @get get
   * @var int
   */
  public $i_logo_width = 220;

  /**
   * The business category ID of the business.
   *
   * @get result
   * @var int
   * @see BusinessCategorySid
   */
  public $id_category;

  /**
   * The currency ID of the given business (or the system currency ID if the business didn't pass).
   *
   * @get result
   * @var int
   * @see CurrencySid
   */
  public $id_currency;

  /**
   * The Locale ID, used to search geo items.
   *
   * @get result
   * @var int
   * @see LocaleSid
   */
  public $id_locale;

  /**
   * The rank type ID of the business.
   *
   * One of the {@link WlRankTypeSid} constants.
   *
   * This will be `null` if the business doesn't have a rank type.
   *
   * @get result
   * @var int|null
   */
  public $id_rank_type;

  /**
   * The region ID. This indicates the data center where the information about the business is stored.
   * One of the {@link WlRegionSid} constants.
   *
   * Requests made to different regions can lead to known issues such as responses indicating that the
   * business (or its elements) doesn't exist. This is because databases on different data centers are
   * independent. For example, performing a request to the US cluster for a list of classes for an AU
   * cluster business will return an empty list.
   *
   * @get result
   * @var int
   */
  public $id_region;

  /**
   * Determines whether surcharges to client payments are enabled in the business.
   *
   * @get result
   * @var bool
   */
  public $is_apply_surcharge = false;

  /**
   * `true` if business is a franchisor or franchisee.
   *
   * @get result
   * @var bool
   */
  public $is_franchise = false;

  /**
   * Determines whether the business has multiple locations (including inactive locations).
   *
   * @get result
   * @var bool
   */
  public $is_location_multiple;

  /**
   * `true` - clients of the business can select a custom time zone in their profile.
   *
   * `false` - the location or business time zone is used.
   *
   * @get result
   * @var bool
   */
  public $is_profile_timezone;

  /**
   * If `true`, clients can enter the progress log. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_progress_client;

  /**
   * If `true`, verification of the progress log by a staff member is required. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_progress_verify;

  /**
   * Determines whether quizzes are available in the business.
   *
   * @get result
   * @var bool
   */
  public $is_quiz_available = false;

  /**
   * If `true`, tips are available in the business. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_tip;

  /**
   * If `true`, the business has the "No tip" option displayed. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_tip_deny;

  /**
   * If `true`, the client must sign after selecting the tip. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_tip_sign;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The franchisor business key. This will be empty if this business is the franchisor or not in a franchise.
   *
   * @get result
   * @var string
   */
  public $k_business_franchisor = '';

  /**
   * The business key obtained by the security token {@link DataModel::$text_token}.
   * This can be used on the client side if authorization token should be used instead of the business key
   * (the business key isn't available).
   *
   * @get result
   * @var string
   */
  public $k_business_token;

  /**
   * The currency key of the given business, or the system currency if the business didn't pass.
   *
   * @get result
   * @var string
   * @deprecated Use {@link DataModel::$id_currency} instead.
   */
  public $k_currency;

  /**
   * The reply-to email address.
   *
   * @get result
   * @var string
   */
  public $s_reply_mail;

  /**
   * The reply-to business name.
   *
   * @get result
   * @var string
   */
  public $s_reply_name;

  /**
   * The business address.
   *
   * @get result
   * @var string
   */
  public $text_office_address;

  /**
   * The business title.
   *
   * @get result
   * @var string
   */
  public $text_title;

  /**
   * The authorization token.
   * This may be used instead of {@link DataModel::$k_business} to
   * identify a business.
   *
   * @get get
   * @var string
   */
  public $text_token = '';

  /**
   * The Facebook page.
   *
   * @get result
   * @var string
   */
  public $url_facebook;

  /**
   * The Google+ page.
   *
   * @get result
   * @var string
   */
  public $url_google;

  /**
   * The Instagram page.
   *
   * @get result
   * @var string
   */
  public $url_instagram = '';

  /**
   * The `LinkedIn` profile.
   *
   * @get result
   * @var string
   */
  public $url_linkedin = '';

  /**
   * The logo URL.
   *
   * @get result
   * @var string
   */
  public $url_logo;

  /**
   * The image stub (in cases where the business logo isn't loaded).
   *
   * @get result
   * @var string
   */
  public $url_logo_empty;

  /**
   * The Twitter page.
   *
   * @get result
   * @var string
   */
  public $url_twitter;

  /**
   * The business website.
   *
   * @get result
   * @var string
   */
  public $url_website;

  /**
   * The YouTube website.
   *
   * @get result
   * @var string
   */
  public $url_youtube = '';
}

?>