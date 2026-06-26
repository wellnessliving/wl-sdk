<?php

namespace WellnessLiving\Wl\Resource\Type\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to edit asset category.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 * @method WlModelRequest put() This method is called to process PUT query.
 */
class EditModel extends WlModelAbstract
{
  /**
   * @post get
   * @var int
   */
  public $id_category = 0;

  /**
   * ID of current business.
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * ID of asset category.
   *
   * @post result
   * @put get
   * @var string
   */
  public $k_resource_type = '0';

  /**
   * Title for asset category. For post.
   *
   * @post post
   * @var string
   */
  public $s_title_post = '';

  /**
   * Title for asset category. For put.
   *
   * @put post
   * @var string
   */
  public $s_title_put = '';

  /**
   * URL to edit asset category layout.
   *
   * @post result
   * @var string
   */
  public $url_layout;

  /**
   * URL to create new asset of asset category.
   *
   * @post result
   * @var string
   */
  public $url_resource_create;
}

?>