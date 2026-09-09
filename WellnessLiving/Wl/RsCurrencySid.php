<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Core\Locale\CurrencySid;

/**
 * A list of currency codes.
 *
 * When you add a currency, add also the following:<ul>
 *   <li>Image in <tt>rs.pay/html/img/pay-amount-input-*.png</tt></li>
 *   <li>Currency in <tt>rs.pay.amount.input.less</tt></li>
 * </ul>
 *
 * @deprecated Use {@link CurrencySid} instead.
 */
abstract class RsCurrencySid
{
  }

?>