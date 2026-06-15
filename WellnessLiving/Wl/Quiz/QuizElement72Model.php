<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlDurationTypeSid;

/**
 * Manages a single quiz.
 */
class QuizElement72Model extends WlModelAbstract
{
  /**
   * Access log data.
   *
   * <dl>
   *   <dt>string `dtu_activity`</dt>
   *   <dd>Date and time of the quiz changes.</dd>
   * 
   *   <dt>string `uid_actor`</dt>
   *   <dd>User's key. 
   * 
   *   <dt>int `id_activity`</dt>
   *
   * 
   *   <dt>string `text_activity`</dt>
   *   <dd>Title of the activity</dd>
   * 
   *   <dt>string `text_date`</dt>
   *   <dd>Date and time of the quiz changes in appropriate format string for further render.</dd>
   * 
   *   <dt>string `text_actor`</dt>
   *   <dd>Full name of the user who made an activity.</dd>
   * 
   *   <dt>string `url_actor`</dt>
   *   <dd>Url for view information about the user who made activity (admin, staff, client).</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_access_log = [];

  /**
   * List of quiz elements.
   *
   * Each element responsible for one quiz element and structure of each value depend
   * on type of element and contains public arguments of responsible class element.
   *
   * Order of the elements in array corresponds to order of elements on the form.
   *
   * Parameters for `15`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int[] `a_answer`</dt>
   *   <dd>Answer array for selected question options.</dd>
   * 
   *   <dt>string[] `a_list`</dt>
   *   <dd>Array for a dropdown question's options.</dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string `html_question`</dt>
   *   <dd>Main html of the input question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_multiple`</dt>
   *   <dd>Answer can have multiple options selected.</dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_question`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string `xml_description`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * 
   *   <dt>string `xml_question`</dt>
   *   <dd>Main XML of the input question.</dd>
   * </dl>
   * 
   * Parameters for `2`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_heading`</dt>
   *   <dd>Additional HTML for detail description of the question.</dd>
   * 
   *   <dt>string `html_subheading`</dt>
   *   <dd>Main HTML of the input question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *   <dd>Whether element is required or not.
   * 
   * `true` if element is required.
   * `false` if element is not required.</dd>
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `text_heading`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string `text_subheading`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string `xml_heading`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * 
   *   <dt>string `xml_subheading`</dt>
   *   <dd>Main XML of the input question.</dd>
   * </dl>
   * 
   * Parameters for `5`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int[] `a_answer`</dt>
   *   <dd>Answer array for selected question options.</dd>
   * 
   *   <dt>string[] `a_list`</dt>
   *   <dd>Array for a dropdown question's options.</dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string `html_question`</dt>
   *   <dd>Main html of the input question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_multiple`</dt>
   *   <dd>Answer can have multiple options selected.</dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_question`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string `xml_description`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * 
   *   <dt>string `xml_question`</dt>
   *   <dd>Main XML of the input question.</dd>
   * </dl>
   * 
   * Parameters for `17`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `has_duplicate`</dt>
   *   <dd>Whether this element has a duplicate.
   * 
   * `true` if this element has a duplicate, otherwise `false`.</dd>
   * 
   *   <dt>string `html_caption`</dt>
   *   <dd>HTML of the image caption.</dd>
   * 
   *   <dt>string `html_heading`</dt>
   *   <dd>Main HTML of the image heading.</dd>
   * 
   *   <dt>string `html_subheading`</dt>
   *   <dd>Additional HTML for detail description of the image (optional).</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *   <dd>Whether element is required or not.
   * 
   * `true` if element is required.
   * `false` if element is not required.</dd>
   * 
   *   <dt>string `k_id_source`</dt>
   *   <dd>Image source key for duplicate.</dd>
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `s_command`</dt>
   *   <dd>Command for image save prepare.</dd>
   * 
   *   <dt>string `text_caption`</dt>
   *   <dd>Image caption.</dd>
   * 
   *   <dt>string `xml_heading`</dt>
   *   <dd>Main XML of the input question.</dd>
   * 
   *   <dt>string `xml_subheading`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * </dl>
   * 
   * Parameters for `16`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_markup_image`</dt>
   *   <dd>Markup images files.
   * 
   * Only PNG images are supported.</dd>
   * 
   *   <dt>bool `can_upload`</dt>
   *   <dd>
   *     Can user upload custom image.
   * 
   * User is allowed to upload custom images if they have the access to view the list of quizzes.
   *   </dd>
   * 
   *   <dt>string `html_heading`</dt>
   *   <dd>Main HTML of the input question.</dd>
   * 
   *   <dt>string `html_subheading`</dt>
   *   <dd>Additional HTML for detail description of the question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_delete_custom_markup_image`</dt>
   *   <dd><tt> true </tt> if custom markup image is to be deleted <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>
   *     Fake id used for image upload.
   * 
   * A fake id is being used because we are not going to save the image directly from upload.
   * Element key will be appended to make it unique.
   *   </dd>
   * 
   *   <dt>string `k_id_custom_markup_image`</dt>
   *   <dd>Image ID of the temporary uploaded custom markup image to be copied as permanent drive link.</dd>
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `s_link_default_markup_image`</dt>
   *   <dd>Link of the source default markup image to copy to the element.</dd>
   * 
   *   <dt>string `s_markup_image`</dt>
   *   <dd>Post-Markup image binary text.</dd>
   * 
   *   <dt>string `text_heading`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_subheading`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string `url_custom_default_image`</dt>
   *   <dd>Custom default image path.</dd>
   * 
   *   <dt>string `xml_heading`</dt>
   *   <dd>Main XML of the input question.</dd>
   * 
   *   <dt>string `xml_subheading`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * </dl>
   * 
   * Parameters for `13`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_heading`</dt>
   *   <dd>Additional html for detail description of the question.</dd>
   * 
   *   <dt>string `html_signature_footer`</dt>
   *   <dd>Footer text of signature pad.</dd>
   * 
   *   <dt>string `html_signature_header`</dt>
   *   <dd>Header text of signature pad.</dd>
   * 
   *   <dt>string `html_subheading`</dt>
   *   <dd>Main html of the input question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `s_signature`</dt>
   *   <dd>Signature binary text.</dd>
   * 
   *   <dt>string `text_heading`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_subheading`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string `xml_heading`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * 
   *   <dt>string `xml_subheading`</dt>
   *   <dd>Main XML of the input question.</dd>
   * </dl>
   * 
   * Parameters for `1`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Additional HTML for detail description of the question.</dd>
   * 
   *   <dt>string `html_question`</dt>
   *   <dd>Main HTML of the input question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `text_answer`</dt>
   *   <dd>Answer text for a question.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_question`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string `xml_description`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * 
   *   <dt>string `xml_question`</dt>
   *   <dd>Main XML of the input question.</dd>
   * </dl>
   * 
   * Parameters for `3`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *   <dd>Whether element is required or not.
   * 
   * `true` if element is required.
   * `false` if element is not required.</dd>
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * </dl>
   * 
   * Parameters for `6`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int[] `a_answer`</dt>
   *   <dd>Answer array for selected question options.</dd>
   * 
   *   <dt>string[] `a_list`</dt>
   *   <dd>Array for a dropdown question's options.</dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string `html_question`</dt>
   *   <dd>Main html of the input question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_multiple`</dt>
   *   <dd>Answer can have multiple options selected.</dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_question`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string `xml_description`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * 
   *   <dt>string `xml_question`</dt>
   *   <dd>Main XML of the input question.</dd>
   * </dl>
   * 
   * Parameters for `12`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Sub-question html.</dd>
   * 
   *   <dt>string `html_question`</dt>
   *   <dd>Question html.</dd>
   * 
   *   <dt>int `i_rate`</dt>
   *   <dd>Selected rate.</dd>
   * 
   *   <dt>int `i_scale`</dt>
   *   <dd>Rate scale.
   * 
   *</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Sub-question text.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_question`</dt>
   *   <dd>Question text.</dd>
   * 
   *   <dt>string `xml_description`</dt>
   *   <dd>Sub-question XML.</dd>
   * 
   *   <dt>string `xml_question`</dt>
   *   <dd>Question XML.</dd>
   * </dl>
   * 
   * Parameters for `18`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_markup_image`</dt>
   *   <dd>Markup images files.
   * 
   * Only PNG images are supported.</dd>
   * 
   *   <dt>bool `has_duplicate`</dt>
   *   <dd>Whether this element has a duplicate.
   * 
   * `true` if this element has a duplicate, otherwise `false`.</dd>
   * 
   *   <dt>string `html_heading`</dt>
   *   <dd>Main HTML of the input question.</dd>
   * 
   *   <dt>string `html_subheading`</dt>
   *   <dd>Additional HTML for detail description of the question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string `k_id_image_left`</dt>
   *   <dd>Left response image key.</dd>
   * 
   *   <dt>string `k_id_image_right`</dt>
   *   <dd>Right response image key.</dd>
   * 
   *   <dt>string `k_id_source_left`</dt>
   *   <dd>Left image source key for duplicate.</dd>
   * 
   *   <dt>string `k_id_source_right`</dt>
   *   <dd>Right image source key for duplicate.</dd>
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `s_command_left`</dt>
   *   <dd>Command for left image save prepare.</dd>
   * 
   *   <dt>string `s_command_right`</dt>
   *   <dd>Command for right image save prepare.</dd>
   * 
   *   <dt>string `s_markup_image`</dt>
   *   <dd>Post-Markup image binary text.</dd>
   * 
   *   <dt>string `text_left_image`</dt>
   *   <dd>Title for left image.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_right_image`</dt>
   *   <dd>Title for right image.</dd>
   * 
   *   <dt>string `xml_heading`</dt>
   *   <dd>Main XML of the input question.</dd>
   * 
   *   <dt>string `xml_subheading`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * </dl>
   * 
   * Parameters for `11`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_heading`</dt>
   *   <dd>Additional html for detail description of the question.</dd>
   * 
   *   <dt>string `html_signature_footer`</dt>
   *   <dd>Footer text of signature pad.</dd>
   * 
   *   <dt>string `html_signature_header`</dt>
   *   <dd>Header text of signature pad.</dd>
   * 
   *   <dt>string `html_subheading`</dt>
   *   <dd>Main html of the input question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `s_signature`</dt>
   *   <dd>Signature binary text.</dd>
   * 
   *   <dt>string `text_heading`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_subheading`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string `xml_heading`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * 
   *   <dt>string `xml_subheading`</dt>
   *   <dd>Main XML of the input question.</dd>
   * </dl>
   * 
   * Parameters for `10`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_content`</dt>
   *   <dd>Main content HTML.</dd>
   * 
   *   <dt>string `html_heading`</dt>
   *   <dd>Heading HTML.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *   <dd>Whether element is required or not.
   * 
   * `true` if element is required.
   * `false` if element is not required.</dd>
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `text_content`</dt>
   *   <dd>Main content text.</dd>
   * 
   *   <dt>string `text_heading`</dt>
   *   <dd>Heading text.</dd>
   * 
   *   <dt>string `xml_content`</dt>
   *   <dd>Main content XML.</dd>
   * 
   *   <dt>string `xml_heading`</dt>
   *   <dd>Heading XML.</dd>
   * </dl>
   * 
   * Parameters for `4`:
   * <dl>
   *   <dt>array[] `a_amendment`</dt>
   *   <dd>
   *     List of amendments.
   * Each element has next structure:
   *     <dl>
   *       <dt>array `a_change`</dt>
   *       <dd>
   *         Information about amend.
   *    <dl>
   *      <dt>string `text_note`</dt>
   *      <dd>Change note.</dd>
   *    </dl>
   *         <dl>
   *           <dt>string `text_note`</dt>
   *           <dd>Change note.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dtu_action`</dt>
   *       <dd>Date/time when amend made.</dd>
   * 
   *       <dt>string `text_actor`</dt>
   *       <dd>Name of the amend actor.</dd>
   * 
   *       <dt>string `text_datetime`</dt>
   *       <dd>Date/time when amend made in textual view.</dd>
   * 
   *       <dt>string `uid_actor`</dt>
   *       <dd>UID of the amend actor.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Additional HTML for detail description of the question.</dd>
   * 
   *   <dt>string `html_question`</dt>
   *   <dd>Main HTML of the input question.</dd>
   * 
   *   <dt>int `id_element`</dt>
   *   <dd>
   *     Element ID.
   * 
   * Defined automatically according to the name of the class.
   *   </dd>
   * 
   *   <dt>bool `is_require`</dt>
   *
   * 
   *   <dt>string|null `k_quiz_element`</dt>
   *   <dd>Quiz element key.
   * 
   * `null` in a case if element is not saved in database.</dd>
   * 
   *   <dt>string|null `k_quiz_element_old`</dt>
   *   <dd>Old quiz element key.
   * 
   * `null` in a case if element is not has old version.</dd>
   * 
   *   <dt>string `text_answer`</dt>
   *   <dd>Answer text for a question.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Additional string for detail description of the question.</dd>
   * 
   *   <dt>string|null `text_note`</dt>
   *   <dd>Additional note for response.
   * 
   * `null` if no notes considered.</dd>
   * 
   *   <dt>string `text_question`</dt>
   *   <dd>Main text of the input question.</dd>
   * 
   *   <dt>string `xml_description`</dt>
   *   <dd>Additional XML for detail description of the question.</dd>
   * 
   *   <dt>string `xml_question`</dt>
   *   <dd>Main XML of the input question.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array[]
   */
  public $a_element = [];

