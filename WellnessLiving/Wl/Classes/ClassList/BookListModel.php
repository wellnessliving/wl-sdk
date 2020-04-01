<?php

namespace WellnessLiving\Wl\Classes\ClassList;

use WellnessLiving\WlModelAbstract;

/**
 * Point to get all classes of location.
 */
class BookListModel extends WlModelAbstract
{
  /**
   * Class list. Every element has next structure:
   * <dl>
   *   <dt>bool <var>is_active</var></dt>
   *   <dd><tt>true</tt> if class is active; <tt>false</tt> otherwise.</dd>
   *
   *   <dt>bool <var>is_event</var></dt>
   *   <dd><tt>true</tt> for events; <tt>false</tt> for classes.</dd>
   *
   *   <dt>sting <var>k_class</var></dt>
   *   <dd>Class key. Primary key in {@link \RsClassSql} table.</dd>
   *
   *   <dt>sting <var>k_enrollment_block</var></dt>
   *   <dd>Enrollment block key. Primary key in {@link \RsEnrollmentBlockSql} table.</dd>
   *
   *   <dt>sting <var>text_description</var></dt>
   *   <dd>Description of the class.</dd></dl>
   *
   *   <dt>sting <var>text_title</var></dt>
   *   <dd>Name of the class.</dd>
   * </dl>
   *
   * <tt>null</tt> if not yet loaded.
   *
   * @get result
   * @var array[]|null
   */
  public $a_class = null;

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>