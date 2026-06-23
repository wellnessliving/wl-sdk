<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

/**
 * Returns information used to generate application sources.
 */
class ApplicationResourceModel extends \WellnessLiving\Custom\Wl\Skin\Application\Resource\ApplicationResourceModel
{
  /**
   * The application data. Key is the business key. 
   * Value is application resource data for that business.
   * Each element: 
   *
   * <dl>
   *   <dt>array `a_resource`</dt>
   *   <dd>
   *     List of resource groups for image generation. 
   *     <dl>
   *       <dt>array[] `a_group`</dt>
   *       <dd>
   *         Groups of images, such as icons, loading screens or screenshots. One element of this array is an array that
   * contains:
   *         <dl>
   *           <dt>array[] `a_image`</dt>
   *           <dd>
   *             A list of images in the group. One element contains parameters of an image:
   *             <dl>
   *               <dt>string[] `a_file`</dt>
   *               <dd>A list of fully qualified file names. This name is used to save files in final archive.</dd>
   * 
   *               <dt>bool `can_transparent`</dt>
   *               <dd>
   *                 Specified if this image can have transparent pixels.
   * <tt>true</tt> if it is allowed that there be transparent pixels.
   * <tt>false</tt> if it is required that all pixels be opaque.
   *               </dd>
   * 
   *               <dt>int `i_height`</dt>
   *               <dd>Required image height.</dd>
   * 
   *               <dt>int `i_width`</dt>
   *               <dd>Required image width.</dd>
   * 
   *               <dt>bool `is_require`</dt>
   *               <dd>Whether this image is required.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>string `s_class`</dt>
   *           <dd>CSS class for this images block.</dd>
   * 
   *           <dt>string `text_comment`</dt>
   *           <dd>Comment for images block.</dd>
   * 
   *           <dt>string `text_subtitle`</dt>
   *           <dd>Subtitle for images block.</dd>
   * 
   *           <dt>string `text_title`</dt>
   *           <dd>Title for images block.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `text_group`</dt>
   *       <dd>Title of the group.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_version`</dt>
   *   <dd>Application version number.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. </dd>
   * 
   *   <dt>string `s_google_id`</dt>
   *   <dd>Google OAuth client ID for this application.</dd>
   * 
   *   <dt>string `s_google_reverse`</dt>
   *   <dd>Reverse Google OAuth client ID used for deep linking.</dd>
   * 
   *   <dt>string `s_splash_color_android`</dt>
   *   <dd>Android splash screen background color in hex format.</dd>
   * 
   *   <dt>string `s_version_name`</dt>
   *   <dd>Application version name string (for example, '2.0.1').</dd>
   * 
   *   <dt>string `text_annotation`</dt>
   *   <dd>Short app store description.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Full app store description for iOS App Store.</dd>
   * 
   *   <dt>string `text_description_google`</dt>
   *   <dd>Full app store description for Google Play.</dd>
   * 
   *   <dt>string `text_domain`</dt>
   *   <dd>Application domain.</dd>
   * 
   *   <dt>string `text_keyword`</dt>
   *   <dd>App store search keywords.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Application internal name.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Application display title shown in app stores.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_application;

  /**
   * The business key.
   * Empty to get data for all businesses.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>