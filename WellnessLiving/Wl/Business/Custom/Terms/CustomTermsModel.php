<?php

namespace WellnessLiving\Wl\Business\Custom\Terms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Reads and saves custom terms of the Custom Terms settings page.
 *
 * @method WlModelRequest get() Returns the current value of every term slot of {@link \Wl\Business\Custom\Terms\CustomTermsApi::$k_business}.  No access check - the terms a business picked (e.g. "Session" instead of "Class") are not sensitive, and public-facing pages (the booking widget, for example) need them to render their own wording for a client who is not signed in.
 * @method WlModelRequest post() Saves {@link \Wl\Business\Custom\Terms\CustomTermsApi::$a_term_option} as the custom terms of {@link \Wl\Business\Custom\Terms\CustomTermsApi::$k_business}.  Validates every posted term slot and its selected option, then writes.
 */
class CustomTermsModel extends WlModelAbstract
{
  /**
 * Current value of every term slot. Returned by {@link \Wl\Business\Custom\Terms\CustomTermsApi::get()}, posted to
 *
 * <dl>
 *   <dt>int `id_term`</dt>
 *   <dd>Term. One of {@link CustomTermSid} constants.</dd>
 * 
 *   <dt>int|null `id_term_option`</dt>
 *   <dd>
 *     Selected custom term option. Sid class depends on {@link \Wl\Business\Custom\Terms\CustomTermEntity::$id_term}
 * (e.g. for {@link CustomTermSid::CLIENT}, this is one of {@link ClientTermOptionSid} constants).
 * 
 * `null` if the slot has no customization - the business-type default, or the system default
 * if the business type has none either, applies.
 *   </dd>
 * </dl>
 * @get result
 * @post post
 * @var array[]
 */
  public $a_term_option = [];

  /**
 * Business key.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_business = '';
}

?>