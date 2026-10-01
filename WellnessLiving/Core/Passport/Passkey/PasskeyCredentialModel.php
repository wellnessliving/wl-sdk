<?php

namespace WellnessLiving\Core\Passport\Passkey;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages the signed-in staff member's own passkey credentials, for the account-settings UI.
 *
 * @method WlModelRequest delete() Revokes one of the signed-in user's passkey credentials.  Marks the credential as revoked rather than deleting the row. <i>Its immutable identity data remains available for audit purposes.</i> A credential owned by another user can not be revoked.
 * @method WlModelRequest get() Lists the user's registered passkey credentials.  Includes revoked credentials.
 */
class PasskeyCredentialModel extends WlModelAbstract
{
  /**
 * List of the signed-in user's registered passkey credentials.
 *
 * <dl>
 *   <dt>string `dtu_create`</dt>
 *   <dd>Date and time when this credential was registered.</dd>
 * 
 *   <dt>string|null `dtu_last_use`</dt>
 *   <dd>Date and time when this credential was last used to sign in, or `null` if never used.</dd>
 * 
 *   <dt>int `id_device_type`</dt>
 *   <dd>One of {@link PasskeyDeviceTypeEnum} values.</dd>
 * 
 *   <dt>int `id_status`</dt>
 *   <dd>One of {@link PasskeyCredentialStatusEnum} values.</dd>
 * 
 *   <dt>bool `is_backed_up`</dt>
 *   <dd>`true` if the credential is currently backed up.</dd>
 * 
 *   <dt>string `k_passkey_credential`</dt>
 *   <dd>Credential key. </dd>
 * 
 *   <dt>string `text_device`</dt>
 *   <dd>User-supplied friendly label of this credential.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_credential = [];

  /**
 * Key of the credential to revoke.
 *
 * Only used to revoke a credential.
 *
 * @delete get
 * @var string
 */
  public $k_passkey_credential = '';

  /**
 * Key of the user whose passkey credentials to manage. `'0'` or empty string to use the
 * currently signed-in user.
 *
 * @delete get
 * @get get
 * @var string
 */
  public $uid = '';
}

?>