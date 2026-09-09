<?php

namespace WellnessLiving\Wl\Import\Custom\Clients;

/**
 * List of columns required to import clients.
 */
class CustomClientsSid
{
  /**
   * Client is active or not.
   *
   * @title Active Client
   */
  const ACTIVE_CLIENT = 34;

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
   * State of the subscription.
   *
   * @title Subscribed
   */
  const SUBSCRIBE = 22;

  /**
   * Internal MBO user key.
   *
   * @title MBO User ID
   */
  const UID = 30;
}

?>