<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Apply;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint designed to pay for a visit with guest pass options attached to specific promotion.
 * If visit is paid already then old payment option will be revoked without penalties.
 *
 * @method WlModelRequest get() Returns a list of login promotions with available guest passes for a visit.  Searches for members who have active class memberships with guest pass balance applicable to the class and location of the given visit. Each result item represents one eligible login promotion, not one user: if a member has several qualifying memberships, each appears as a separate item.
 * @method WlModelRequest post() Applies the guest pass of the specified login promotion to the attendee's visit.  If the visit is already paid (with a regular session pass or an existing guest pass), the previous payment is unwound before the new guest pass is applied.
 */
class ApplyModel extends WlModelAbstract
{
  /**
 * A list of login promotions with available guest passes for the given visit.
 *
 * Each element is an array with the following keys:
 *
 * <dl>
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>Login promotion key. </dd>
 * 
 *   <dt>string `text_description`</dt>
 *   <dd>Remaining guest pass balance description for this login promotion.</dd>
 * 
 *   <dt>string `text_title`</dt>
 *   <dd>Name of the host member who owns this guest pass.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the host member who owns this guest pass. </dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_login_promotion = [];

  /**
 * Business key.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_business = '';

  /**
 * Login promotion key of the host member's class membership whose guest pass
 * balance will be used.
 *
 * @post post
 * @var string
 */
  public $k_login_promotion = '';

  /**
 * Visit key of the attendee to whom the guest pass is applied.
 *
 * @post post
 * @var string
 */
  public $k_visit = '';

  /**
 * Visit key of the attendee for whom the list of guest passes is requested.
 *
 * @get get
 * @var string
 */
  public $k_visit_search = '';

  /**
 * Text to search guest pass hosts by (for example, a member name).
 *
 * Empty string means no search.
 *
 * @get get
 * @var string
 */
  public $text_search = '';
}

?>