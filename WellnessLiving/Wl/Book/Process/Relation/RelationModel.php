<?php

namespace WellnessLiving\Wl\Book\Process\Relation;

use WellnessLiving\WlModelAbstract;

class RelationModel extends WlModelAbstract
{
  /**
   * Date/time of session to check booking availability.
   *
   * @get get
   * @var string
   */
  public $dtu_date = '';

  /**
   * Relation type.
   * One of {@link \WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_relation = 0;

  /**
   * `true` if new relative uses email of <var>uid_from</var>.
   * `false` if new relative has his own email.
   *
   * @post post
   * @var bool
   */
  public $is_mail_inherit = false;

  /**
   * `true` if new relative pays for him self.
   * `false` if <var>uid_from</var> pays for new relative.
   *
   * @post post
   * @var bool
   */
  public $is_pay_self = false;

  /**
   * Business where <var>uid_from</var> creates new relative.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of session to check booking availability.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * New relative's email.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * New relative's first name.
   *
   * @post post
   * @var string
   */
  public $text_name_first = '';

  /**
   * New relative's last name.
   *
   * @post post
   * @var string
   */
  public $text_name_last = '';

  /**
   * New added relative.
   *
   * @post result
   * @var string
   */
  public $uid_create;

  /**
   * User who adds new relative for himself.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_from = '0';
}

?>