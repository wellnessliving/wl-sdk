<?php

namespace WellnessLiving\Core\Amazon\S3\MultipartUpload;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API is the link between the client side of the uploader and the server side.
 *
 * @method WlModelRequest get() Initiates a multipart upload. Sets public properties for the client side of the uploader.
 * @method WlModelRequest post() Completes unloading part of the file. Assembles a file into a single unit.
 * @method WlModelRequest put() Aborts uploading a file.
 */
class MultipartUploadModel extends WlModelAbstract
{
  /**
   *  Key - the name of the field.
   *  Value - the values for this field.
   *
   * @get get
   * @post get
   * @put get
   * @var array
   */
  public $a_key;

  /**
   * A set of links for unloading parts.
   *
   * Key - part number.
   * Value - link for uploading part.
   *
   * @get result
   * @var array
   */
  public $a_part_url;

  /**
   * CID of the uploader class.
   *
   * @get get
   * @post get
   * @put get
   * @var int
   */
  public $cid_multipart_upload;

  /**
   * File size received from the client.
   *
   * @get get
   * @post get
   * @put get
   * @var int|string
   */
  public $i_file_size;

  /**
   * A standard MIME type describing the format of the object data `null` if no type is given.
   *
   * @get get
   * @post get
   * @put get
   * @var string|null
   */
  public $s_content_type;

  /**
   * Unique upload ID.
   *
   * This upload ID is used to associate all of the parts in the specific multipart upload.
   * You specify this upload ID in each of your subsequent upload part requests.
   * You also include this upload ID in the final request to either complete or abort the multipart upload request.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $s_upload_id;
}

?>