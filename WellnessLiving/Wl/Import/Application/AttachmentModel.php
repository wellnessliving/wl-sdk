<?php

namespace WellnessLiving\Wl\Import\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for import attachments for user.
 *
 * **Important!**
 * **This api used by foreign desktop application.**/
class AttachmentModel extends WlModelAbstract
{
  /**
   * List of attachment for member.
   *
   * @post post
   * @var array[]
   */
  public $a_attachment_list = [];

  /**
   * List of broken files.
   *
   * @post error
   * @var array
   */
  public $a_file_broken = [];

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Member id.
   *
   * @post post
   * @var string
   */
  public $s_member_id = '';
}

?>