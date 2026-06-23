<?php

namespace WellnessLiving\Wl\Login\Agree;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves the user's agreement to the online waiver.
 *
 * @method WlModelRequest get() Returns text of business liability release if business has liability release and if user did not agree to this liability release.  Accepts the business key and the user key, validates both, and returns the rendered HTML of the liability release contract if one is configured and the user has not yet agreed to it. If the user has already agreed, the response will have an empty `html_contract` field.
 * @method WlModelRequest post() Saves the user's agreement to the online waiver.  Accepts the user's base64-encoded signature image and an optional electronic-signature consent flag, validates both, records the agreement date and signature in the database, and sends a waiver confirmation notification.
 */
class AgreeModel extends WlModelAbstract
{
  /**
   * Formatted text of business liability release. Not empty if the business has a liability release and if the user did not agree to this liability release.
   *
   * @get result
   * @var string
   */
  public $html_contract = '';

  /**
   * <tt>false</tt> if the user has not agreed to use Electronic Signatures,
   * <tt>true</tt> if the user has agreed to use Electronic Signatures,
   * <tt>null</tt> otherwise.
   *
   * @post post
   * @var bool|null
   */
  public $is_agree = null;

  /**
   * The key of business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The base64-encoded user's signature image from the signature pad as a PNG file.
   *
   * @post post
   * @var string
   */
  public $s_signature = '';

  /**
   * The user's key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>