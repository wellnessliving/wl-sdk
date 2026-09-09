<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement\Rebate;

use WellnessLiving\Wl\Insurance\Reimbursement\VisitTypeSid;

/**
 * List of all possible fields in the rebate export and import files.
 *
 * Last used id: 38
 */
class RebateFieldSid
{
  /**/
  const BID = 38;

  /**
   * Birth date. Format should set as additional field in the columns list.
   */
  const BIRTHDAY = 4;

  /**
   * Code of the reason, why provider does not agree to pay reimbursement.
   */
  const DENY_CODE = 20;

  /**
   * User-friendly message, why provider does not agree to pay reimbursement.
   */
  const DENY_REASON = 21;

  /**
   * Enrollment date.
   */
  const ENROLLMENT_DATE = 31;

  /**
   * Service fields with always fixed value.
   *
   * Value should be set in the array with list of columns.
   */
  const FIXED = 18;

  /**
   * Location address.
   */
  const LOCATION_ADDRESS = 12;

  /**
   * Location city.
   */
  const LOCATION_CITY = 13;

  /**
   * Name of the location.
   */
  const LOCATION_NAME = 11;

  /**
   * Location phone number.
   */
  const LOCATION_PHONE = 16;

  /**
   * Location postal or zip code.
   */
  const LOCATION_POSTAL = 15;

  /**
   * Location region.
   */
  const LOCATION_REGION = 14;

  /**
   * Client's address.
   */
  const MEMBER_ADDRESS = 32;

  /**
   * Client's city.
   */
  const MEMBER_CITY = 33;

  /**
   * Curves MemberID (We will send UID for new members)
   */
  const MEMBER_ID = 1;

  /**
   * Client's phone number.
   */
  const MEMBER_PHONE = 34;

  /**
   * Client's postal or zip code.
   */
  const MEMBER_POSTAL = 35;

  /**
   * Client's region.
   */
  const MEMBER_REGION = 36;

  /**
   * First name of the User pulled from Wellness Input Screen.
   */
  const NAME_FIRST = 39;

  /**
   * Name (First and Last name of the User pulled from Wellness Input Screen).
   */
  const NAME_FULL = 3;

  /**
   * Last name of the User pulled from Wellness Input Screen.
   */
  const NAME_LAST = 40;

  /**
   * This is value of some field that users enter into the wellness enrollment screen.
   *
   * Fields is defined in additional index in the columns list.
   */
  const PROVIDER_CUSTOM = 5;

  /**
   * Amount which is paid by insurance provider for.
   */
  const REIMBURSEMENT_AMOUNT = 19;

  /**
   * Since date. This is `dt_
   */
  const SINCE_DATE = 37;

  /**
   * ClubID this is TerritoryID.
   *
   * (For new Clubs this will be BID).
   */
  const TERRITORY_ID = 2;

  /**/
  const UID = 29;

  /**
   * Number of visits (integer value).
   */
  const VISIT_ALL_COUNT = 7;

  /**
   * Days visited (This is the day of the month the user visited dates are separated by commas).
   */
  const VISIT_ALL_DAY_LIST = 8;

  /**
   * Year and month, when visits were performed.
   */
  const VISIT_DATE = 17;

  /**
   * Month (Number of the month user visited).
   */
  const VISIT_MONTH = 9;

  /**
   * Number of visits (integer value) online (should be called Online Live Streaming Class).
   */
  const VISIT_ONLINE_COUNT = 24;

  /**
   * Days visited online (This is the day of the month the user visited dates are separated by commas).
   */
  const VISIT_ONLINE_DAY_LIST = 26;

  /**
   * Number of visits (integer value) in person (actual gym visit).
   */
  const VISIT_PHYSICAL_COUNT = 22;

  /**
   * Days visited in person (This is the day of the month the user visited dates are separated by commas).
   */
  const VISIT_PHYSICAL_DAY_LIST = 23;

  /**
   * Number of visits (integer value) online and recorded (should be called Online Recorded Class).
   */
  const VISIT_RECORDED_COUNT = 27;

  /**
   * Days visited online and recorded (This is the day of the month the user visited dates are separated by commas).
   */
  const VISIT_RECORDED_DAY_LIST = 28;

  /**
   * Type of the visit. One of the constant strings:
   * <ul>
   *   <li> Physical Gym Visit </li>
   *   <li> On-line Live </li>
   *   <li> On-line Recorded </li>
   * </ul>
   *
   * @see VisitTypeSid
   */
  const VISIT_TYPE = 30;

  /**
   * Year (Year that the user visited).
   */
  const VISIT_YEAR = 10;

  /**
   * Program Name this should pull from the Curves Community Setup.
   */
  const WELLNESS_PROGRAM_NAME = 6;
}

?>