<?php

namespace WellnessLiving\Wl\Book\Process\Info;

use WellnessLiving\WlModelAbstract;

/**
 * Checker for <tt>next</tt>, <tt>complete</tt> buttons in booking process.
 */
class InfoCanCompleteModel extends WlModelAbstract
{
    /**
     * Whether user can complete booking process from info step.
     *
     * <tt>null</tt> if not loaded yet.
     *
     * @get result
     * @post result
     * @var bool|null
     */
    public $can_complete = null;

    /**
     * List of sessions of event that can be booked together.
     *
     * Same as {@link Wl_Book_Process_Info_InfoCanCompleteModel.a_session_select_post}, but is limited by query string
     * length and might fail if the user is booking >50 sessions at once, so usage of POST method is preferable.
     *
     * Every element has next keys:<ul>
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
     * List of sessions of event that can be booked together.
     *
     * Every element has next keys:<ul>
     *   <li>String <tt>dt_date</tt> Date and time in MySQL forma in GMT, when session starts.</li>
     *   <li>Boolean <tt>is_select</tt> <tt>true</tt> if this session should be booked; <tt>false</tt> otherwise.</li>
     *   <li>String <tt>k_class_period</tt> Class period ID.</li>
     * </ul>
     *
     * @post post
     * @var bool|string
     */
    public $a_session_select_post = [];

    /**
     * Date and time of the session that user is booking now.
     * In MySQL format. In GMT.
     *
     * Empty string means not set yet.
     *
     * @get get
     * @post get
     * @var string
     */
    public $dt_date_gmt = '';

    /**
     * Class period ID, that user started to book.
     *
     * Empty string means not set yet.
     *
     * @get get
     * @post get
     * @var string
     */
    public $k_class_period = '';

    /**
     * Unique booking process key.
     *
     * @get get
     * @post get
     * @var string
     */
    public $s_id = '';

    /**
     * ID of a user who is making the book.
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