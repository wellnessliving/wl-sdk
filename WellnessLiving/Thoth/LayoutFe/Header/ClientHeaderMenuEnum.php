<?php

namespace WellnessLiving\Thoth\LayoutFe\Header;

/**
 * Items of the menu of the header of the client site that a page can highlight.
 *
 * Which item is highlighted depends on the page the header is shown on, so it is a part of the context of the page
 * The context carries `0` when no item is
 * highlighted: there is no case for it, a page highlights an item or nothing.
 *
 * Last used ID: 7.
 *
 * @method static ClientHeaderMenuEnum classEid(string $s_class, ?string $s_prefix = null)
 * @method static ClientHeaderMenuEnum constantEid(string $s_constant)
 * @method static ClientHeaderMenuEnum idEid(int $id)
 * @method static ClientHeaderMenuEnum sidEid(string $sid)
 */
class ClientHeaderMenuEnum
{
  /**
   * Attendance report of the client.
   */
  const ATTENDANCE = 1;

  /**
   * Barcode of the client.
   */
  const BARCODE = 2;

  /**
   * Store of the business.
   */
  const CATALOG = 3;

  /**
   * Profile of the client. The report of the transactions of the client highlights this item too.
   */
  const PROFILE = 4;

  /**
   * Reward program.
   */
  const REWARD = 5;

  /**
   * Schedule: the classes, the events and the appointments.
   */
  const SCHEDULE = 6;

  /**
   * Video catalog of the business.
   */
  const VIDEO = 7;
}

?>