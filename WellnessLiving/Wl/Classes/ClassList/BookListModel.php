<?php

namespace WellnessLiving\Wl\Classes\ClassList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Service\BookableSid;

/**
 * An endpoint to get all the classes for a location.
 *
 * @method WlModelRequest get() Gets a list of classes which take place in the specified location.  Used to build the booking page for a location, displaying all classes that clients can sign up for. Returns the full class details needed for display: schedules, assigned staff, booking links, pricing, and category tabs.
 */
class BookListModel extends WlModelAbstract
{
  /**
   * The class list. Every element has the following structure:
   *
   * <dl>
   *   <dt>string[] `a_class_tab`</dt>
   *   <dd>
   *     The list of class tab keys for the class.
   * 
   *   </dd>
   * 
   *   <dt>string[] `a_login_type`</dt>
   *   <dd>List of login types for current class.
   * </dd>
   * 
   *   <dt>string[] `a_member_group`</dt>
   *   <dd>List of member groups for current class.
   * </dd>
   * 
   *   <dt>string[] `a_url_book`</dt>
   *   <dd>The list of URL to book this class.</dd>
   * 
   *   <dt>string `dtu_book_date`</dt>
   *   <dd>The book date of an event in UTC date/time format. Can be empty string if user cannot book the event.</dd>
   * 
   *   <dt>int `i_capacity`</dt>
   *   <dd>Class capacity.</dd>
   * 
   *   <dt>int `id_bookable`</dt>
   *   <dd>Bookable type ID. One of {@link BookableSid} constants.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>This will be `true` if the class is active. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_event`</dt>
   *   <dd>This will be `true` for events. Otherwise, this will be `false` for classes.</dd>
   * 
   *   <dt>bool `is_online_private`</dt>
   *   <dd>
   *     `true` means to show class only for clients who can book online,
   * `false` means to show class for all clients.
   *   </dd>
   * 
   *   <dt>string `k_class`</dt>
   *   <dd>The class key. </dd>
   * 
   *   <dt>string `k_enrollment_block`</dt>
   *   <dd>The enrollment block key. </dd>
   * 
   *   <dt>string `m_price_total`</dt>
   *   <dd>The total price for an event.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>The class description.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The class name.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_class;

  /**
   * The image height in pixels. Specify this value if you need the image to be returned in a specific size.
   * If this value isn't specified, the returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * The image width in pixels. Specify this value if you need the image to be returned in a specific size.
   * If this value isn't specified, the returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>