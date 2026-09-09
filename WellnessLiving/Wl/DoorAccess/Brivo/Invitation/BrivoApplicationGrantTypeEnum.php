<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo\Invitation;

/**
 * An enum of application grant types.
 * {@link https://apidocs.brivo.com/#api-Application-ApplicationCreate}
 *
 * Last used ID: 4
 */
class BrivoApplicationGrantTypeEnum
{
  /**
   * In order to create an application that uses the 3-Legged work flow.
   */
  const AUTHORIZATION_CODE = 1;

  /**
   * To get started with the digital invitation process, you will need to create an application with the “invitation” grant type.
   * Applications with the invitation grant must currently be added via the api.
   */
  const INVITATION = 8;

  /**
   * If the "password" grant type is specified then the Application can only be used to access the owning Account and no other.
   */
  const PASSWORD = 2;

  /**
   * To request a new access token without the need to go through the full authorization workflow until the refresh token also expires.
   */
  const REFRESH_TOKEN = 4;
}

?>