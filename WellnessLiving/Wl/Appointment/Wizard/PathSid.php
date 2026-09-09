<?php

namespace WellnessLiving\Wl\Appointment\Wizard;

/**
 * Steps of the wizard that client should go through to book an appointment.
 *
 * Last used ID: 15
 */
class PathSid
{
  /**
   * Selection of the asset that can be used to book selected appointment type.
   *
   * Is available only for booking appointment with type "service" and can contain multiple assets in one step.
   */
  const ASSET = 10;

  /**
   * Clients selects a business where he wants to make an appointment.
   * If client make an appointment from wellnessliving frontend, business is usually selected in the system
   * In this case this step is skipped and hidden.
   */
  const BUSINESS = 1;

  /**
   * Client pays for the selected purchase options and answers to the questions that are required by service.
   */
  const COMPLETE = 9;

  /**
   * Clients reads and signs all contracts of the selected pricing options.
   */
  const CONTRACT = 14;

  /**
   * Client selects date and time of the appointment.
   * This step should be always after location, service and staff selection, because only available time
   * is open to be chosen.
   */
  const DATE = 2;

  /**
   * Selection of the booking flow.
   *
   * Can be two types of the flow: to choose date and time and then choose available staff member or to choose staff member and
   * then to choose available date and time.
   *
   * This step can be not available if appointment type supports only one type of the flow. This depends on business
   * settings.
   */
  const FLOW = 11;

  /**
   * Clients select a location that he wants to visit. Business should be set previously.
   */
  const LOCATION = 3;

  /**
   * Client enters personnel information about himself. Only for a newcommers.
   */
  const LOGIN = 4;

  /**
   * Client selects promotion that can pay for the appointment.
   *
   * This step is available only if configuration of the service allows to select promotion while booking.
   */
  const PURCHASE = 8;

  /**
   * Client answers for questions when they book.
   *
   * This step is available only if in configuration of the appointment enabled Customer Questions while booking.
   */
  const QUESTION = 13;

  /**
   * Step with required quizzes.
   */
  const QUIZ = 15;

  /**
   * Client selects bookable assets. Available only for asset booking wizard and is not available for
   * service booking wizard.
   */
  const RESOURCE = 5;

  /**
   * Client selects service he wants to visit. Available only for service booking wizard and is not available for
   * asset booking wizard.
   */
  const SERVICE = 6;

  /**
   * Client selects instructor to hold the session or gender of the staff.
   * If service restricts the selection of the staff, this step will be ignored.
   */
  const STAFF = 7;
}

?>