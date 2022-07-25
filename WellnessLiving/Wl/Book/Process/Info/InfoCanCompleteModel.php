<?php

namespace WellnessLiving\Wl\Book\Process\Info;

use WellnessLiving\WlModelAbstract;

/**
 * A checker for <tt>next</tt>, <tt>complete</tt> buttons in the booking process.
 */
class InfoCanCompleteModel extends WlModelAbstract
{
    /**
     * Determines whether users can complete the booking process from the info step.
     *
     * <tt>null</tt> if not loaded yet.
     *
     * @get result
     * @post result
     * @var bool|null
     */
    public $can_complete = null;

    /**
     * A list of sessions of an event that can be booked together.
     *
     * Same as {@link Wl_Book_Process_Info_InfoCanCompleteModel.a_session_select_post}, but is limited by query string
     * length and might fail if the user is booking >50 sessions at once. Therefore, usage of POST method is preferable.
     *
     * Every element has the next keys:<ul>
     *   <li>String <tt>dt_date</tt> Date and time in MySQL forma in GMT, when session starts.</li>
     *   <li>Boolean <tt>is_select</tt> <tt>true</tt> if this session should be booked; <tt>false</tt> otherwise.</li>
     *   <li>String <tt>k_class_period</tt> Class period ID.</li>
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
     *   <li>String <tt>dt_date</tt> Date and time in MySQL forma in GMT, when the session starts.</li>
     *   <li>Boolean <tt>is_select</tt> <tt>true</tt> if this session should be booked; <tt>false</tt> otherwise.</li>
     *   <li>String <tt>k_class_period</tt> Class period ID.</li>
     * </ul>
     *
     * @post post
     * @var bool|string
     */
    public $a_session_select_post = [];

    /**
     * The date and time of the session that user is booking now.
     * Returned in MySQL format and in GMT.
     *
     * An empty string means it's not set yet.
     *
     * @get get
     * @post get
     * @var string
     */
    public $dt_date_gmt = '';

    /**
     * The class period ID that the user started to book.
     *
     * An empty string means it's not set yet.
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
     * <tt>null</tt> if not set yet.
     *
     * @get get
     * @post get
     * @var string|null
     */
    public $uid = null;
}

?>