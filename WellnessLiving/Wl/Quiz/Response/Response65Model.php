<?php

namespace WellnessLiving\Wl\Quiz\Response;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Catalog\QuickPurchaseTypeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\Quiz\Activity\ActivitySid;

/**
 * Endpoint to work with quiz responses.
 *
 * @method WlModelRequest delete() Deletes the specified quiz response or list of responses for the given business.  Validates access privileges and removes the specified response records, updating any related search indexes and activity logs.
 * @method WlModelRequest get() Returns quiz response data including element answers, dates, and access information.  Loads the response for the specified quiz and user, resolving answers, formatted dates, and access flags such as amendment availability and PDF generation support.
 * @method WlModelRequest post() Saves a quiz response with the given element answers.  Validates the submitted answers and persists the response record in a transaction. If {@link \Core\Quiz\QuizResponseApi::$is_validate_only} is set, only validation runs and no record is created. Pass {@link \Core\Quiz\QuizResponseApi::$is_skip} to bypass validation for pre-confirmed responses.
 * @method WlModelRequest put() Validates, updates and reindex response information for associated user.  Used to amend an already-submitted response, for example when a business allows clients to edit their quiz answers after submission. Re-links the response to its owner and triggers downstream reindexing so search and reporting stay consistent.
 */
class Response65Model extends WlModelAbstract
{
  /**
   * Access log data.
   *
   * <dl>
   *   <dt>string `dtu_activity`</dt>
   *   <dd>Date and time of the quiz changes.</dd>
   * 
   *   <dt>string `uid_actor`</dt>
   *   <dd>User's key. </dd>
   * 
   *   <dt>int `id_activity`</dt>
   *   <dd>One of {@link ActivitySid} constants.</dd>
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
   * List of quiz questions with responses.
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
   * Elements' uploaded files.
   *
   * @post post
   * @var array[]
   */
  public $a_element_file = [];

  /**
   * List of purchase items for which this form is loaded.
   *
   * The list of purchase items.
   * Each element has the format `[id_purchase_item]::[k_id]`, where: 
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
   * @post post
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * Data for Quick Buy. Empty array if this is not a Quick Buy session.
   *
   * <dl>
   *   <dt>int `id_table`</dt>
   *   <dd>Quick purchase type.
   * One of {@link QuickPurchaseTypeSid} constant.</dd>
   * 
   *   <dt>bool `is_quick_buy`</dt>
   *   <dd>
   *     Whether quick buy mode should be used. It means that specific template will be loaded and specific cart will be used.
   *   </dd>
   * 
   *   <dt>string `k_appointment`</dt>
   *   <dd>Appointment key to pay for. </dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>Item key within <var>id_table</var> table that Quick Buy performed for.</dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>Visit key to pay for. </dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User that Quick Buy performed for.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_quick_config = [];

  /**
   * Quiz response key list.
   *
   * @delete get
   * @put get
   * @var string[]
   */
  public $a_quiz_response_key = [];

  /**
   * Information about service if response connected to visit.
   * Empty array if the response is not connected to a visit: 
   *
   * <dl>
   *   <dt>string `text_date`</dt>
   *   <dd>Formatted visit date and time in the location's time zone.</dd>
   * 
   *   <dt>string `text_location`</dt>
   *   <dd>Location title.</dd>
   * 
   *   <dt>string `text_service`</dt>
   *   <dd>Service title.</dd>
   * 
   *   <dt>string `text_staff_member`</dt>
   *   <dd>Comma-separated list of full names of staff members conducting the visit.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_service_info;

  /**
   * Whether response can be amended by current user.
   *
   * @get result
   * @var bool
   */
  public $can_amend;

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
   * Date when response was submitted.
   *
   * @get result
   * @var string
   */
  public $dtu_response;

  /**
   * The mode type.
   *
   * @delete get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Response source. One of {@link SourceSid} constants.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_source = 0;

  /**
   * Response status ID.
   *
   * @get result
   * @var int
   */
  public $id_status = 0;

  /**
   * `true` for load answers for response, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_answer = true;

  /**
   * @inheritDoc
   * @get get
   * @post get
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` if need to save response in draft mode, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_draft = false;

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
   * Whether the quiz needs to be skipped.
   *
   * @post post
   * @var bool
   */
  public $is_skip = false;

  /**
   * `true` if need make only validation, `false` need make validation and saving response.
   *
   * @post post
   * @var bool
   */
  public $is_validate_only = false;

  /**
   * List of quiz questions with responses in JSON format.
   *
   * @post post
   * @var string
   */
  public $json_element = '';

  /**
   * Quiz response key list.
   *
   * @delete post
   * @put post
   * @var string
   */
  public $json_quiz_response_key = '';

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
   * Quiz key.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $k_quiz = '';

  /**
   * Quiz login key.
   *
   * @post post
   * @var string
   * @link QuizLoginSql
   */
  public $k_quiz_login = '';

  /**
   * Quiz response key.
   *
   * `null` in a case of response creation or
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string|null
   */
  public $k_quiz_response = null;

  /**
   * Secret key for access to quiz request.
   *
   * @post post
   * @var string
   */
  public $s_secret = '';

  /**
   * Whether to show numbering of the form elements that supports numbering.
   *
   * `true` to show numbering on the form for elements that supports numbering.
   * `false` to not show numbering.
   *
   * @get result
   * @var bool
   */
  public $show_numbering = true;

  /**
   * Date when response added.
   *
   * @get result
   * @var string
   */
  public $text_add_date = '';

  /**
   * Date when response amended.
   *
   * @get result
   * @var string
   */
  public $text_amend_date = '';

  /**
   * Name of the user who amend the response.
   *
   * @get result
   * @var string
   */
  public $text_amend_user = '';

  /**
   * Booking appointment wizard ID.
   * Not `null` if quiz response was sent during booking appointment process.
   *
   * @post post
   * @var string|null
   */
  public $text_appointment_wizard_id = null;

  /**
   * Booking class wizard ID.
   * Not `null` if quiz response was sent during booking class process.
   *
   * @post post
   * @var string|null
   */
  public $text_class_wizard_id = null;

  /**
   * Date when response completed.
   *
   * @get result
   * @var string
   */
  public $text_complete_date = '';

  /**
   * Name of the user who complete the response.
   *
   * @get result
   * @var string
   */
  public $text_complete_user = '';

  /**
   * Name of the user who owned the response.
   *
   * @get result
   * @var string
   */
  public $text_response_by = '';

  /**
   * Title of the filled form.
   *
   * `null` in case when not filled yet.
   *
   * @get result
   * @var string|null
   */
  public $text_title = null;

  /**
   * User's key for the response association.
   *
   * @put get
   * @var string|null
   */
  public $uid_link = null;

  /**
   * UID of the user who makes response for quiz.
   *
   * @post post
   * @var string|null
   */
  public $uid_response = null;
}

?>