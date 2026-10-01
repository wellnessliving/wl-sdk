<?php

namespace WellnessLiving\Core\Passport\Passkey;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Enrolls a new passkey for the signed-in staff member.
 *
 * Covers both halves of the `WebAuthn` registration ceremony: {@link PasskeyRegisterApi::get()}
 * starts it by issuing a challenge, {@link PasskeyRegisterApi::post()} finishes it by verifying the
 * attestation response and storing the new credential.
 *
 * @method WlModelRequest get() Starts the registration ceremony.  Issues a challenge for creating a new credential, scoped to the signed-in user and excluding their already-registered active credentials so the same authenticator cannot register a duplicate one. The `rp.name` field is omitted from the result - clients whose implementation requires a non-empty name should substitute one locally. The options are also stashed in session so {@link \Core\Passport\Passkey\PasskeyRegisterApi::post()} can verify the same challenge when finishing the ceremony.
 * @method WlModelRequest post() Finishes the registration ceremony.  Verifies the attestation response against the challenge issued by {@link \Core\Passport\Passkey\PasskeyRegisterApi::get()}, then stores the new credential under the signed-in user. Fails if the ceremony was never started or has expired, or if the response does not match the expected origin, `rpId`, or challenge.
 */
class PasskeyRegisterModel extends WlModelAbstract
{
  /**
 * JSON-encoded structure with any additional information required by the project-specific
 * passkey configuration class, for example `k_business` in `Wl`.
 *
 * Empty if no additional information is required.
 *
 * @get get
 * @post get
 * @var string
 */
  public $json_context = '';

  /**
 * JSON-encoded credential produced by the authenticator, sent back to finish the registration
 * ceremony.
 *
 * Empty when starting the ceremony.
 *
 * @post post
 * @var string
 */
  public $json_credential = '';

  /**
 * JSON-encoded challenge and options to use when creating a new credential.
 *
 * Filled in when starting the ceremony.
 *
 * @get result
 * @var string
 */
  public $json_options = '';

  /**
 * User-supplied friendly label of the passkey being registered, for example `"MacBook Touch ID"`.
 *
 * Only used to finish the ceremony.
 *
 * @decorator trim
 * @post post
 * @var string
 */
  public $text_device = '';
}

?>