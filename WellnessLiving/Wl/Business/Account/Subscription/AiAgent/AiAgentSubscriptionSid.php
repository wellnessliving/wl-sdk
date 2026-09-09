<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\AiAgent;

/**
 * Last used ID: 5.
 */
abstract class AiAgentSubscriptionSid
{
  /**
   * @price-month 499.00
   * @rate 10
   * @title Dental Phone Agent
   */
  const DENTAL_PHONE_AGENT = 5;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @credit 1500
   * @price-minute 0.15
   * @price-month 199.00
   * @rate 10
   * @title Professional
   */
  const PROFESSIONAL = 2;

  /**
   * Professional subscription, which will be automatically converted to {@link AiAgentSubscriptionSid::PROFESSIONAL} after the 5th lead.
   *
   * @price-month 0
   * @rate 100
   * @title Phone Agent 5-Leads Trial
   */
  const PROFESSIONAL_TRIAL = 6;

  /**
   * @price-month 99.00
   * @rate 1
   * @title Assistant
   */
  const STANDARD = 3;

  /**
   * Standard subscription, which will be automatically converted to {@link AiAgentSubscriptionSid::STANDARD} after the 5th lead.
   *
   * @price-month 0
   * @rate 90
   * @title Chat Agent 5-Leads Trial
   */
  const STANDARD_TRIAL = 7;
}

?>