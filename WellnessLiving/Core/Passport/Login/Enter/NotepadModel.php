<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

use WellnessLiving\Wl\WlRegionSid;

/**
 * An endpoint that retrieves the notepad value from the server that is used to sign someone in to the SDK.
 *
 * @link http://en.wikipedia.org/wiki/Cryptographic_nonce
 */
class NotepadModel extends \WellnessLiving\Custom\Core\Passport\Login\Enter\NotepadModel
{
  /**
     * ID of the datacenter which is a preferred datacenter for the user specified in
     * {@link NotepadModel::$s_login}.
     *
     * One of {@link WlRegionSid} constants.
     *
     * If ID of the datacenter returned in this property differs from the current datacenter, this means that this
     * API request was forwarded to the datacenter returned here, and the notepad was created there.
     * So that {@link EnterModel} must always go to the datacenter specified in this property.
     *
     * `null` if datacenter preference was not evaluated, or it is not known.
     * In this case, the notepad is created in datacenter where the API request was initially sent.
     *
     * @get result
     * @var int|null
     */
  public $id_region = null;

  /**
     * The hash type.
     *
     * @get result
     * @var string
     */
  public $s_hash = 'sha3';

  /**
     * User login.
     *
     * If specified, additional information about user may be returned such as datacenter of the user.
     *
     * This value is only considered when {@link AmazonRegionSid::currentId()} is not empty,
     *
     * In this case, regional cookie may be set, and the request may be forwarded internally to a different datacenter.
     *
     * `null` if additional information is not needed.
     *
     * @get get
     * @var string|null
     */
  public $s_login = null;

  /**
     * The notepad value, which is used to hash the user's password.
     *
     *
     * @get result
     * @var string
     */
  public $s_notepad;

  /**
     * The session type to store the notepad in.
     *
     * This will be an empty string for a temporary session. Otherwise, you can use `system` for a system session.
     *
     * @get get
     * @var string
     */
  public $s_type = '';
}

?>