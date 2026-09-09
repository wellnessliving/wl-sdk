<?php

namespace WellnessLiving\Wl;

/**
 * List of mail form modes.
 *
 * Last used ID: 5
 */
abstract class RsMailFormSid
{
  /**
   * Form with all mail models. Means that you can manage mail, sms, postcard on the one form.
   */
  const ALL = 1;

  /**
   * Form with mail model. Only mail form will be shown.
   */
  const MAIL = 2;

  /**
   * Form with postcard model. Only postcard form will be shown.
   */
  const POSTCARD = 4;

  /**
   * Form with push notification model.
   */
  const PUSH = 5;

  /**
   * Form with sms  model. Only sms form will be shown.
   */
  const SMS = 3;
}

?>