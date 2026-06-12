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
   * /**
 * Element which represents checkbox selection list.
 */
Class [ <user> class Core\Quiz\Element\Checkbox\Checkbox extends Core\Quiz\Element\Dropdown\Dropdown ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Checkbox/Checkbox.php 10-29

  - Constants [11] {
    Constant [ public int CID ] { 1125 }
    Constant [ public bool FIRST_EMPTY_IS ] {  }
    Constant [ public int OPTION_MAX ] { 100 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [14] {
    Property [ public bool $is_multiple = true ]
    Property [ public array $a_answer = [] ]
    Property [ public array $a_list = [] ]
    Property [ public string $html_description = '' ]
    Property [ public string $html_question = '' ]
    Property [ public string $text_description = '' ]
    Property [ public string $text_question = '' ]
    Property [ public string $xml_description = '' ]
    Property [ public string $xml_question = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [28] {
    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 104 - 127

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string[] $a_options List of options of the list.
   * @return UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown> protected method _validateArray ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 136 - 178

      - Parameters [2] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> array $a_options ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 184 - 193

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 198 - 201

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 207 - 224

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Dropdown\Dropdown ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 229 - 254

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 259 - 270

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 277 - 320

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents single line divide.
 */
Class [ <user> class Core\Quiz\Element\Divide\Divide extends Core\Quiz\Element\ElementStyleAbstract ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Divide/Divide.php 11-113

  - Constants [9] {
    Constant [ public int CID ] { 1112 }
    Constant [ public bool CAN_CSV ] {  }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public bool HAS_NUMBERING ] {  }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [10] {
    Property [ public string $html_heading = '' ]
    Property [ public string $html_subheading = '' ]
    Property [ public string $text_heading = '' ]
    Property [ public string $text_subheading = '' ]
    Property [ public string $xml_heading = '' ]
    Property [ public string $xml_subheading = '' ]
    Property [ public array $a_amendment = [] ]
    Property [ public bool $is_require = false ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [27] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Divide/Divide.php 70 - 74

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Divide/Divide.php 80 - 97

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Divide\Divide ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Divide/Divide.php 102 - 112

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 19 - 22

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 28 - 31

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 37 - 40

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents a single or multiple option line answer.
 */
Class [ <user> class Core\Quiz\Element\Dropdown\Dropdown extends Core\Quiz\Element\ElementQuestionAbstract ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 11-321

  - Constants [11] {
    Constant [ public int CID ] { 1128 }
    Constant [ public bool FIRST_EMPTY_IS ] { 1 }
    Constant [ public int OPTION_MAX ] { 100 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [14] {
    Property [ public array $a_answer = [] ]
    Property [ public array $a_list = [] ]
    Property [ public string $html_description = '' ]
    Property [ public string $html_question = '' ]
    Property [ public bool $is_multiple = false ]
    Property [ public string $text_description = '' ]
    Property [ public string $text_question = '' ]
    Property [ public string $xml_description = '' ]
    Property [ public string $xml_question = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [28] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementQuestionAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 104 - 127

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string[] $a_options List of options of the list.
   * @return UserException In a case validation failed.
   */
    Method [ <user> protected method _validateArray ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 136 - 178

      - Parameters [2] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> array $a_options ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 184 - 193

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 198 - 201

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 207 - 224

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Dropdown\Dropdown ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 229 - 254

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 259 - 270

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 277 - 320

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents Image.
 */
Class [ <user> class Core\Quiz\Element\Image\Image extends Core\Quiz\Element\ElementStyleAbstract implements Core\Quiz\Element\ElementFileInterface ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 17-335

  - Constants [11] {
    Constant [ public int CID ] { 1122 }
    Constant [ public string IMAGE_UPLOAD_CLASS ] { Core\Quiz\QuizElementImage }
    Constant [ public bool CAN_CSV ] {  }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public bool HAS_NUMBERING ] {  }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
    Constant [ public string FILE_HASH_KEY ] { _file_hash }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [13] {
    Property [ public bool $has_duplicate = false ]
    Property [ public string $html_caption = '' ]
    Property [ public string $html_heading = '' ]
    Property [ public string $html_subheading = '' ]
    Property [ public string $k_id_source = '' ]
    Property [ public string $s_command = '' ]
    Property [ public string $text_caption = '' ]
    Property [ public string $xml_heading = '' ]
    Property [ public string $xml_subheading = '' ]
    Property [ public array $a_amendment = [] ]
    Property [ public bool $is_require = false ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [29] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 101 - 106

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Validates image.
   *
   * @return  UserException In a case of an error that should be shown to end user.
   */
    Method [ <user> protected method _validateImage ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 113 - 136

      - Parameters [0] {
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, prototype Core\Quiz\Element\ElementFileInterface> public method fileHash ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 141 - 153

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 158 - 168

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Image\Image ]
    }

    /**
   * @inheritDoc
   * @throws \AImageException In a case of the image exception.
   * @throws UserException In a case of an error that should be shown to end user.
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 176 - 227

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 232 - 299

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 304 - 317

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Image/Image.php 322 - 334

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 19 - 22

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 28 - 31

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 37 - 40

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents Image Markup.
 */
Class [ <user> class Core\Quiz\Element\ImageMarkup\ImageMarkup extends Core\Quiz\Element\ElementQuestionAbstract implements Core\Quiz\Element\ElementAttachInterface ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 16-295

  - Constants [9] {
    Constant [ public int CID ] { 1260 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [19] {
    Property [ public bool $can_upload = false ]
    Property [ public string $html_heading = '' ]
    Property [ public string $html_subheading = '' ]
    Property [ public bool $is_delete_custom_markup_image = false ]
    Property [ public string $k_id = 'ImageMarkupId' ]
    Property [ public string $k_id_custom_markup_image = '' ]
    Property [ public string $s_link_default_markup_image = '' ]
    Property [ public string $text_heading = '' ]
    Property [ public string $text_subheading = '' ]
    Property [ public string $url_custom_default_image = '' ]
    Property [ public string $xml_heading = '' ]
    Property [ public string $xml_subheading = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
    Property [ public array $a_markup_image = [] ]
    Property [ public string $s_markup_image = '' ]
  }

  - Methods [30] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementQuestionAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 125 - 138

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, prototype Core\Quiz\Element\ElementAttachInterface> public method attachContent ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 143 - 154

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 160 - 163

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 168 - 171

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 177 - 194

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\ImageMarkup\ImageMarkup ]
    }

    /**
   * Returns the element key.
   *
   * @return string|null The quiz element key.
   */
    Method [ <user> public method getQuizElementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 202 - 205

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * @inheritDoc
   * @throws \AImageException In a case of the image exception.
   * @throws UserException In a case of user-level errors.
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 213 - 249

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 254 - 264

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/ImageMarkup.php 270 - 294

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   *    * Loads content of markup file.
   *    *
   *    * @throws DebugException In case of file mime-type error.
   *    */
    Method [ <user> protected method _markupFileToString ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/MarkupImageTrait.php 37 - 65

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
:
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
   * /**
 * Element represents initials signature.
 */
Class [ <user> class Core\Quiz\Element\Initials\Initials extends Core\Quiz\Element\Signature\Signature ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Initials/Initials.php 12-41

  - Constants [9] {
    Constant [ public int CID ] { 1124 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [14] {
    Property [ public string $html_heading = '' ]
    Property [ public string $html_signature_footer = '' ]
    Property [ public string $html_signature_header = '' ]
    Property [ public string $html_subheading = '' ]
    Property [ public string $s_signature = '' ]
    Property [ public string $text_heading = '' ]
    Property [ public string $text_subheading = '' ]
    Property [ public string $xml_heading = '' ]
    Property [ public string $xml_subheading = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [27] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\Signature\Signature, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Initials/Initials.php 23 - 26

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Initials/Initials.php 31 - 40

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Signature\Signature, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 96 - 106

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Signature\Signature, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 111 - 123

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Signature\Signature, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 129 - 132

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Signature\Signature, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 146 - 163

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Signature\Signature ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Signature\Signature, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 168 - 178

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Signature\Signature, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 185 - 207

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents single line answer.
 */
Class [ <user> class Core\Quiz\Element\Input\Input extends Core\Quiz\Element\ElementQuestionAbstract ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 11-160

  - Constants [10] {
    Constant [ public int CID ] { 1111 }
    Constant [ public int LENGTH_ANSWER_MAX ] { 125 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [12] {
    Property [ public string $html_description = '' ]
    Property [ public string $html_question = '' ]
    Property [ public string $text_answer = '' ]
    Property [ public string $text_description = '' ]
    Property [ public string $text_question = '' ]
    Property [ public string $xml_description = '' ]
    Property [ public string $xml_question = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [27] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementQuestionAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 83 - 90

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 96 - 99

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 104 - 107

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 113 - 130

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Input\Input ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 135 - 145

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 152 - 159

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Represents form element with single input answer.
 */
Class [ <user> class Core\Quiz\Element\PageBreak\PageBreak extends Core\Quiz\Element\ElementStyleAbstract ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/PageBreak/PageBreak.php 10-33

  - Constants [9] {
    Constant [ public int CID ] { 1113 }
    Constant [ public bool CAN_CSV ] {  }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public bool HAS_NUMBERING ] {  }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [4] {
    Property [ public array $a_amendment = [] ]
    Property [ public bool $is_require = false ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [27] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/PageBreak/PageBreak.php 21 - 24

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/PageBreak/PageBreak.php 29 - 32

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 19 - 22

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 28 - 31

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 37 - 40

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Fills object with data from database.
   *
   * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @param string|null $z_
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 182 - 189

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents radio selection list.
 */
Class [ <user> class Core\Quiz\Element\Radio\Radio extends Core\Quiz\Element\Checkbox\Checkbox ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Radio/Radio.php 10-24

  - Constants [11] {
    Constant [ public int CID ] { 1127 }
    Constant [ public bool FIRST_EMPTY_IS ] {  }
    Constant [ public int OPTION_MAX ] { 100 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [14] {
    Property [ public bool $is_multiple = false ]
    Property [ public array $a_answer = [] ]
    Property [ public array $a_list = [] ]
    Property [ public string $html_description = '' ]
    Property [ public string $html_question = '' ]
    Property [ public string $text_description = '' ]
    Property [ public string $text_question = '' ]
    Property [ public string $xml_description = '' ]
    Property [ public string $xml_question = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [28] {
    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 104 - 127

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string[] $a_options List of options of the list.
   * @return UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown> protected method _validateArray ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 136 - 178

      - Parameters [2] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> array $a_options ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 184 - 193

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 198 - 201

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 207 - 224

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Dropdown\Dropdown ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 229 - 254

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 259 - 270

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Dropdown\Dropdown, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Dropdown/Dropdown.php 277 - 320

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents rating element.
 */
Class [ <user> class Core\Quiz\Element\Rate\Rate extends Core\Quiz\Element\ElementQuestionAbstract ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Rate/Rate.php 11-199

  - Constants [10] {
    Constant [ public int CID ] { 1121 }
    Constant [ public array SCALE_LIST ] { Array }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [13] {
    Property [ public string $html_description = '' ]
    Property [ public string $html_question = '' ]
    Property [ public int $i_rate = 0 ]
    Property [ public int $i_scale = 0 ]
    Property [ public string $text_description = '' ]
    Property [ public string $text_question = '' ]
    Property [ public string $xml_description = '' ]
    Property [ public string $xml_question = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [27] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementQuestionAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Rate/Rate.php 97 - 105

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Rate/Rate.php 111 - 114

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Rate/Rate.php 119 - 122

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Rate/Rate.php 128 - 145

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Rate\Rate ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Rate/Rate.php 150 - 164

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Rate/Rate.php 169 - 183

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Rate/Rate.php 190 - 198

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents Side-by-Side element.
 */
Class [ <user> class Core\Quiz\Element\SideBySide\SideBySide extends Core\Quiz\Element\ElementQuestionAbstract implements Core\Quiz\Element\ElementAttachInterface ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 17-472

  - Constants [11] {
    Constant [ public bool CALL_SAVE_ON_DRAFT ] { 1 }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] { 1 }
    Constant [ public int CID ] { 1651 }
    Constant [ public int LENGTH_LEFT_IMAGE_TITLE_MAX ] { 32 }
    Constant [ public int LENGTH_RIGHT_IMAGE_TITLE_MAX ] { 32 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [20] {
    Property [ public bool $has_duplicate = false ]
    Property [ public string $html_heading = '' ]
    Property [ public string $html_subheading = '' ]
    Property [ public string $k_id_image_left = '' ]
    Property [ public string $k_id_image_right = '' ]
    Property [ public string $k_id_source_left = '' ]
    Property [ public string $k_id_source_right = '' ]
    Property [ public string $s_command_left = '' ]
    Property [ public string $s_command_right = '' ]
    Property [ public string $text_left_image = '' ]
    Property [ public string $text_right_image = '' ]
    Property [ public string $xml_heading = '' ]
    Property [ public string $xml_subheading = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
    Property [ public array $a_markup_image = [] ]
    Property [ public string $s_markup_image = '' ]
  }

  - Methods [33] {
    /**
   * Duplicates an image from another element to the current element.
   *
   * @param string $text_class Image class.
   * @param string $text_source_link Source image link.
   * @throws UserException In a case of a user-level error.
   */
    Method [ <user> protected method _duplicateImage ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 153 - 172

      - Parameters [2] {
        Parameter #0 [ <required> string $text_class ]
        Parameter #1 [ <required> string $text_source_link ]
      }
      - Return [ void ]
    }

    /**
   * Saves an image using one of the saving methods.
   *
   * @param string $text_class Image class.
   * @param string $text_command Command.
   * @param string|null $text_image_link Image link.
   * @param string|null $text_source_link Source image link.
   * @throws UserException In a case of a user-level error.
   */
    Method [ <user> protected method _save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 183 - 194

      - Parameters [4] {
        Parameter #0 [ <required> string $text_class ]
        Parameter #1 [ <required> string $text_command ]
        Parameter #2 [ <required> ?string $text_image_link ]
        Parameter #3 [ <required> ?string $text_source_link ]
      }
      - Return [ void ]
    }

    /**
   * Saves an image to the current element.
   *
   * @param string $text_class Image class.
   * @param string $text_command Command.
   */
    Method [ <user> protected method _saveImage ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 202 - 227

      - Parameters [2] {
        Parameter #0 [ <required> string $text_class ]
        Parameter #1 [ <required> string $text_command ]
      }
      - Return [ void ]
    }

    /**
   * Saves an custom image to the current response.
   *
   * @param string $text_class Image class.
   * @param string $text_image_link Custom image link.
   * @throws UserException In a case of a user-level error.
   */
    Method [ <user> protected method _saveResponseImage ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 236 - 245

      - Parameters [2] {
        Parameter #0 [ <required> string $text_class ]
        Parameter #1 [ <required> string $text_image_link ]
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementQuestionAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 250 - 265

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, prototype Core\Quiz\Element\ElementAttachInterface> public method attachContent ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 270 - 281

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 286 - 289

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 294 - 297

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 302 - 311

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\SideBySide\SideBySide ]
    }

    /**
   * @inheritDoc
   * @throws UserException In a case of a user-level error.
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 318 - 332

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 337 - 404

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 409 - 423

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 428 - 441

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/SideBySide/SideBySide.php 447 - 471

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   *    * Loads content of markup file.
   *    *
   *    * @throws DebugException In case of file mime-type error.
   *    */
    Method [ <user> protected method _markupFileToString ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ImageMarkup/MarkupImageTrait.php 37 - 65

      - Parameters [0] {
      }
      - Return [ void ]
    }
  }
}
:
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
   * /**
 * Element which represents signature.
 */
Class [ <user> class Core\Quiz\Element\Signature\Signature extends Core\Quiz\Element\ElementQuestionAbstract ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 11-208

  - Constants [9] {
    Constant [ public int CID ] { 1123 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [14] {
    Property [ public string $html_heading = '' ]
    Property [ public string $html_signature_footer = '' ]
    Property [ public string $html_signature_header = '' ]
    Property [ public string $html_subheading = '' ]
    Property [ public string $s_signature = '' ]
    Property [ public string $text_heading = '' ]
    Property [ public string $text_subheading = '' ]
    Property [ public string $xml_heading = '' ]
    Property [ public string $xml_subheading = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [27] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 96 - 106

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementQuestionAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 111 - 123

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 129 - 132

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 137 - 140

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 146 - 163

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Signature\Signature ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 168 - 178

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Signature/Signature.php 185 - 207

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents custom text.
 */
Class [ <user> class Core\Quiz\Element\Text\Text extends Core\Quiz\Element\ElementStyleAbstract ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Text/Text.php 11-111

  - Constants [9] {
    Constant [ public int CID ] { 1117 }
    Constant [ public bool CAN_CSV ] {  }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public bool HAS_NUMBERING ] {  }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [10] {
    Property [ public string $html_content = '' ]
    Property [ public string $html_heading = '' ]
    Property [ public string $text_content = '' ]
    Property [ public string $text_heading = '' ]
    Property [ public string $xml_content = '' ]
    Property [ public string $xml_heading = '' ]
    Property [ public array $a_amendment = [] ]
    Property [ public bool $is_require = false ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [27] {
    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Text/Text.php 68 - 72

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Tool\DbEntityAbstract, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Text/Text.php 78 - 95

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Text\Text ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, overwrites Core\Quiz\Element\ElementAbstract, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Text/Text.php 100 - 110

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 19 - 22

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 28 - 31

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   * @test Method is final and does nothing. No test required.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementStyleAbstract, prototype Core\Quiz\Element\ElementAbstract> final public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementStyleAbstract.php 37 - 40

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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
   * /**
 * Element which represents multiple line answer.
 */
Class [ <user> class Core\Quiz\Element\Textarea\Textarea extends Core\Quiz\Element\Input\Input ] {
  @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Textarea/Textarea.php 10-22

  - Constants [10] {
    Constant [ public int CID ] { 1114 }
    Constant [ public int LENGTH_ANSWER_MAX ] { 10000 }
    Constant [ public bool HAS_NUMBERING ] { 1 }
    Constant [ public bool CALL_SAVE_ON_DRAFT ] {  }
    Constant [ public bool CALL_SAVE_ON_RESPONSE ] {  }
    Constant [ public bool CAN_CSV ] { 1 }
    Constant [ public array CID_SUFFIX ] { Array }
    Constant [ public int LENGTH_LONG_MAX ] { 10000 }
    Constant [ public int LENGTH_SHORT_MAX ] { 2000 }
    Constant [ protected string VERSION ] { 1 }
  }

  - Static properties [3] {
    Property [ protected static array $a_field_question = [] ]
    Property [ protected static array $a_field_response = [] ]
    Property [ protected static $_a_field = [] ]
  }

  - Static methods [11] {
    /**
   * Creates an object to operate with new element.
   *
   * @param int $cid CID of the element for which object should be created.
   * @param string|null $k_quiz_element Quiz element key.
   * @return ElementAbstract Created object.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method createCid ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 355 - 365

      - Parameters [2] {
        Parameter #0 [ <required> int $cid ]
        Parameter #1 [ <required> ?string $k_quiz_element ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Retrieves information about all fields represented by this data class.
   *
   * @return DbPropertyEntity[] A list of all fields in this class. Key is name of the property.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> static protected method field ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 51 - 114

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Returns a list of all CID classes.
   *
   * If called on a class that uses this trait, it returns only subclasses of that class.
   *
   * @param bool $is_test Whether test classes should be included in the result.
   * @return string[] Key is class CID, value is class name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAll ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 45 - 124

      - Parameters [1] {
        Parameter #0 [ <optional> bool $is_test = true ]
      }
      - Return [ array ]
    }

    /**
   * Asserts that CID of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid <tt>cid-hash</tt> value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssert ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 132 - 180

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Asserts that CID suffix of current class is valid.
   *
   * @test Testing this method would require to add a class with an invalid suffix.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidAssertSuffix ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 188 - 228

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns class name that corresponds specified CID.
   *
   * If called through a class, only classes that are subclasses of that class are returned.
   *
   * @param int $cid Class CID.
   * @return string|null Class name. <tt>null</tt> if class with specified CID does not exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidClass ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 241 - 245

      - Parameters [1] {
        Parameter #0 [ <required> int $cid ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns random CID value related to current class.
   *
   * @test Part of the testing system.
   * @return int Random CID value.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRandom ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 266 - 271

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Registers a new class.
   *
   * Updates <tt>CID</tt> constant value and its hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRegister ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 281 - 389

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Call this method if you've renamed a CID class.
   *
   * Updates <tt>CID</tt> hash.
   * File should be writable in order to execute this method.
   *
   * @test This method updates sources. This functionality can not be tested.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidRename ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 399 - 520

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns textual signature of the class.
   *
   * May be used for variety of applications like inserting as part of CSS class.
   *
   * @param int|null $cid CID of the class, or <tt>null</tt> if called directly on desired class.
   * @return string|null Textual signature of the class or <tt>null</tt> if class referred by CID doesn't exist.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidString ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 530 - 540

      - Parameters [1] {
        Parameter #0 [ <optional> ?int $cid = NULL ]
      }
      - Return [ ?string ]
    }

    /**
   * Returns class title of current class.
   *
   * @param string $s_context Additional context for title.
   * @return string Class title.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> static public method cidTitle ] {
      @@ /home/compile/data/build/69/pack.Core/Sid/CidTrait.php 548 - 564

      - Parameters [1] {
        Parameter #0 [ <optional> string $s_context = '' ]
      }
      - Return [ string ]
    }
  }

  - Properties [12] {
    Property [ public string $html_description = '' ]
    Property [ public string $html_question = '' ]
    Property [ public string $text_answer = '' ]
    Property [ public string $text_description = '' ]
    Property [ public string $text_question = '' ]
    Property [ public string $xml_description = '' ]
    Property [ public string $xml_question = '' ]
    Property [ public bool $is_require = false ]
    Property [ public ?string $text_note = NULL ]
    Property [ public array $a_amendment = [] ]
    Property [ protected ?string $k_quiz_element = NULL ]
    Property [ public ?string $k_quiz_element_old = NULL ]
  }

  - Methods [27] {
    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Input\Input, prototype Core\Quiz\Element\ElementAbstract> protected method _testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 83 - 90

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Input\Input, prototype Core\Quiz\Element\ElementAbstract> public method csvAnswerText ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 96 - 99

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Input\Input, prototype Core\Quiz\Element\ElementAbstract> public method csvQuestionXml ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 104 - 107

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Input\Input, prototype Core\Tool\DbEntityAbstract> public method fromDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 113 - 130

      - Parameters [1] {
        Parameter #0 [ <required> ?string $z_value ]
      }
      - Return [ Core\Quiz\Element\Input\Input ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Input\Input, prototype Core\Quiz\Element\ElementAbstract> public method validateQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 135 - 145

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * @inheritDoc
   */
    Method [ <user, inherits Core\Quiz\Element\Input\Input, prototype Core\Quiz\Element\ElementAbstract> public method validateResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/Input/Input.php 152 - 159

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Creates new object.
   *
   * @param string|null $k_quiz_element Quiz element key in a case if element already saved. Primary key in
   *
   *  `null` in a case if element is new.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract, ctor> public method __construct ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 205 - 218

      - Parameters [1] {
        Parameter #0 [ <optional> ?string $k_quiz_element = NULL ]
      }
    }

    /**
   * Validates length of the field value.
   *
   * @param string $s_field Name of the validated field.
   * @param string $text_value Value of the validated field.
   * @param int $i_length_max Max length for validation.
   * @param int $i_length_min Min length for validation.
   * @param string $s_field_context The name of the field to be used in the context of the message.
   * @return  UserException In a case validation failed.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> protected method _validateLength ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 281 - 324

      - Parameters [5] {
        Parameter #0 [ <required> string $s_field ]
        Parameter #1 [ <required> string $text_value ]
        Parameter #2 [ <optional> int $i_length_max = self::LENGTH_SHORT_MAX ]
        Parameter #3 [ <optional> int $i_length_min = 0 ]
        Parameter #4 [ <optional> string $s_field_context = '' ]
      }
      - Return [ Core\Request\Api\UserException ]
    }

    /**
   * Whether elements is amending or not.
   *
   * @return bool `true` if element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendIs ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 332 - 335

      - Parameters [0] {
      }
      - Return [ bool ]
    }

    /**
   * Sets that element is amending.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method amendSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 342 - 345

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Returns element ID corresponded with current object.
   *
   * @return int Element ID.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementId ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 387 - 390

      - Parameters [0] {
      }
      - Return [ int ]
    }

    /**
   * Returns element key corresponded with current object.
   *
   * @return string|null Element key.
   *   `null` in a case if object is not corresponded with any key.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method elementKey ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 399 - 402

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Fills element files data from the array.
   *
   * @param array $a_element_file File's data where key is element property name.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method fromArrayFile ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 409 - 414

      - Parameters [1] {
        Parameter #0 [ <required> array $a_element_file ]
      }
      - Return [ void ]
    }

    /**
   * Returns element identifier which considered to be unique.
   *
   * @return string|null Element identifier.
   *   `null` in a case if identifier is not defined.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idGet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 423 - 426

      - Parameters [0] {
      }
      - Return [ ?string ]
    }

    /**
   * Sets element identifier which considered to be unique.
   *
   * @param string $s_id Element identifier.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method idSet ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 434 - 437

      - Parameters [1] {
        Parameter #0 [ <required> string $s_id ]
      }
      - Return [ void ]
    }

    /**
   * @param int $id_mode Render mode.
   * @return string Rendered element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method render ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 446 - 455

      - Parameters [1] {
        Parameter #0 [ <optional> int $id_mode = \Core\Quiz\RenderModeSid::REPORT ]
      }
      - Return [ string ]
    }

    /**
   * @return array Data to render element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method renderLoad ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 462 - 476

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Perform additional save element after transaction database.
   * Example: For save images.
   *
   * @test Base implementation does nothing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method save ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 484 - 487

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Saves element to database.
   *
   * !!! Attention !!!
   * In a case of modification of existing element that has responses already new element will be created.
   *
   * @return string Key of the saved element.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method saveDbTrx ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 497 - 562

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Fills random data for test.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> final public method testElementFill ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 567 - 572

      - Parameters [0] {
      }
      - Return [ void ]
    }

    /**
   * Converts response part of the element to array.
   *
   * @return array Value in array format.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toArrayResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 580 - 592

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts question part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbQuestion ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 599 - 615

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Converts response part of the element to the value ready to be saved to database.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method toDbResponse ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 623 - 626

      - Parameters [0] {
      }
      - Return [ string ]
    }

    /**
   * Replaces variables by passed values in the question fields.
   *
   * @param string[] $a_variable List of variable to replace.
   *   Key is name of variable.
   *   Value is value of variable.
   * @return $this Current object after replacing.
   */
    Method [ <user, inherits Core\Quiz\Element\ElementAbstract> public method variableApply ] {
      @@ /home/compile/data/build/69/pack.Core/Quiz/Element/ElementAbstract.php 650 - 680

      - Parameters [1] {
        Parameter #0 [ <required> array $a_variable ]
      }
      - Return [ Core\Quiz\Element\ElementAbstract ]
    }

    /**
   * Fills object with data from array.
   *
   * @param array|null $a_source Array with source values for current object.
   *   `null` if value is not defined. In this case object will not be modified.
   * @return DbEntityAbstract Current object with filled data.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method fromArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 124 - 166

      - Parameters [1] {
        Parameter #0 [ <required> ?array $a_source ]
      }
      - Return [ Core\Tool\DbEntityAbstract ]
    }

    /**
   * Converts current object to associative array.
   *
   * Where keys are object public properties and values are properties values.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return array Current object represented by associative array.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toArray ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 205 - 240

      - Parameters [0] {
      }
      - Return [ array ]
    }

    /**
   * Converts current object to value ready to be saved to database.
   *
   * * !!!ATTENTION!!!
   * *
   * * Changes to the structure of the result should be fully compatible with
   *   values that already stored in the database to prevent data loss.
   *
   * @return string Value ready to be saved to database.
   */
    Method [ <user, inherits Core\Tool\DbEntityAbstract> public method toDbValue ] {
      @@ /home/compile/data/build/69/pack.Core/Tool/DbEntityAbstract.php 254 - 266

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
:
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