  /**
   * Quiz settings.
   * *
   * <dl>
   *   <dt>string[] `a_notify_additional`</dt>
   *   <dd>
   *     List of additional email addresses which should receive email notification after quiz is submitted.
   *
   *   </dd>
   * 
   *   <dt>string[][] `a_service`</dt>
   *   <dd>
   *     List of services grouped by service ID.
   * 
   * Key is service ID.
   * Values is list of services.
   *   </dd>
   * 
   *   <dt>bool `hide_frontend`</dt>
   *   <dd>Whether completed forms should be hidden for client in frontend.</dd>
   * 
   *   <dt>int|string `i_notify_automated`</dt>
   *   <dd>
   *     Number of periods email reminders should be sent for incomplete forms after. Type of a period is specified by
   *
   * 
   * *   </dd>
   * 
   *   <dt>int `id_book_request_type`</dt>
   *   <dd>
   *     Whether response is required every time they book service.
   *
   *   </dd>
   * 
   *   <dt>int `id_notify_automated`</dt>
   *   <dd>Time interval ID. One of {@link ADurationSid} constants.</dd>
   * 
   *   <dt>int `id_purchase_request_type`</dt>
   *   <dd>
   *     Whether response is required every time they purchase service.
   *
   *   </dd>
   * 
   *   <dt>bool `is_amend_support`</dt>
   *   <dd>Whether form support amending responses.</dd>
   * 
   *   <dt>bool `is_book`</dt>
   *   <dd>
   *
   * * Related to options:
   * * * {@link Wl\Quiz\QuizSetting::$is_service_all}
   * * * {@link Wl\Quiz\QuizSetting::$is_book_before}
   * * * {@link Wl\Quiz\QuizSetting::$id_book_request_type}
   *   </dd>
   * 
   *   <dt>bool `is_book_before`</dt>
   *   <dd>
   *     Whether quiz is required during booking process.
   *
   *   </dd>
   * 
   *   <dt>bool `is_internal`</dt>
   *   <dd>
   *     Whether form can be required for clients.
   * Internal forms can be only added to client profiles or filled by direct link,
   *  but they don't prevent clients to perform any actions until form filled.
   *  `true` if form can be visible to clients
   *  `false` otherwise
   *   </dd>
   * 
   *   <dt>bool `is_notify_additional`</dt>
   *   <dd>
   *     Whether email notification should be sent to specific email addresses after quiz is submitted.
   *
   *   </dd>
   * 
   *   <dt>bool `is_notify_automated`</dt>
   *   <dd>Whether email reminders should be sent for incomplete forms.</dd>
   * 
   *   <dt>bool `is_notify_client`</dt>
   *   <dd>Whether email notification should be sent to client after quiz submitted.</dd>
   * 
   *   <dt>bool `is_notify_staff`</dt>
   *   <dd>Whether email notification should be sent to staff members after quiz is submitted.</dd>
   * 
   *   <dt>bool `is_prevent_franchisee`</dt>
   *   <dd>
   *     Whether form can be edited by franchisee.
   * `true` prevent franchisees from editing this form, `false` - otherwise.
   *   </dd>
   * 
   *   <dt>bool `is_private`</dt>
   *   <dd>
   *     Whether form can be viewed by staff member only after confirmation.
   * `true` if form can be viewed only after confirmation
   * `false` if form can be viewed always
   *   </dd>
   * 
   *   <dt>bool `is_purchase`</dt>
   *   <dd>
   *
   * Related to options:
   * * {@link Wl\Quiz\QuizSetting::$is_purchase_all}
   * * {@link Wl\Quiz\QuizSetting::$is_purchase_before}
   * * {@link Wl\Quiz\QuizSetting::$id_purchase_request_type}
   *   </dd>
   * 
   *   <dt>bool `is_purchase_all`</dt>
   *
   * 
   *   <dt>bool `is_purchase_before`</dt>
   *   <dd>
   *     Whether quiz is required during purchase process.
   *
   *   </dd>
   * 
   *   <dt>bool `is_register_after`</dt>
   *   <dd>Whether quiz is required after registration process.</dd>
   * 
   *   <dt>bool `is_register_before`</dt>
   *   <dd>
   *     Whether quiz is required during registration process.
   *
   *   </dd>
   * 
   *   <dt>bool `is_require_user`</dt>
   *   <dd>Whether client should be redirected to sign-in page before completing the form.</dd>
   * 
   *   <dt>bool `is_service_all`</dt>
   *
   * </dl>
   * @get result
   * @post post
   * @put result
   * @var array
   */
  public $a_setting = [];

