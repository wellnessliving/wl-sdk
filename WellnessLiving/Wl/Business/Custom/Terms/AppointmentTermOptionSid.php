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
   * @title-lower appointment
   * @title-lower-plural appointments
   * @title-lower-plural-possessive appointments'
   * @title-lower-possessive appointment's
   * @title-plural Appointments
   * @title-plural-possessive Appointments'
   * @title-possessive Appointment's
   * @vowel-sound true
   */
  const APPOINTMENT = 1;

  /**
   * Consultation.
   *
   * @title Consultation
   * @title-lower consultation
   * @title-lower-plural consultations
   * @title-lower-plural-possessive consultations'
   * @title-lower-possessive consultation's
   * @title-plural Consultations
   * @title-plural-possessive Consultations'
   * @title-possessive Consultation's
   * @vowel-sound true
   */
  const CONSULTATION = 5;

  /**
   * Lesson.
   *
   * @title Lesson
   * @title-lower lesson
   * @title-lower-plural lessons
   * @title-lower-plural-possessive lessons'
   * @title-lower-possessive lesson's
   * @title-plural Lessons
   * @title-plural-possessive Lessons'
   * @title-possessive Lesson's
   * @vowel-sound false
   */
  const LESSON = 7;

  /**
   * Procedure.
   *
   * @title Procedure
   * @title-lower procedure
   * @title-lower-plural procedures
   * @title-lower-plural-possessive procedures'
   * @title-lower-possessive procedure's
   * @title-plural Procedures
   * @title-plural-possessive Procedures'
   * @title-possessive Procedure's
   * @vowel-sound false
   */
  const PROCEDURE = 8;

  /**
   * Service.
   *
   * @title Service
   * @title-lower service
   * @title-lower-plural services
   * @title-lower-plural-possessive services'
   * @title-lower-possessive service's
   * @title-plural Services
   * @title-plural-possessive Services'
   * @title-possessive Service's
   * @vowel-sound false
   */
  const SERVICE = 6;

  /**
   * Session.
   *
   * @title Session
   * @title-lower session
   * @title-lower-plural sessions
   * @title-lower-plural-possessive sessions'
   * @title-lower-possessive session's
   * @title-plural Sessions
   * @title-plural-possessive Sessions'
   * @title-possessive Session's
   * @vowel-sound false
   */
  const SESSION = 3;

  /**
   * Treatment.
   *
   * @title Treatment
   * @title-lower treatment
   * @title-lower-plural treatments
   * @title-lower-plural-possessive treatments'
   * @title-lower-possessive treatment's
   * @title-plural Treatments
   * @title-plural-possessive Treatments'
   * @title-possessive Treatment's
   * @vowel-sound false
   */
  const TREATMENT = 4;

  /**
   * Visit.
   *
   * @title Visit
   * @title-lower visit
   * @title-lower-plural visits
   * @title-lower-plural-possessive visits'
   * @title-lower-possessive visit's
   * @title-plural Visits
   * @title-plural-possessive Visits'
   * @title-possessive Visit's
   * @vowel-sound false
   */
  const VISIT = 2;
}

?>