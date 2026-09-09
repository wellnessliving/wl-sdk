<?php

namespace WellnessLiving\Wl;

/**
 * List of files that user can upload to import clients.
 * Last used ID: 34.
 */
abstract class RsLoginMemberImportFieldSid
{
  /**
   * Client is active or not.
   *
   * @title Active Client
   */
  const ACTIVE_CLIENT = 34;

  /**
   * Client's promotion is active or not.
   * If this field is set to "Yes", even if the end date of promotion is less than today's date
   * then the end date is automatically recalculated.
   *
   * @title Active Promotion
   */
  const ACTIVE_PROMOTION = 29;

  /**
   * Address (name of the street, number of the building).
   *
   * @title Address
   */
  const ADDRESS = 10;

  /**
   * Current state of the user's balance.
   *
   * @title Account Balance
   */
  const BALANCE = 20;

  /**
   * Birthday date.
   *
   * @title Birthday
   */
  const BIRTHDAY = 24;

  /**
   * Name of the city.
   *
   * @title City
   */
  const CITY = 11;

  /**
   * Name of the country.
   *
   * @title Country
   */
  const COUNTRY = 13;

  /**
   * When does promotion expire.
   *
   * @title Expiration Date
   */
  const EXPIRE = 15;

  /**
   * Last name.
   *
   * @title Last Name
   */
  const FAMILY = 2;

  /**
   * Gender.
   *
   * @title Gender
   */
  const GENDER = 23;

  /**
   * Group key.
   *
   * @title Client Groups
   */
  const GROUP = 27;

  /**
   * Fields to be ignored.
   *
   * @title Do not import
   */
  const IGNORE = 32;

  /**
   * Whether client is inactive or not.
   *
   * @title Inactive Client
   */
  const INACTIVE = 33;

  /**
   * Lead source.
   *
   * @title Lead Source
   */
  const LEAD_SOURCE = 36;

  /**
   * Home location.
   *
   * @title Home Location
   */
  const LOCATION = 26;

  /**
   * Email address.
   *
   * @title Email
   */
  const MAIL = 7;

  /**
   * Member ID.
   *
   * @title Member ID
   */
  const MEMBER = 9;

  /**
   * First Name.
   *
   * @title First Name
   */
  const NAME = 1;

  /**
   * Phone number.
   *
   * @title Cell Phone
   */
  const PHONE = 3;

  /**
   * Home phone number.
   *
   * @title Home Phone
   */
  const PHONE_HOME = 4;

  /**
   * Work phone number.
   *
   * @title Work Phone
   */
  const PHONE_WORK = 5;

  /**
   * Additional code for work phone number.
   *
   * @title Work Phone Extension
   */
  const PHONE_WORK_EXT = 6;

  /**
   * Postal or ZIP code.
   *
   * @title Postal\Zip Code
   */
  const POSTAL = 8;

  /**
   * Price.
   *
   * @title Price
   */
  const PRICE = 21;

  /**
   * Name of the promotion.
   *
   * @title Promotion
   */
  const PROMOTION = 14;

  /**
   * Date of the purchase.
   *
   * @title Purchase Date
   */
  const PURCHASE = 16;

  /**
   * Client who referred this client.
   *
   * Usually this is first and last name of the client who referred this client.
   */
  const REFERRED_BY = 35;

  /**
   * State or Province name.
   *
   * @title State\Province
   */
  const REGION = 12;

  /**
   * Remaining visits.
   *
   * @title Remaining Visits
   */
  const REMAIN = 18;

  /**
   * Renew count.
   *
   * @title Renew Count
   */
  const RENEW_COUNT = 25;

  /**
   * Date when promotion starts.
   *
   * @title Start Date
   */
  const START = 17;

  /**
   * State of the subscription.
   *
   * @title Subscribed
   */
  const SUBSCRIBE = 22;

  /**
   * Type key.
   *
   * @deprecated After manual sets the client's status, it won't be after change automatically.
   * While there is no need to use this functionality, but it may be useful in the future.
   */
  const TYPE = 28;

  /**
   * Internal MBO user key.
   *
   * @title MBO User ID
   */
  const UID = 30;

  /**
   * How many visits have been used already.
   *
   * @title Used Visits
   */
  const USED = 19;
}

?>