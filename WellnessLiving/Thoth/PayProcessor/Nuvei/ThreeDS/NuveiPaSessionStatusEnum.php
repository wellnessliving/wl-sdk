<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\ThreeDS;

/**
 * An enum session status.
 *
 * Last used ID: 2
 */
class NuveiPaSessionStatusEnum
{
  /**
   * Card is authorized, 3DS interaction was performed on Nuvei side inside iframe.
   */
  const AUTHORIZED = 1;

  /**
   * API session is initialized.
   */
  const INIT = 2;
}

?>