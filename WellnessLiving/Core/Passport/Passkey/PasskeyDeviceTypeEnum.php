<?php

namespace WellnessLiving\Core\Passport\Passkey;

/**
 * `WebAuthn` `credentialDeviceType` values, per the `WebAuthn` specification.
 */
class PasskeyDeviceTypeEnum
{
  /**
   * The credential can be backed up and synced across multiple devices, for example through
   * iCloud Keychain or Google Password Manager.
   */
  const MULTI_DEVICE = 2;

  /**
   * The credential is bound to a single physical authenticator and cannot be backed up or
   * synced to another device.
   */
  const SINGLE_DEVICE = 1;
}

?>