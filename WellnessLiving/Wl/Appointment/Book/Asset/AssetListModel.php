<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Retrieves information about assets in the current asset category.
 */
class AssetListModel extends WlModelAbstract
{
  /**
   * A list of information about assets:
   *
   * @get result
   * @var array[]
   */
  public $a_asset;

  /**
   * A list of reserved assets.
   *
   * 1st level keys refer to asset keys.
   * 2nd level keys refer to asset numbers.
   * Values are keys of appointment bookings that reserve the asset, or `true` if the asset is reserved by a class or event.
   *
   * For example, if you want to check if the 10th asset with the key of '15' is reserved,
   * you can check if `a_resource_busy['15']['10']` is free.
   *
   * If you're rebooking an appointment, check the value of `a_resource_busy['15']['10']`.
   * If it's equal to the key of your current appointment booking, you can assume the asset is available.
   *
   * @get result
   * @var array<string, array<int, string|true>>
   */
  public $a_asset_busy = [];

  /**
   * The selected date and time of the asset booking. It is used in cases when the business booking policy allows
   * clients to select a date and time, and then the available asset.
   *
   * @get get
   * @var string
   */
  public $dtl_date = false;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * Mode type, one of {@link ModeSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_mode = 0;

  /**
   * This is `true` if asset categories are loaded for back-end mode. Otherwise, this will be `false` for front-end mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` - search in all tabs.
   * `false` - search only for the selected book tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * Key of the appointment, if we reschedule existing appointment.
   * It should be sent to ignore it when we get availability hours for the asset.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Business key.
   *
   * If not set, location's business will be used.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The class tab key used to filter assets.
   *
   * This will be `null` if not set yet or if elements with no specified class tab are selected.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The asset category key to show information for.
   *
   * @get get
   * @var string
   */
  public $k_resource_category = '0';

  /**
   * The asset layout key.
   * May be empty if asset category has no layout.
   *
   * @get result
   * @var string
   */
  public $k_resource_layout;

  /**
   * Timezone of date and time of asset booking.
   *
   * Empty if {@link AssetListModel::$dtl_date} not set or client can't change in which timezone dates should be shown.
   *
   * @get get
   * @var string
   */
  public $k_timezone = '';

  /**
   * Client to get information for.
   *
   * If client not set, returns full asset list without client restrictions.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>