  /**
   * Whether user has privileges to amend form.
   *
   * @get result
   * @var bool
   */
  public $can_amend = false;

  /**
   * Checks whether unauthorized user should be permitted to operate with form and make a response.
   * In general all quizzes should have users in response but it some cases such as registration process
   *  user might not exist yet, and we need ability to ignore check for user existence.
   * `true` - add possibility load form and accept response for non-registered user, `false` otherwise.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $can_anonymous = false;

  /**
   * Number of responses for specific quiz.
   *
   * @get result
   * @var int
   */
  public $i_responses = 0;

  /**
   * Quiz active status.
   *
   * `true` if quiz is active.
   * `false` if quiz is not active.
   *
   * @get result
   * @post post
   * @put post
   * @var bool
   */
  public $is_active = true;

  /**
   * `true` for request quiz from form builder page, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_builder = false;

  /**
   * `true` if quiz is imported, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_imported;

  /**
   * Whether form can be edited by franchisee.
   * `true` prevent franchisees from editing this form, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_prevent_franchisee = false;

  /**
   * Whether quiz response received by kiosk or direct mode link.
   *
   * `true` quiz response received by kiosk mode.
   * `false` quiz response received by direct or direct mode.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_simple = false;

  /**
   * List of quiz elements in json format.
   *
   * Order of the element in array corresponds to order of elements on the form.
   *
   * @post post
   * @var string
   */
  public $json_element = '';

