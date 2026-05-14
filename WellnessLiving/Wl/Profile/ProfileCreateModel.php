<?php

namespace WellnessLiving\Wl\Profile;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Login\Member\MemberIntentsSid;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Creates user profile with minimum fields.
 */
class ProfileCreateModel extends WlModelAbstract
{
  /**
   * List of intent identifiers. Each element is one of {@link MemberIntentsSid} constants.
   *
   * Available only for leads added by CAASI agent.
   *
   * @post post
   * @var int[]
   */
  public $a_intents = [];

  /**
   * Date of the user's birthday in MySQL format.
   *
   * @post post
   * @var string
   */
  public $dt_birthday = '';

  /**
   * Gender ID.
   *
   * `0` if not specified.
   *
   * @post post
   * @var int
   */
  public $id_gender = 0;

  /**
   * Lead source ID.
   *
   * One of the {@link ModeSid} constants.
   * `0` if not specified.
   *
   * @post post
   * @var int
   */
  public $id_lead_source = 0;

  /**
   * Vaccination status ID.
   *
   * `0` if not specified.
   *
   * @post post
   * @var int
   */
  public $id_vaccination_status = 0;

  /**
   * `true` means to add user to the legacy lead report.
   * `false` means to not add user to the legacy lead report.
   *
   * Note, that this setting does not impact new Lead Management report, which will always include new user.
   * Also lead capture marketing notification will never be triggered with this endpoint.
   *
   * @post post
   * @var bool
   */
  public $is_lead = false;

  /**
   * The key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the lead source.
   *
   * Empty string if not specified.
   *
   * @post post
   * @var string
   */
  public $k_lead_source = '';

  /**
   * The key of the home location.
   *
   * @post post
   * @var string
   */
  public $k_location_home = '';

  /**
   * The address of the user.
   *
   * @post post
   * @var string
   */
  public $text_address = '';

  /**
   * First name of the user.
   *
   * @post post
   * @var string
   */
  public $text_firstname = '';

  /**
   * Last name of the user.
   *
   * @post post
   * @var string
   */
  public $text_lastname = '';

  /**
   * Email of the user.
   * Required if {@link ProfileCreateModel::$text_phone} not provided.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * Phone of the user.
   * Required if {@link ProfileCreateModel::$text_mail} not provided.
   *
   * @post post
   * @var string
   */
  public $text_phone = '';

  /**
   * Home phone of the user.
   *
   * @post post
   * @var string
   */
  public $text_phone_home = '';

  /**
   * Work phone of the user.
   *
   * @post post
   * @var string
   */
  public $text_phone_work = '';

  /**
   * The key of the user.
   *
   * @post result
   * @var string
   */
  public $uid = '';

  /**
   * Referrer user key.
   *
   * Empty string if not specified.
   *
   * @post post
   * @var string
   */
  public $uid_referrer = '';
}

?>