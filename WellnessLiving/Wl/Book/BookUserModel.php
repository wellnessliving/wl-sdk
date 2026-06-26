<?php

namespace WellnessLiving\Wl\Book;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to save a list of clients who a class session must be booked for.
 *
 * @method WlModelRequest post() Saves a list of client who a class session must be booked for into session.
 */
class BookUserModel extends WlModelAbstract
{
  /**
   * List of clients to save.
   *
   * @post post
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Key in the storage to get a list of saved clients.
   *
   * @post result
   * @var string
   */
  public $s_id;
}

?>