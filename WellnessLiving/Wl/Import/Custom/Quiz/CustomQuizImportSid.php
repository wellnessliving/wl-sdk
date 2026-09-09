<?php

namespace WellnessLiving\Wl\Import\Custom\Quiz;

/**
 * List of columns required to import quiz.
 *
 * Last used ID: 9.
 */
abstract class CustomQuizImportSid
{
  /**
   * Date, when quiz was added to the client's profile.
   */
  const DATE_ADDED = 1;

  /**
   * Date, when quiz was signed.
   */
  const DATE_SIGNED = 2;

  /**
   * Name of the file in the archive with quiz responses.
   */
  const FILENAME = 3;

  /**/
  const MEMBER_ID = 4;

  /**
   * First name of the client, who owns the quiz.
   */
  const OWNER_NAME_FIRST = 5;

  /**
   * Last name of the client, who owns the quiz.
   */
  const OWNER_NAME_LAST = 6;

  /**
   * Details about session, quiz is related to. Can be blank if quiz is not related to any service.
   *
   * This value if imported as plain text and does not allow to connect real session.
   */
  const SESSION_DETAILS = 7;

  /**
   * First name of the client, who signed the quiz.
   *
   * This value if imported as plain text and does not allow to connect real user.
   */
  const SIGN_NAME_FIRST = 8;

  /**
   * Last name of the client, who signed the quiz.
   *
   * This value if imported as plain text and does not allow to connect real user.
   */
  const SIGN_NAME_LAST = 9;

  /**/
  const UID = 10;
}

?>