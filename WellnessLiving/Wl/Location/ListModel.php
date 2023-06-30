<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information for all locations belonging to a business.
 */
class ListModel extends WlModelAbstract
{
  /**
   * Primary keys of businesses in {@link \RsBusinessSql} table.
   * You can specify it instead of <var>$k_business</var> to load data for a lot of businesses by 1 query.
   *
   * @get get
   * @var string[]
   */
  public $a_business = [];

  /**
   * List of locations of business {@link \WellnessLiving\Wl\Location\ListModel::$k_business}. Keys - location keys; primary keys in {@link \RsLocationSql} table. Values - sub array with next keys:
   * <dl>
   *   <dt>
   *     float <var>f_latitude</var>
   *   </dt>
   *   <dd>
   *     Location latitude.
   *   </dd>
   *   <dt>
   *     float <var>f_longitude</var>
   *   </dt>
   *   <dd>
   *     Location longitude.
   *   </dd>
   *   <dt>
   *     string <var>k_business</var>
   *   </dt>
   *   <dd>
   *     Business key.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     Location key.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Location title.
   *   </dd>
   *   <dt>
   *     string <var>text_address</var>
   *   </dt>
   *   <dd>
   *     Location full address.
   *   </dd>
   *   <dt>
   *     string [<var>url_logo</var>]
   *   </dt>
   *   <dd>
   *     Location logo URL. Is set only if location has logo.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_location;

  /**
   * The business key used internally by WellnessLiving.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Primary keys of businesses in {@link \RsBusinessSql} table.
   * You can specify it instead of <var>$k_business</var> to load data for a lot of businesses by 1 query.
   *
   * The same as <var>$a_business</var>, but serialized with JSON (to make URL shorter).
   *
   * @get get
   * @var string
   */
  public $s_business = '';

  /**
   * Whether removed locations should be returned.
   *
   * @get get
   * @var bool
   */
  public $show_remove = false;
}

?>