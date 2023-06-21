<?php

namespace WellnessLiving\Core\Geo;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of cities matching the search string for a given locale.
 */
class ComboboxModel extends WlModelAbstract
{
  /**
   * A list of items to show in the combobox list.
   *
   * Each element of the array is a city matching the string. Each element is an array with the following structure:
   * <dl>
   *   <dt>string <var>s_value</var></dt>
   *   <dd>The human-readable name of the city including state/province and country.</dd>
   *   <dt>string <var>s_key</var></dt>
   *   <dd>The <var>k_city</var> value for the city.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * The Locale ID that is used as a filter. Generally a locale is a country.
   *
   * One of {@link \Wellnessliving\Core\Locale\LocaleSid} constants.
   *
   * `0` means to search in all locales.
   *
   * @get get
   * @var int
   */
  public $id_locale = 0;

  /**
   * The city name or a fragment of the name used to search for a city.
   *
   * @get get
   * @var string
   */
  public $s_value = '';
}

?>