<?php

namespace WellnessLiving\Core\Timing;

/**
 * The SID of a case (for example `footer-owner`) is the name of the component that JS sets in
 * `WlSdk_ModelAbstract::s_timing_component` and `Core_Spa_View_Abstract::s_timing_component`. The SID is used as the
 * `Component` dimension of Cloud Watch metrics, so the list of cases must stay short and limited: every component
 * that is not listed here is reported as {@link ComponentTimingEnum::UNKNOWN}. To measure a new component,
 * add a case for it.
 *
 * @method static ComponentTimingEnum idEid(int $id)
 * @method static ComponentTimingEnum sidEid(string $sid)
 */
class ComponentTimingEnum
{
  /**
   * Model of the environment (`Wl/Session/Environment.json`) that the footer of a client waits for.
   */
  const ENVIRONMENT = 1;

  /**
   * Footer widget of a client: the whole view.
   */
  const FOOTER_CLIENT = 2;

  /**
   * Model of the footer of a client (`Thoth/LayoutBe/Footer/Footer.json`).
   */
  const FOOTER_MODEL = 3;

  /**
   * Footer widget of a business owner: the whole view.
   */
  const FOOTER_OWNER = 4;

  /**
   * Header widget of a business owner: the whole view.
   */
  const HEADER = 5;

  /**
   * Rendering of the header of a client on the server.
   */
  const HEADER_LAYOUT = 6;

  /**
   * Any component that this list does not know, for example a name that is sent by a client by mistake or on purpose.
   */
  const UNKNOWN = 7;
}

?>