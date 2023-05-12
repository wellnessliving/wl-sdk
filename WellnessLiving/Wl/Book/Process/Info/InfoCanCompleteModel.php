<?php

namespace WellnessLiving\Wl\Book\Process\Info;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that checks for `next` and `complete` buttons in the booking process.
 */
class InfoCanCompleteModel extends WlModelAbstract
{
    /**
     * Determines whether users can complete the booking process from the info step.
     *
     * This will be `null` if not set yet.
     *
     * @get result
     * @post result
     * @var bool|null
     */
    public $can_complete = null;

    /**
     * A list of sessions of an event that can be booked together.
     *
     * This is the same as {@link \WellnessLiving\Wl\Book\Process\Info\InfoCanCompleteModel::a_session_select_post}, but limited by query string
     * length and might fail if the user is booking more than 50 sessions at once. Therefore, using the POST method is preferable.
     *
     * Every element has the next keys:<ul>
     *   <li>String `dt_date` The date and time in MySQL format in GMT when the session starts.</li>
     *   <li>Boolean `is_select` `true` if this session should be booked; `false` otherwise.</li>
     *   <li>String `k_class_period` The class period ID.</li>
     * </ul>
     *
     * @get get
     * @var bool|string
     */
    public $a_session_select = [];

    /**
     * A list of sessions of an event that can be booked together.
     *
     * Every element has the next keys:<ul>
     *   <li>String `dt_date` The date and time in MySQL format in GMT when the session starts.</li>
     *   <li>Boolean `is_select` `true` if this session should be booked; `false` otherwise.</li>
     *   <li>String `k_class_period` The class period ID.</li>
     * </ul>
     *
     * @post post
     * @var bool|string
     */
    public $a_session_select_post = [];

    /**
     * The date and time of the session that the user is booking, returned in MySQL format and in GMT.
     *
     * This will be an empty string if not set yet.
     *
     * @get get
     * @post get
     * @var string
     */
    public $dt_date_gmt = '';

    /**
     * The class period ID that the user started to book.
     *
     * This will be an empty string if not set yet.
     *
     * @get get
     * @post get
     * @var string
     */
    public $k_class_period = '';

    /**
     * The unique booking process key.
     *
     * @get get
     * @post get
     * @var string
     */
    public $s_id = '';

    /**
     * The ID of a user who is making the booking.
     *
     * This will be `null` if not set yet.
     *
     * @get get
     * @post get
     * @var string|null
     */
    public $uid = null;
}

?>