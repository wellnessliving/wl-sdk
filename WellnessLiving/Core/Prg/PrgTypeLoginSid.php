<?php

namespace WellnessLiving\Core\Prg;

/**
 * List of possible login types in PRG.
 */
class PrgTypeLoginSid
{
  /**
   * It is checked whether the user is logged in to the Studio, if logged in,
   * then his data is used and automatic login to the PRG.
   *
   * Note. Autoload at the testing stage. After testing, it is necessary to uncomment the lock
   * of autologin in {@link \PrgLoginFormView::load()}
   */
  const AUTO = 1;

  /**
   * Mode for the local computer of the developer with the input of login and password or login-constant.
   */
  const LOCAL = 2;

  /**
   * Manual mode with login and password entry.
   */
  const MANUAL = 3;

  /**
   * Controlled automatic mode.
   *
   * @see PrgTypeLoginSid::AUTO
   */
  const SEMI_AUTO = 4;
}

?>