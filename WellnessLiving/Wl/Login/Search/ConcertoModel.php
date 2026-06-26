<?php

namespace WellnessLiving\Wl\Login\Search;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point for business Concerto to search a user by mail or phone.
 *
 * @method WlModelRequest get() Finds a user by their email or phone within the specified business.  Accepts exactly one of `text_mail` or `text_phone`, validates the value, and returns the user key if a matching active member of the business is found. Returns an error if the user is not found or if multiple users share the given phone number.
 */
class ConcertoModel extends WlModelAbstract
{
  /**
   * Business to search user in.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Email to search.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * Phone to search.
   *
   * @get get
   * @var string
   */
  public $text_phone = '';

  /**
   * User's primary key.
   *
   * @get result
   * @var string
   */
  public $uid;
}

?>