<?php

namespace WellnessLiving\Core\Passport\Login\SignOut;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Signs user out.
 *
 * @method WlModelRequest post() Signs user out.  Requires the user to be signed in, fires a before-logout event allowing listeners to intercept or handle the logout, then clears the current session. Throws an error if the user is authenticated via SAML SSO, as API-based logout is not supported in that case.
 */
class SignOutModel extends WlModelAbstract
{
  }

?>