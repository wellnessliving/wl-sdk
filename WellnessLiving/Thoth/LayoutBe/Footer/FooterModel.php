<?php

namespace WellnessLiving\Thoth\LayoutBe\Footer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get information required to render the site footer.
 *
 * @method WlModelRequest get() Loads the data required to render the site footer for the given business.  Loads the business's white-label status and derives whether the "Powered by WellnessLiving" branding and the Terms and Conditions link should be shown in the footer. The result is stored in {@link \Thoth\LayoutBe\Footer\FooterApi::$show_term}.
 */
class FooterModel extends WlModelAbstract
{
  /**
 * Business key to get footer data for.
 *
 * @get get
 * @var string
 */
  public $k_business = '0';

  /**
 * Whether the "Powered by WellnessLiving" branding and Terms & Conditions links are shown in the footer.
 *
 * `true` to show them; `false` for white-label businesses, which must not display WellnessLiving branding.
 *
 * @get result
 * @var bool
 */
  public $show_term = false;
}

?>