<?php

namespace WellnessLiving\Wl\Business\Sms\Chat;

/**
 * A class witt list of states chat form.
 */
class ChatStateSid
{
  /**
   * When a staff opened client selection form.
   */
  const DIALOG_CLIENT_SELECTING = 1;

  /**
   * Staff opened a dialog with a client with not existed chat.
   */
  const DIALOG_NEW_SELECT = 2;

  /**
   * Staff opened a dialog with a client with existed chat.
   */
  const DIALOG_OLD_SELECT = 3;

  /**
   * Starting state without any opened chat.
   */
  const DIALOG_UNSELECT = 4;
}

?>