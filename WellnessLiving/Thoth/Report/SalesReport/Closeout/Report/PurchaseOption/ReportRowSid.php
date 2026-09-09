<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Closeout\Report\PurchaseOption;

/**
 * Type of report row.
 *
 * @id-last 5
 */
class ReportRowSid
{
  /**
   * Row that represents appointment visits.
   *
   * @title Appointment
   */
  const APPOINTMENT = 1;

  /**
   * Row that represents asset reservations.
   *
   * @title Asset Reservation
   */
  const ASSET = 2;

  /**
   * Row that represents class visits.
   *
   * @title Class
   */
  const CLASSES = 3;

  /**
   * Row that represents event visits.
   *
   * @title Event
   */
  const EVENT = 4;

  /**
   * Row that represents gym visits.
   *
   * @title Gym Visit
   */
  const GYM_VISIT = 5;
}

?>