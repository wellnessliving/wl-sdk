<?php

namespace WellnessLiving\Wl\Book\Process\Guest;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Service\ServiceSid;

/**
 * Endpoint for guest account creation during "Book on behalf of guest" process.
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
   * Type of the service to book. One of the {@link ServiceSid} constants.
   *
   * @get get
   * @post get
   * @var int
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
   * Key of service to book. Depending on {@link GuestProfileModel::$id_service} value, it can be primary key in
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_id = '';

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