<?php

namespace WellnessLiving\Wl;

/**
 * A list of business editor pages.
 *
 * Last used ID: 12
 */
abstract class RsBusinessEditSid
{
  const ADDRESS = 3;

  const BILL = 5;

  const CONTACT = 4;

  /**
   * EML stands for Electronic Mailing Lists.
   *
   * There are different EML managers.
   *
   * @see RsEmlSid
   */
  const EML = 10;

  /**
   * Features list in business setup.
   */
  const FEATURE = 12;

  const GENERAL = 1;

  const MAIL = 9;

  const MERCHANT = 8;

  /**
   * Services list in business setup.
   */
  const SERVICE = 11;

  const SKIN = 7;

  /**
   * Business links.
   */
  const SOCIAL = 2;
}

?>