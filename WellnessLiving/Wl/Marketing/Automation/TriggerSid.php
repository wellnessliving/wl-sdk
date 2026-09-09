<?php

namespace WellnessLiving\Wl\Marketing\Automation;

/**
 * List of triggers for automations.
 *
 * Last used ID: 24.
 */
class TriggerSid
{
  /**
   * Triggers when a checkout is abandoned.
   */
  const ABANDONED_CHECKOUT = 16;

  /**
   * Triggers after new class schedule is added.
   */
  const CLASSES_PROMOTE = 1;

  /**
   * Triggers when a client has a birthday.
   */
  const CLIENT_BIRTHDAY = 19;

  /**
   * Triggers after a client canceled booking.
   */
  const CLIENT_CANCEL_BOOK = 14;

  /**
   * Triggers when a client is added to a group.
   */
  const CLIENT_GROUP_ADDED = 17;

  /**
   * Triggers when a client is removed from a group.
   */
  const CLIENT_GROUP_REMOVED = 18;

  /**
   * Triggers when a client posts a review.
   */
  const CLIENT_LEFT_REVIEW = 20;

  /**
   * Triggers after a client did not show up to a service reserved by.
   */
  const CLIENT_NO_SHOW = 13;

  /**
   * Triggers when a client is referred.
   */
  const CLIENT_REFERRED = 21;

  /**
   * Triggers after new event schedule is added.
   */
  const EVENT_PROMOTE = 2;

  /**
   * Triggers when a form is submitted.
   */
  const FORM_SUBMITTED = 22;

  /**
   * Triggers after a client fill out a Lead Capture Form on the website of a business.
   */
  const LEAD_CAPTURE = 3;

  /**
   * Triggers when an existing lead moves to a different stage.
   */
  const LEAD_STAGE_UPDATED = 24;

  /**
   * Triggers when a client long time did not visit location.
   */
  const LOGIN_BACK = 4;

  /**
   * Triggers when a new client is added.
   */
  const NEW_CLIENT_ADDED = 23;

  /**
   * Triggers after a client purchases a product.
   */
  const PRODUCT_PURCHASE = 6;

  /**
   * Triggers when membership expires.
   */
  const PROMOTION_EXPIRE = 8;

  /**
   * Triggers when a client only has a few visits remaining on their pass.
   */
  const PROMOTION_LOW = 7;

  /**
   * Triggers after a client purchases a promotion.
   */
  const PROMOTION_PURCHASE = 10;

  /**
   * Triggers before certain count of days before membership renews.
   */
  const PROMOTION_RENEW = 9;

  /**
   * Triggers when a client attends a visit using a purchase option.
   */
  const PROMOTION_USED = 15;

  /**
   * Triggers after a service booking.
   */
  const SERVICE_BOOK = 12;

  /**
   * Triggers after visit the service.
   */
  const VISIT_CAMPAIGN = 11;
}

?>