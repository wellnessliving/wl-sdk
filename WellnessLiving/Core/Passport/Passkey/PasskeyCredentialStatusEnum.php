<?php

namespace WellnessLiving\Core\Passport\Passkey;

/**
 * Statuses of a registered passkey credential.
 */
class PasskeyCredentialStatusEnum
{
  /**
   * The credential is active and may be used to sign in.
   */
  const ACTIVE = 1;

  /**
   * The credential was revoked by its owner and may no longer be used to sign in.
   *
   * The row is kept (never hard-deleted) so its immutable `s_credential_id`/`s_public_key` remain
   * available for audit purposes.
   */
  const REVOKED = 2;
}

?>