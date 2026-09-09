<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Sms;

/**/
abstract class SmsSubscriptionSid
{
  /**
   * @credit 1000
   * @price-month 39.00
   * @price-month-australia 75.00
   * @price-month-uk 75.00
   * @price-sms 0.040
   * @price-sms-australia 0.075
   * @price-sms-uk 0.075
   * @rate 5
   * @title 1000 Messages
   */
  const CENTER_1000 = 5;

  /**
   * @credit 10000
   * @price-month 249.00
   * @price-month-australia 350.00
   * @price-month-uk 350.00
   * @price-sms 0.025
   * @price-sms-australia 0.035
   * @price-sms-uk 0.035
   * @rate 8
   * @title 10000 Messages
   */
  const CENTER_10000 = 8;

  /**
   * @credit 2500
   * @price-month 89.00
   * @price-month-australia 120.00
   * @price-month-uk 120.00
   * @price-sms 0.035
   * @price-sms-australia 0.048
   * @price-sms-uk 0.048
   * @rate 6
   * @title 2500 Messages
   */
  const CENTER_2500 = 6;

  /**
   * @credit 25000
   * @price-month 375.00
   * @price-sms 0.015
   * @rate 9
   * @title 25000 Messages
   */
  const CENTER_25000 = 9;

  /**
   * @credit 500
   * @price-month 19.00
   * @price-month-australia 50.00
   * @price-month-new-zealand 50.00
   * @price-month-uk 50.00
   * @price-sms 0.050
   * @price-sms-australia 0.090
   * @price-sms-new-zealand 0.090
   * @price-sms-uk 0.090
   * @rate 4
   * @title 500 Messages
   */
  const CENTER_500 = 4;

  /**
   * @credit 5000
   * @price-month 149.00
   * @price-month-australia 200.00
   * @price-month-uk 200.00
   * @price-sms 0.030
   * @price-sms-australia 0.040
   * @price-sms-uk 0.040
   * @rate 7
   * @title 5000 Messages
   */
  const CENTER_5000 = 7;

  /**
   * @rate 10
   * @title Message Center Custom
   */
  const CENTER_CUSTOM = 10;

  /**
   * @credit 25000
   * @price-sms 0.050
   * @rate 11
   * @title Enterprise
   */
  const ENTERPRISE = 11;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @credit 0
   * @price-month 0.000
   * @price-sms 0.050
   * @rate 3
   * @title Message Center Professional
   */
  const PREMIUM = 3;
}

?>