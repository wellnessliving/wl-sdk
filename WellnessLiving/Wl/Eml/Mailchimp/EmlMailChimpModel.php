<?php

namespace WellnessLiving\Wl\Eml\Mailchimp;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for Mailchimp webhooks. Starts work when user state changed by administrator or as user on Mailchimp side.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post() Outside api. Mailchimp calls this method.
 */
class EmlMailChimpModel extends WlModelAbstract
{
  /**
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * System data of Mailchimp. Can be different for each type. But in our system used only matched data.
   *
   * @field data
   * @post post
   * @var \Wl\Eml\Mailchimp\PostQueryData
   */
  public $o_data;

  /**
   * List ID.
   *
   * @get get
   * @post get
   * @var string
   */
  public $s_list_id = '';

  /**
   * Encrypted data.
   *
   * @get get
   * @post get
   * @var string
   */
  public $s_token;

  /**
   * Type of fired event.
   * One of (subscribe, unsubscribe, profile, upemail, cleaned, campaign).
   *
   * @field type
   * @post post
   * @var string
   */
  public $s_type;
}

?>