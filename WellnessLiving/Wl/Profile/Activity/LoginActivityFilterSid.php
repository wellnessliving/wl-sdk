<?php

namespace WellnessLiving\Wl\Profile\Activity;

/**
 * Manages identifiers of user activity filter.
 *
 * Last ID: 18.
 */
abstract class LoginActivityFilterSid
{
  /**
   * Filter visible attended appointments
   */
  const APPOINTMENTS_ATTENDED = 4;

  /**
   * Filter visible bookings appointments
   */
  const APPOINTMENT_BOOKINGS = 2;

  /**
   * Filter visible cancellations appointments logs
   */
  const APPOINTMENT_CANCELLATIONS = 3;

  /**
   * Filter visible attended classes logs
   */
  const CLASSES_ATTENDED = 10;

  /**
   * Filter visible bookings classes logs
   */
  const CLASS_BOOKINGS = 8;

  /**
   * Filter visible cancellations classes logs
   */
  const CLASS_CANCELLATIONS = 9;

  /**
   * Filter visible client referrals logs
   */
  const CLIENT_REFERRALS = 17;

  /**
   * Filter visible attended events logs
   */
  const EVENTS_ATTENDED = 7;

  /**
   * Filter visible bookings events logs
   */
  const EVENT_BOOKINGS = 5;

  /**
   * Filter visible cancellations events logs
   */
  const EVENT_CANCELLATIONS = 6;

  /**
   * Filter visible gift card transfers logs
   */
  const GIFT_CARD_TRANSFERS = 13;

  /**
   * Filter visible gym visit attended logs
   */
  const GYM_VISIT_ATTENDED = 11;

  /**
   * Filter visible purchases logs
   */
  const PURCHASES = 12;

  /**
   * Filter visible purchase options transfers logs
   */
  const PURCHASE_OPTIONS_TRANSFERS = 14;

  /**
   * Filter visible all registrations logs
   */
  const REGISTRATION = 1;

  /**
   * Filter visible all reviews logs
   */
  const REVIEWS = 18;

  /**
   * Filter visible all rewards logs
   */
  const REWARDS = 16;

  /**
   * Filter visible all activity with social nets logs
   */
  const SOCIAL_CONNECTIONS = 15;
}

?>