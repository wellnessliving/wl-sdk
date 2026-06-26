<?php

namespace WellnessLiving\Core\Passport\Login\Register;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns information about fields for user's registration.
 *
 * @method WlModelRequest get() Loads information about profile fields.
 */
class RegisterFieldModel extends WlModelAbstract
{
  /**
   * Information about profile fields:
   *
   * `null` until loaded.
   *
   * <dl>
   *   <dt>string `text_name_first`</dt>
   *   <dd>Title of first name field.</dd>
   * 
   *   <dt>string `text_name_last`</dt>
   *   <dd>Title of last name field.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_profile_field = null;

  /**
   * The application ID.
   *
   * @get get
   * @var string
   */
  public $s_application = '';
}

?>