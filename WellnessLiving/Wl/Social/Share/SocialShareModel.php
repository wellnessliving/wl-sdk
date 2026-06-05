<?php

namespace WellnessLiving\Wl\Social\Share;

use WellnessLiving\Core\ASocialSid;
use WellnessLiving\WlModelAbstract;

/**
 * Saves data about share post to database.
 * Api usage example:
 * <code>
 *     $o_api = new SocialShareApi();
 *     $o_api->id_share_object = \Wl\Social\Share\ShareObjectSid::PURCHASE;
 *     // Key of the purchase because id_share_object is \Wl\Social\Share\ShareObjectSid::PURCHASE
 *     $o_api->a_key = [$k_purchase_a, $k_purchase_b];
 *     $o_api->id_share_destination = \ASocialSid::FACEBOOK;
 *     $o_api->k_business = $k_business;
 *     $o_api->uid = $uid;
 *     $o_api->post();
 *
 *     $url_link = ''; // Example: Wl_Profile_Activity_ElementModel.url_link
 *
 *     // s_secret points specifically to your object that you want to share, so add it to the url.
 *     // In this case url_link stores all purchases for the business,
 *     // and by using s_secret we will get a link to only those purchases we want to share.
 *     $url_facebook_share = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url_link . '&s_secret=' . $o_api->s_secret);
 * </code>
 */
class SocialShareModel extends WlModelAbstract
{
  /**
   * The primary keys of the shared objects. Depends on {@link SocialShareModel::$id_share_object}.
   * If {@link SocialShareModel::$id_share_object} is:
   * * {@link ShareObjectSid::BOOK} - each value is key of the visit.  * {@link ShareObjectSid::LOCATION} - each value is key of the location.  * {@link ShareObjectSid::PURCHASE} - each value is key of the purchase.  * {@link ShareObjectSid::REVIEW} - each value is key of the review. 
   * @post post
   * @var string[]
   */
  public $a_key;

  /**
   * The id of the social network.
   *
   * @post post
   * @var int
   * @see ASocialSid
   */
  public $id_share_destination;

  /**
   * The id of type object for share post to social network.
   *
   * @post post
   * @var int
   * @see ShareObjectSid
   */
  public $id_share_object;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Secret key for access shared object.
   *
   * @post result
   * @var string
   */
  public $s_secret;

  /**
   * User key.
   *
   * @post post
   * @var string
   */
  public $uid;
}

?>