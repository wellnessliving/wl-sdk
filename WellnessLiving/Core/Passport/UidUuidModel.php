<?php

namespace WellnessLiving\Core\Passport;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint for bulk conversion between UIDs and UUIDs.
 *
 * Accepts arrays of UIDs and UUIDs, converts them in both directions,
 * and returns a unified associative array mapping UIDs to their corresponding UUIDs.
 *
 * @method WlModelRequest post()
 */
class UidUuidModel extends WlModelAbstract
{
  /**
   * Indexed array of user UIDs.
   *
   * @post post
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Associative array where key is UID (as string) and value is UUID (UUIDv8 string).
   * Contains merged and converted data from both input arrays.
   *
   * @post result
   * @var string[]
   */
  public $a_uid_uuid = [];

  /**
   * Indexed array of UUIDs.
   *
   * @post post
   * @var string[]
   */
  public $a_uuid = [];
}

?>