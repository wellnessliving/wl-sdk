<?php

namespace WellnessLiving\Wl\Profile\Alert;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to create, read, update and delete login notes.
 */
class AlertEditModel extends WlModelAbstract
{
  /**
     * The list of location keys to flag client in.
     *
     * @post post
     * @var string[]
     */
  public $a_location = [];

  /**
     *
     *
     * @get result
     * @var array
     */
  public $a_login_note_data = [];

  /**
     * Login note access type id.
     *
     * @post post
     * @var int
     */
  public $id_login_note_access = 0;

  /**
     * Whether flagged user can book. Does not matter if {@link AlertEditModel::$is_flag} is `false`.
     *
     * @post post
     * @var bool
     */
  public $is_book = false;

  /**
     * Whether to flag the user.
     *
     * @post post
     * @var bool
     */
  public $is_flag = false;

  /**
     * Whether flagged user can make purchases. Does not matter if {@link AlertEditModel::$is_flag} is `false`.
     *
     * @post post
     * @var bool
     */
  public $is_purchase = false;

  /**
     * Key of current business.
     *
     * @delete get
     * @get get
     * @post get
     * @var string
     */
  public $k_business = '0';

  /**
     * Login note key to edit or get info for.
     * Empty if new entry is being added.
     *
     * @delete get
     * @get get
     * @post get,result
     * @var string
     */
  public $k_login_note = '0';

  /**
     * Note text.
     *
     * @post post
     * @var string
     */
  public $text_note = '';

  /**
     * Key of a user to show information or post a note for.
     *
     * @get get
     * @post get
     * @var string
     */
  public $uid = '0';
}

?>