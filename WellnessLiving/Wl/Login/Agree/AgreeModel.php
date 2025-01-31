<?php

namespace WellnessLiving\Wl\Login\Agree;

use WellnessLiving\WlModelAbstract;

/**
 * Saves the user's agreement to the online waiver.
 */
class AgreeModel extends WlModelAbstract
{
  /**
   * Formatted text of business liability release. Not empty if business has liability release and if user did not agree to this liability release.
   *
   * @get result
   * @var string
   */
  public $html_contract = '';

  /**
   * <tt>false</tt> if user has not agreed to use Electronic Signatures,
   * <tt>true</tt> if user has agreed to use Electronic Signatures,
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