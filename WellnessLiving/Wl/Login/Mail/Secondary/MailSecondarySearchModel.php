<?php

namespace WellnessLiving\Wl\Login\Mail\Secondary;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;

/**
 * Endpoint to search secondary recipients within the business.
 *
 * @method WlModelRequest get() Searches for secondary recipients within the business by the specified query.
 */
class MailSecondarySearchModel extends WlModelAbstract
{
  /**
   * Result of the search.
   *
   * <dl>
   *   <dt>int|null `id_relation`</dt>
   *   <dd>
   *     Relation ID if users are relatives, one of {@link WlFamilyRelationSid} constants, `null` if users are not relatives.
   *   </dd>
   * 
   *   <dt>string `text_name_first`</dt>
   *   <dd>First name of the client.</dd>
   * 
   *   <dt>string `text_name_last`</dt>
   *   <dd>Last name of the client.</dd>
   * 
   *   <dt>string `text_mail`</dt>
   *   <dd>Email of the client.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>Key of the client.</dd>
   * 
   *   <dt>string `url_profile`</dt>
   *   <dd>URL of the client's profile page.</dd>
   * </dl>
   * @get result
   */
  public $a_result = [];

  /**
   * Business key within which the search should be performed.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Search query.
   * Search is performed by email, first name and last name.
   * If not specified recent clients and relatives will be returned without filtering.
   *
   * @get get
   * @var string
   */
  public $text_search = '';

  /**
   * Key of the user on behalf of whom the search is performed.
   * This user will be excluded from the search results.
   *
   * @get get
   * @var string
   */
  public $uid_behalf = '';
}

?>