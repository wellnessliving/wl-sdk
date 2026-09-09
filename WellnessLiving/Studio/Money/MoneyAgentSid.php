<?php

namespace WellnessLiving\Studio\Money;

/**
 * Types of money agents.
 */
class MoneyAgentSid
{
  /**
   * Agent is one of special money agents.
   */
  const AGENT = 1;

  /**
   * Agent is one of the clients.
   */
  const CLIENT = 2;

  /**
   * Agent is a studio staff member.
   */
  const PERSONNEL = 3;
}

?>