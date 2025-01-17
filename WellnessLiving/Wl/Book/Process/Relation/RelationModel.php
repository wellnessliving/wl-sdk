<?php

namespace WellnessLiving\Wl\Book\Process\Relation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;

/**
 * Adds a relative during the booking process.
 */
class RelationModel extends WlModelAbstract
{
  /**
     * The date/time of the session to check for booking availability.
     *
     * @get get
     * @var string
     */
  public $dtu_date = '';

  /**
     * Day of birthday.
     * `null` if birthday is not entered.
     *
     * @post post
     * @var int|null
     */
  public $i_day = null;

  /**
     * Month of birthday.
     * `null` if birthday is not entered.
     *
     * @post post
     * @var int|null
     */
  public $i_month = null;

  /**
     * Year of birthday.
     * `null` if birthday is not entered.
     *
     * @post post
     * @var int|null
     */
  public $i_year = null;

  /**
     * The relation type.
     * One of the {@link WlFamilyRelationSid} constants.
     *
     * @post post
     * @var int
     */
  public $id_relation = 0;

  /**
     * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag is set to `false`.
     *
     * Use this field with caution.
     * The final booking will not use this flag and the check will still be performed.
     *
     * @get get
     * @var bool
     */
  public $is_credit_card_check = true;

  /**
     * `true` - the new relative uses the email from <var>uid_from</var>.
     *
     * `false` - the new relative has their own email.
     *
     * @post post
     * @var bool
     */
  public $is_mail_inherit = false;

  /**
     * `true` - the new relative pays for themself.
     *
     * `false` - <var>uid_from</var> pays for the new relative.
     *
     * @post post
     * @var bool
     */
  public $is_pay_self = false;

  /**
     * The business where <var>uid_from</var> creates the new relative.
     *
     * @get get
     * @post get
     * @var string
     *
     */
  public $k_business = '0';

  /**
     * The key of the session to check for booking availability.
     *
     * @get get
     * @var string
     */
  public $k_class_period = '0';

  /**
     * The new relative's email.
     *
       * @post post
     * @var string
     */
  public $text_mail = '';

  /**
     * The new relative's first name.
     *
       * @post post
         * @var string
     */
  public $text_name_first = '';

  /**
     * The new relative's last name.
     *
       * @post post
         * @var string
     */
  public $text_name_last = '';

  /**
     * The newly added relative.
     *
     * @post result
     * @var string
     *
     */
  public $uid_create;

  /**
     * UID of already existed in another business user.
     *
     *
     * @post post
     * @var string
     */
  public $uid_existed = '';

  /**
     * The user who's adding the new relative.
     *
     * @get get
     * @post get
     * @var string
     *
     */
  public $uid_from = '0';
}

?>