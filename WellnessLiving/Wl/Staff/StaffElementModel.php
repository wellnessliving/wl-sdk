<?php

namespace WellnessLiving\Wl\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that can create or edit a staff member in a business.
 *
 * You can also use this endpoint to get information about a staff member's activity in another business when using
 * the {@link \WellnessLiving\Wl\Business\BusinessModel} endpoint.
 */
class StaffElementModel extends WlModelAbstract
{
    /**
     * Determines whether the staff member be shown on the directory site of the business.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @post post
     * @var bool|null
     */
    public $is_microsite;

    /**
     * The key of the business in which the staff member is being created or edited.
     * This field is required.
     *
     * @post post
     * @var string
     */
    public $k_business;

    /**
     * The key of the staff member who is being created or edited.
     *
     * This will be `null` in cases where a new staff member is created.
     *
     * @post get,result
     * @var string|null
     */
    public $k_staff;

    /**
     * The staff member's email address.
     * This field is required when creating a new staff member.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @post post
     * @var string|null
     */
    public $text_email;

    /**
     * The staff member's first name.
     * This field is required when creating a new staff member.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @post post
     * @var string|null
     */
    public $text_first_name;

    /**
     * The staff member's last name.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @post post
     * @var string|null
     */
    public $text_last_name;

    /**
     * The password.
     * This field is required when creating a new staff member.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @post post
     * @var string|null
     */
    public $text_password;

    /**
     * Confirmation of the password.
     * This field is required when creating a new staff member.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @post post
     * @var string|null
     */
    public $text_password_confirm;

    /**
     * The staff member's job title.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @post post
     * @var string|null
     */
    public $text_position;
}

?>