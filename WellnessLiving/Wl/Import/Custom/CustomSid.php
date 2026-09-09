<?php

namespace WellnessLiving\Wl\Import\Custom;

/**
 * List of all custom imports that are supported by system.
 * Each constant defines specific import.
 * Note that if you are adding new constant you should also add new class
 * which should extend {@link \Wl\Import\Custom\CustomPerformAbstract}
 *
 * Last used ID: 20.
 */
abstract class CustomSid
{
  /**
   * Creates recurring appointments with no end date.
   */
  const APPOINTMENT_RECURRING = 8;

  /**
   * Custom import which allows to import contact block information.
   */
  const CLIENTS = 20;

  /**
   * Custom import which allows to import client account balance.
   */
  const CLIENT_ACCOUNT_BALANCE = 10;

  /**
   * Custom import which allows to import client note.
   */
  const CLIENT_NOTE = 5;

  /**
   * Custom import which allows to import client purchase refund.
   */
  const CLIENT_PURCHASE_REFUND = 11;

  /**
   * Custom import which allows to import client relationship.
   */
  const CLIENT_RELATIONSHIP = 12;

  /**
   * Custom import which allows to import contact log information.
   */
  const CONTACT = 1;

  /**
   * Custom import which allows to import curves staff-manager custom fields.
   */
  const CURVE_EXT_MANAGER = 15;

  /**
   * Custom import which allows to import curves franchisee custom fields.
   */
  const CURVE_EXT_ORGANIZATION = 13;

  /**
   * Custom import which allows to import curves staff-owner custom fields.
   */
  const CURVE_EXT_OWNER = 14;

  /**
   * Custom import which allows to import curves franchisee.
   */
  const CURVE_FRANCHISE = 7;

  /**
   * Custom import which allows to import curves client historical visits.
   */
  const CURVE_HISTORICAL_VISIT = 16;

  /**
   * Custom import which allows to import curves members.
   */
  const CURVE_MEMBER = 4;

  /**
   * Custom import which allows to start import for the list of franchisees.
   */
  const CURVE_START = 9;

  /**
   * Creates sold gift cards for clients.
   */
  const LOGIN_COUPON = 17;

  /**
   * Custom import which allows to import purchase members.
   */
  const PURCHASE_MEMBER = 6;

  /**
   * Allows to remove list of purchases from specific file.
   */
  const PURCHASE_REMOVE = 18;

  /**
   * Custom import which allows to import forms.
   *
   * @title Forms
   */
  const QUIZ = 19;

  /**
   * Custom import which allows to import refund dates to update transactions.
   */
  const REFUND = 2;

  /**
   * Custom import which allows to import client reward balance.
   */
  const REWARD = 3;
}

?>