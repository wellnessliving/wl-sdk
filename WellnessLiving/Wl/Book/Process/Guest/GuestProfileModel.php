<?php

namespace WellnessLiving\Wl\Book\Process\Guest;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Service\ServiceSid;

/**
 * Endpoint for guest account creation during "Book on behalf of guest" process.
 *
 * @method WlModelRequest get() Check if user exists.  Looks up a guest by email within the specified business and service context. Returns the user key if an existing member is found whose email, birthday (when required), and location eligibility all pass validation.
 * @method WlModelRequest post() Creates new user.  Creates a new guest profile (or reuses an existing non-member account) for the specified business and service, applying birthday and virtual-account rules, and returns the UID of the created or matched user.
 */
class GuestProfileModel extends WlModelAbstract
{
  /**
   * Guest's birthday in MySQL format. Empty if service not restricted by age.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dl_birthday = '';

  /**
   * The mode type used to determine the Lead Source for the created guest.
   * One of the {@link ModeSid} constants. Default is {@link ModeSid::API}.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * Type of the service to book.
   *
   * @get get
   * @post get
   * @var int
   * @see ServiceSid
   */
  public $id_service = 0;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of service to book.
   * Depending on {@link GuestProfileModel::$id_service} value:,
   * <ul>
   *     <li>{@link ServiceSid::CLASSES} - class key. </li>
   *     <li>{@link ServiceSid::APPOINTMENT} - service key.</li>
   *     <li>{@link ServiceSid::BOOKABLE_ASSET} - resource key.</li>
   * </ul>
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_id = '';

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Guest's first name.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_first_name = '';

  /**
   * Guest's last name.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_last_name = '';

  /**
   * Guest's email.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_mail = '';

  /**
   * UID of found or created user.
   *
   * @get result
   * @post result
   * @var string
   */
  public $uid = '';
}

?>