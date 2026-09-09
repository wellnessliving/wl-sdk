<?php

namespace WellnessLiving\Core\Sms\A2p;

/**
 * Business structures for A2P10DLC registration.
 *
 * Last used id: 6.
 */
class BusinessStructureSid
{
  /**
   * Co-Operative.
   *
   * @title Co-Operative
   * @twilio-value Co-operative
   */
  const COOPERATIVE = 1;

  /**
   * Corporation.
   *
   * @title Corporation
   * @twilio-value Corporation
   */
  const CORPORATION = 2;

  /**
   * Limited Liability Corporation.
   *
   * @title Limited Liability Corporation
   * @twilio-value Limited Liability Corporation
   */
  const LIMITED_LIABILITY_CORPORATION = 3;

  /**
   * Non-Profit Corporation.
   *
   * @title Non-Profit Corporation
   * @twilio-value Non-profit Corporation
   */
  const NON_PROFIT_CORPORATION = 4;

  /**
   * Partnership.
   *
   * @title Partnership
   * @twilio-value Partnership
   */
  const PARTNERSHIP = 5;

  /**
   * Sole Proprietorship.
   *
   * @title Sole Proprietorship
   * @twilio-value Sole Proprietorship
   */
  const SOLE_PROPRIETORSHIP = 6;
}

?>