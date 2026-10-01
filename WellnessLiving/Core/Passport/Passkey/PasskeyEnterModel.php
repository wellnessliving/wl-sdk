<?php

namespace WellnessLiving\Core\Passport\Passkey;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Signs a staff member in using a previously registered passkey.
 *
 * Covers both halves of the `WebAuthn` authentication ceremony: {@link PasskeyEnterApi::get()} starts
 * it by issuing a challenge, {@link PasskeyEnterApi::post()} finishes it by verifying the assertion
 * and signing the user in. Username-less by default - {@link PasskeyEnterApi::get()} does not accept
 * a login, so the browser/OS surfaces a discoverable-credential picker instead of the caller
 * identifying the user upfront.
 *
 * @method WlModelRequest get() Starts the authentication ceremony.  Issues an authentication challenge with an empty `allowCredentials` list, so the browser or OS surfaces a picker of every passkey registered for this `rpId` without the caller identifying a user first. The options are also stashed in session so {@link \Core\Passport\Passkey\PasskeyEnterApi::post()} can verify the same challenge when finishing the ceremony.
 * @method WlModelRequest post() Finishes the authentication ceremony.  Looks up the credential by the ID carried in the assertion, verifies the assertion against it and the challenge issued by {@link \Core\Passport\Passkey\PasskeyEnterApi::get()}, then signs the credential's owner in the same way a successful password login would. Fails if the caller is already signed in, the credential is unknown or revoked, or the assertion does not verify.
 */
class PasskeyEnterModel extends WlModelAbstract
{
  /**
 * JSON-encoded `PublicKeyCredential` produced by `navigator.credentials.get()`, sent back to
 * finish the authentication ceremony.
 *
 * Empty when starting the ceremony.
 *
 * @post post
 * @var string
 */
  public $json_credential = '';

  /**
 * JSON-encoded `PublicKeyCredentialRequestOptions` to pass to `navigator.credentials.get()`.
 *
 * Filled in when starting the ceremony.
 *
 * @get result
 * @var string
 */
  public $json_options = '';

  /**
 * An optional URL for redirection after the user has signed in.
 *
 * Only used to finish the ceremony.
 *
 * @post result
 * @var string|null
 */
  public $url_redirect;

  /**
 * Url of previous page if the user was redirected to the login page.
 *
 * Only used to finish the ceremony.
 *
 * @post post
 * @var string
 */
  public $url_return = '';
}

?>