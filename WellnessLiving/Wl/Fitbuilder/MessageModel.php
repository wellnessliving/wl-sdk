<?php

namespace WellnessLiving\Wl\Fitbuilder;

use WellnessLiving\WlModelAbstract;

/**
 * Point to get messenger information from Fitbuilder.
 */
class MessageModel extends WlModelAbstract
{
  /**
     * Messenger information:
     * <dl>
     *   <dt>
     *     array `message`
     *   <dt>
     *   <dd>
     *     Message information:
     *     <dl><dt>string `id`</dt><dd>Message key.</dd>
     *     <dt>string `message`</dt><dd>Message text.</dd>
     *     <dt>string `updated_at`</dt><dd>Date/time when the message has been posted.</dd></dl>
     *   </dd>
     *   <dt>
     *     array `user_profile`
     *   </dt>
     *   <dd>
     *     User's information.
     *   </dd>
     * </dl>
     *
     * @post post
     * @var array
     */
  public $a_data = [];

  /**
     * Messenger channel key.
     *
     * @post get
     * @var string
     */
  public $k_channel = '';
}

?>