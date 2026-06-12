<?php

namespace WellnessLiving\Core\Geo;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of cities matching the search string for a given location.
 */
class ComboboxModel extends WlModelAbstract
{
  /**
   * A list of items to show in the combobox list.
   *
   * Each element of the array is a city matching the string with the following structure:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>string `s_value`</dt>
  <dd>The human-readable name of the city, including the state/province and country.</dd>

  <dt>string `s_key`</dt>
  <dd>The <var>k_city</var> value for the city.</dd>
</dl>
  public $a_list;

  /**
   * The locale ID used as a filter. The locale is generally a country.
   *
   * One of the {@link LocaleSid} constants.
   *
   * This will be `0` if all locations are searched.
   *
   * @get get
   * @var int
   */
  public $id_locale = 0;

  /**
   * The city name (or a fragment of the city name) used for the search.
   *
   * @get get
   * @var string
   */
  public $s_value = '';
}

?>