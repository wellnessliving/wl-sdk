<?php

namespace WellnessLiving\Wl;

/**
 * A list of modes in which payment form can be shown.
 */
abstract class RsPayModeSid
{
  /**
   * The form is show in the mobile device.
   */
  const MOBILE = 2;

  /**
   * A form is shown in a simple mode.
   *
   * There peculiarity of the form:
   * * Only existing cards of user displays as payment source, if user have no any active cards then payment cards will not be displayed.
   * * There is no ability to add new credit card.
   * * There is no ability to pay from couple payment sources at the same time.
   */
  const SIMPLE = 3;

  /**
   * A form is shown in the web browser.
   *
   * This is the default value.
   */
  const WEB = 1;
}

?>