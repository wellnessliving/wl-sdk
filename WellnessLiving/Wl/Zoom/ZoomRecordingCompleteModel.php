<?php

namespace WellnessLiving\Wl\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api called by zoom when meeting recording completed and available for downloading.
 *
 * @method WlModelRequest post()
 */
class ZoomRecordingCompleteModel extends WlModelAbstract
{
  /**
   * Event type.
   *
   * @field event
   * @post post
   * @var int
   */
  public $id_event = 0;

  /**
   * Recording payload information.
   *
   * @field payload
   * @post post
   * @var \Wl\Zoom\ZoomRecordingCompleteEntity
   */
  public $o_payload;

  /**
   * Token string that should be added to video download link like parameter <tt>access_token</tt> to be able to
   * download video without password validation.
   *
   * @field download_token
   * @post post
   * @var string
   */
  public $s_download_token;

  /**
   * Encrypted token string.
   *
   * @field encryptedToken
   * @post result
   * @var string
   */
  public $s_token_encrypted = '';

  /**
   * Plain token string.
   *
   * @field plainToken
   * @post result
   * @var string
   */
  public $s_token_plain = '';
}

?>