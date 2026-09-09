<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement\Refuse\Filter;

/**
 * A list status of refuse message.
 */
class FilterRefuseMessageSelectSid
{
  /**
   * All records.
   *
   * @title Select All
   */
  const ALL = 3;

  /**
   * Show only records which have not refuse message.
   *
   * @title Without a Message
   */
  const WITHOUT_MESSAGE = 1;

  /**
   * Show only records which have refuse message.
   *
   * @title With a Message
   */
  const WITH_MESSAGE = 2;
}

?>