  /**
   * List of purchase items for which this form is loaded in JSON format.
   *
   * This variable supports two structures:
   *
   * New structure:
   * Each element key has the format `[id_purchase_item]::[k_id]`, where: 
   *
   * Old structure:
   * Each element is a string in the format `[id_purchase_item]::[k_id]`.
   *
   * Empty in case when purchase item not specified or form loaded from direct link.
   *
   * <dl>
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>The ID of the purchase item. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The item key. This depends on <var>id_purchase_item</var> of this array.</dd>
   * </dl>
   * 
   * <dl>
   *   <dt>string|null `dl_start`</dt>
   *   <dd>Overridden start date of the purchase option.</dd>
   * 
   *   <dt>string|null `f_price`</dt>
   *   <dd>Overridden price of the purchase option.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Duration of the purchase option.</dd>
   * 
   *   <dt>int `i_payment_period`</dt>
   *   <dd>Payment period for the purchase option.</dd>
   * 
   *   <dt>int `id_duration`</dt>
   *   <dd>Duration type, one of {@link WlDurationTypeSid} constants.</dd>
   * </dl>
   * @get get
   * @var string
   */
  public $json_purchase_item = '';

  /**
   * Business key within which quiz is managed.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Business type key. Used only for forms in the system business.
   *
   * `null` if not initialized.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $k_business_type = null;

  /**
   * Quiz key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string
   */
  public $k_quiz = '';

  /**
   * Quiz login key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_quiz_login = '';

  /**
   * Whether to show numbering of the form elements that supports numbering.
   *
   * `true` to show numbering on the form for elements that supports numbering.
   * `false` to not show numbering.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $show_numbering = true;

  /**
   * Quiz form title.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * UID of the client for which quiz requested.
   *
   * @get get
   * @var string
   */
  public $uid_client = '';

  /**
   * Direct URL to quiz.
   *
   * @get result
   * @put result
   * @var string
   */
  public $url_quiz;

  /**
   * Kiosk direct URL to quiz.
   *
   * @get result
   * @put result
   * @var string
   */
  public $url_quiz_kiosk;
}

?>