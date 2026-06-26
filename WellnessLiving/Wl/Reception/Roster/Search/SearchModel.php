<?php

namespace WellnessLiving\Wl\Reception\Roster\Search;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to retrieve users list for specific location.
 *
 * @method WlModelRequest get() Returns list of clients by search string.
 */
class SearchModel extends WlModelAbstract
{
  /**
   * List of user information. Each element is array with next structure:
   *
   * <dl>
   *   <dt>string `s_firstname`</dt>
   *   <dd>First name of a client.</dd>
   * 
   *   <dt>string `s_lastname`</dt>
   *   <dd>Last name of a client.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key.</dd>
   * 
   *   <dt>string `url_photo`</dt>
   *   <dd>Url link to a photo of a client.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_user;

  /**
   * Number of the request. Is required to ignore old requests, when new request was already done.
   *
   * @get get,result
   * @var int
   */
  public $i_request = 0;

  /**
   * ID of the location. Used to determinate business.
   *
   * @get get
   * @var int
   */
  public $k_location = 0;

  /**
   * String that will be used as search phrase.
   *
   * @get get
   * @var string
   */
  public $s_request = '';

  /**
   * Secret string to get access.
   * As this API can be used without backend we need to protect using thi API be secret code.
   * See {@link \Wl\Reception\Roster\Controller::secret()}
   *
   * @get get
   * @var string
   */
  public $s_secret = '';
}

?>