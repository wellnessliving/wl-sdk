<?php

namespace WellnessLiving\Wl\Business\Custom\Terms;

/**
 * Preset options for the {@link CustomTermSid::APPOINTMENT} custom term.
 *
 * Last used ID: 8.
 */
class AppointmentTermOptionSid
{
  /**
   * Appointment.
   *
   * @title Appointment
   * @title-plural Appointments
   * @vowel-sound true
   */
  const APPOINTMENT = 1;

  /**
   * Consultation.
   *
   * @title Consultation
   * @title-plural Consultations
   * @vowel-sound true
   */
  const CONSULTATION = 5;

  /**
   * Lesson.
   *
   * @title Lesson
   * @title-plural Lessons
   * @vowel-sound false
   */
  const LESSON = 7;

  /**
   * Procedure.
   *
   * @title Procedure
   * @title-plural Procedures
   * @vowel-sound false
   */
  const PROCEDURE = 8;

  /**
   * Service.
   *
   * @title Service
   * @title-plural Services
   * @vowel-sound false
   */
  const SERVICE = 6;

  /**
   * Session.
   *
   * @title Session
   * @title-plural Sessions
   * @vowel-sound false
   */
  const SESSION = 3;

  /**
   * Treatment.
   *
   * @title Treatment
   * @title-plural Treatments
   * @vowel-sound false
   */
  const TREATMENT = 4;

  /**
   * Visit.
   *
   * @title Visit
   * @title-plural Visits
   * @vowel-sound false
   */
  const VISIT = 2;
}

?>