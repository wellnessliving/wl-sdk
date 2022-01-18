<?php

namespace WellnessLiving\Wl\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * This API can create a new staff in the business or edit specified staff.
 * Access for this actions has logged user with specified permissions or guest during process of registration a new
 * business (see {@link \WellnessLiving\Wl\Business\BusinessModel}).
 */
class StaffElementModel extends WlModelAbstract
{
    /**
     * Should staff member be shown on the directory site of the business.
     *
     * `null` means to not change the current value of the field.
     *
     * @post post
     * @var bool|null
     */
    public $is_microsite;

    /**
     * Key of the business to get\change staff member in.
     * Field is required.
     *
     * Primary key in the {@link \RsBusinessSql}.
     *
     * @post post
     * @var string
     */
    public $k_business;

    /**
     * Key of the staff member to be changed.
     *
     * Primary key in the {@link \RsStaffSql}.
     *
     * <tt>null</tt> if new staff member should be created.
     *
     * @post get,result
     * @var string|null
     */
    public $k_staff;

    /**
     * Staff email.
     * Field is required for creating a new staff.
     *
     * `null` means to not change the current value of the field.
     *
     * @post post
     * @var string|null
     */
    public $text_email;

    /**
     * Staff first name.
     * Field is required for creating a new staff.
     *
     * `null` means to not change the current value of the field.
     *
     * @post post
     * @var string|null
     */
    public $text_first_name;

    /**
     * Staff last name.
     *
     * `null` means to not change the current value of the field.
     *
     * @post post
     * @var string|null
     */
    public $text_last_name;

    /**
     * Password.
     * Field is required for creating a new staff.
     *
     * `null` means to not change the current value of the field.
     *
     * @post post
     * @var string|null
     */
    public $text_password;

    /**
     * Confirmation of password.
     * Field is required for creating a new staff.
     *
     * `null` means to not change the current value of the field.
     *
     * @post post
     * @var string|null
     */
    public $text_password_confirm;

    /**
     * Staff job title.
     *
     * `null` means to not change the current value of the field.
     *
     * @post post
     * @var string|null
     */
    public $text_position;
}

?>