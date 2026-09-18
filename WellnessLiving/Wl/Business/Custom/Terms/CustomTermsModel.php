<?php

namespace WellnessLiving\Wl\Business\Custom\Terms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves custom terms of the Custom Terms settings page (Setup -> Look and Feel -> Custom Terms).
 *
 * @method WlModelRequest post() Saves {@link \Wl\Business\Custom\Terms\CustomTermsApi::$a_term_option} as the custom terms of {@link \Wl\Business\Custom\Terms\CustomTermsApi::$k_business}.  Validates every posted term slot and its selected option, then delegates the write itself to {@link \Wl\Business\Custom\Terms\CustomTermsSettings::saveTerms()} - a slot whose new value equals the business's resolved default (the business-type default, or the system default if there is none) is reset instead of written, see {@link \Wl\Business\Custom\Terms\CustomTermsSettings::saveTerms()}. A term slot missing from {@link \Wl\Business\Custom\Terms\CustomTermsApi::$a_term_option} is left untouched; the client is expected to submit the current value of every slot on every save, not only the slots that changed.
 */
class CustomTermsModel extends WlModelAbstract
{
  /**
 * Current value of every term slot to save.
 *
 * Each value is one of {@link CustomTermOptionAbstractSid} child class constants
 *   keyed by {@link CustomTermSid} constants.
 *
 * @post post
 * @var int[]
 */
  public $a_term_option = [];

  /**
 * Business key.
 *
 * @post post
 * @var string
 */
  public $k_business = '';
}

?>