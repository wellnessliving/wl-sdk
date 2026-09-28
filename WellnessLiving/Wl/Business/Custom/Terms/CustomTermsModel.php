<?php

namespace WellnessLiving\Wl\Business\Custom\Terms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves custom terms of the Custom Terms settings page.
 *
 * @method WlModelRequest post() Saves {@link \Wl\Business\Custom\Terms\CustomTermsApi::$a_term_option} as the custom terms of {@link \Wl\Business\Custom\Terms\CustomTermsApi::$k_business}.  <i>Validates every posted term slot and its selected option, then delegates to write itself to {@link \Wl\Business\Custom\Terms\CustomTermsSettings::saveTerms()} - a slot whose new value equals the business's resolved default (the business-type default, or the system default if there is none) is reset instead of written, see {@link \Wl\Business\Custom\Terms\CustomTermsSettings::saveTerms()}. A term slot missing from {@link \Wl\Business\Custom\Terms\CustomTermsApi::$a_term_option} is left untouched; the client is expected to submit the current value of every slot on every save, not only the slots that changed.</i>
 */
class CustomTermsModel extends WlModelAbstract
{
  /**
 * Current value of every term slot to save. Has the following structure:
 *
 * <dl>
 *   <dt>int `id_term`</dt>
 *   <dd>Term ID. One of {@link CustomTermSid} constants.</dd>
 * 
 *   <dt>int `id_term_option`</dt>
 *   <dd>
 *     Selected custom term. Depends on `id_term`.
 *  
 *   </dd>
 * </dl>
 * @post post
 * @var array[]
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