<?php

namespace WellnessLiving\Wl\Reception\Application;

/**
 * States of the authorization form during Check In web application.
 *
 * Form to authorize user is pretty complicated and has own behavior.
 *
 * If business set to allow multiple authorization ways (client id, email, phone number), then
 * we will see one field only, when form is opened. This field is called authorization value and client
 * can enter client id, email or phone number into this field.
 *
 * If client enters email and business set that password is required, then we will show another field - password.
 * And also client will see arrow to go back.
 *
 * If business allows to authorize only with email and password is required, then two fields
 * (email and password) will be shown from the very beginning.
 */
class AuthorizationFormSid
{
  /**
   * State of the form, when password is added after email is entered.
   */
  const ADD_PASSWORD = 1;

  /**
   * Optional step, when multiple clients were found after authorization.
   *
   * Allows selection of the client from the given list of clients.
   */
  const CLIENT_SELECTION = 4;

  /**
   * State of the form, when password is shown initially.
   */
  const EMAIL_PASSWORD = 2;

  /**
   * State of the form, when password is hidden.
   */
  const NO_PASSWORD = 3;
}

?>