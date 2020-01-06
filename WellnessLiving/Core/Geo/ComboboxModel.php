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
   *   <dd>The human readable name of the city including state/province and country.</dd>
   *   <dt>string <var>s_key</var></dt>
   *   <dd>The k_city value for the city.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_list = [];

  /**
   * Locale ID that is used as a filter.
   *
   * <tt>0</tt> means to search in all locales.
   * Locales are listed in {@link \Core\Locale\LocaleSid}.
   *
   * @get get
   * @var int
   */
  public $id_locale = 0;

  /**
   * Value that is used as a filter.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $s_value = null;
}

?>