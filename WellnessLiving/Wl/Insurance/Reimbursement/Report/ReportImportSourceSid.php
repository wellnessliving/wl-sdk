<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement\Report;

/**
 * Special class to divide reimbursement history by the way of import.
 * Old reimbursement history was imported from curves API.
 * New reimbursement history can be import from rebate files directly.
 */
class ReportImportSourceSid
{
  /**
   * API import.
   */
  const API = 1;

  /**
   * Direct files import.
   */
  const FILE = 2;
}

?>