<?php

namespace WellnessLiving\Wl\Business\Franchise\Push\Setting;

/**
 * Class contains all possible settings for push.
 */
class SettingSid
{
  /**
   * Setting, which means should update already pushed elements or not.
   *
   * @title Replace existing franchisee setting
   */
  const REPLACE = 1;

  /**
   * Setting, which means should update PO if it already sold in franchisee or not.
   *
   * @title Apply franchisor setting to previously sold purchase option
   */
  const SOLD_REPLACE = 2;
}

?>