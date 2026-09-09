<?php

namespace WellnessLiving\Wl\Member\Info;

/**
 * List of icons with additional information about business member.
 *
 * Last used ID 15.
 */
class MemberInfoSid
{
  /**
   * Amount of account balance is shown if client has negative or positive account balance.
   */
  const ACCOUNT_AMOUNT = 7;

  /**
   * Icon is shown if client has negative or positive account balance.
   */
  const ACCOUNT_ICON = 9;

  /**
   * Icon is shown if client has a birthday today.
   */
  const BIRTHDAY = 2;

  /**
   * Icon shows current type of the client.
   */
  const CLIENT_TYPE = 10;

  /**
   * Icon is shown if client has any unsigned contract.
   */
  const CONTRACT = 1;

  /**
   * Icon is shown if the client has one or more not completed forms.
   */
  const FORM = 14;

  /**
   * Icon(s) of group(s) where client is a member.
   */
  const GROUP = 13;

  /**
   * Icon is shown if client has any note from staff members on his profile.
   */
  const NOTE = 8;

  /**
   * Icon is shown if there is an active task in the business that is connected to the client.
   */
  const TASK_ACTIVE = 5;

  /**
   * Icon is shown if there is an out dated task in the business that is connected to the client.
   */
  const TASK_URGENT = 6;

  /**
   * Icon is shown if user is a traveller or enterprise client in the current business.
   */
  const TRAVELLER = 15;

  /**
   * Icon shows vaccination status, if enabled.
   */
  const VACCINATION_STATUS = 12;

  /**
   * Count of unpaid visits if client has at least one.
   *
   * Show exact number if it's lower than 99, and 99+ if greater.
   */
  const VISIT_CREDIT = 11;

  /**
   * Icon is shown if this is a first visit of the client.
   *
   * Requires date to check existing of the visits before.
   */
  const VISIT_FIRST = 3;

  /**
   * Icon is shown if client has unsigned waiver (main agreement with the business).
   */
  const WAIVER = 4;
}

?>