<?php

namespace WellnessLiving\Wl\Page\Map;

/**
 * List of available labels for Page Map.
 */
class MapLabelSid
{
  /**
   * Label for beta reports.
   *
   * @title Beta
   */
  const BETA = 1;

  /**
   * Label for hidden reports. Such reports are available only by direct link or in the dashboard.
   *
   * @title Hidden
   */
  const HIDDEN = 5;

  /**
   * Label for new reports.
   *
   * @title New
   */
  const NEW_LABEL = 2;

  /**
   * Label for Notifications section of user profile, if they unsubscribed from all notifications.
   *
   * @title Opted out
   */
  const OPTED_OUT = 4;

  /**
   * Label for unsupported reports.
   *
   * @title Unsupported
   */
  const UNSUPPORTED = 3;
}

?>