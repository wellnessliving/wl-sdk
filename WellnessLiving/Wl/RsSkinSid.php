<?php

namespace WellnessLiving\Wl;

/**
 * A list of skin types.
 *
 * * Last used ID: 20.
 */
abstract class RsSkinSid
{
  /**
   * Ai Agent web-chat.
   */
  const AI_AGENT = 19;

  /**
   * Application skin.
   */
  const APPLICATION = 13;

  /**
   * Appointment booking wizard.
   */
  const APPOINTMENT = 7;

  /**
   * Event enrollment wizard widget.
   */
  const ENROLLMENT = 8;

  /**
   * Fitbuilder widget.
   */
  const FITBUILDER = 17;

  /**
   * Skin for lead tracking form.
   */
  const LEAD = 9;

  /**
   * Skin for lead tracking form from microservice.
   */
  const LEAD_FOREIGN = 20;

  /**
   * Mobile schedule version.
   */
  const MOBILE_SCHEDULE = 10;

  /**
   * Asset booking wizard.
   */
  const RESOURCE = 16;

  /**
   * Review list widget.
   */
  const REVIEW_LIST = 4;

  /**
   * General schedule design appearance.
   */
  const SCHEDULE_DESIGN = 15;

  /**
   * Foreign schedule widget on react language.
   */
  const SCHEDULE_FOREIGN = 18;

  /**
   * Schedule list widget.
   */
  const SCHEDULE_LIST = 1;

  /**
   * Standard version of schedule.
   *
   * This skin is the same as {@link RsSkinSid::SCHEDULE_LIST} except that design can not be changed, only standard
   * settings can be used.
   */
  const SCHEDULE_STANDARD = 14;

  /**
   * Staff widget.
   */
  const STAFF = 12;

  /**
   * Online store widget.
   */
  const STORE = 11;
}

?>