<?php

namespace WellnessLiving\Wl\Lead\Stage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates, edits and deletes a Lead Stage.
 *
 * @method WlModelRequest delete() Deletes a lead stage.  The last remaining stage of a type ({@link \Wl\Lead\Stage\LeadStageTypeSid}) can not be deleted - a business must always have at least one stage of every type. If the stage has leads or clients assigned, {@link \Wl\Lead\Stage\LeadStageElementApi::$k_lead_stage_replace} must be given - they are moved to the replacement stage, which must be of the same type.
 * @method WlModelRequest get() Returns information about a lead stage.  The information includes the name, icon and type of the lead stage.
 * @method WlModelRequest post() Edits name and icon of a lead stage.  Type of the stage ({@link \Wl\Lead\Stage\LeadStageTypeSid}) is read-only and can not be changed.
 * @method WlModelRequest put() Creates a new custom lead stage.  The name must be unique within the business and no longer than {@link \Wl\Lead\Stage\LeadStageElementApi::TITLE_LENGTH_MAX} characters. {@link \Wl\Lead\Stage\LeadStageElementApi::$id_lead_stage_type} is required and can not be changed afterwards. A business may have no more than {@link \Wl\Lead\Stage\LeadStageElementApi::STAGE_LIMIT} stages.
 */
class LeadStageElementModel extends WlModelAbstract
{
  /**
   * Shape of the stage icon. One of {@link LeadStageShapeSid} constants.
   *
   * @get result
   * @post post
   * @put post
   * @var int
   */
  public $id_lead_stage_shape = 0;

  /**
   * Type of the stage.
   *
   * Only used to create a stage. Type of an existing stage can not be changed.
   *
   * @get result
   * @put post
   * @var int
   */
  public $id_lead_stage_type = 0;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the lead stage.
   *
   * @delete get
   * @get get
   * @post get
   * @put result
   * @var string
   */
  public $k_lead_stage = '';

  /**
   * Key of the lead stage to move leads and clients of the deleted stage to.
   *
   * Required if the stage being deleted has leads or clients assigned to it. Ignored otherwise.
   *
   * @delete get
   * @var string
   */
  public $k_lead_stage_replace = '';

  /**
   * Background color of the icon. Hexadecimal color.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $s_color_background = '';

  /**
   * Color of characters on the icon. Hexadecimal color.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $s_color_foreground = '';

  /**
   * Characters on the icon.
   *
   * Allowed length depends on {@link LeadStageElementModel::$id_lead_stage_shape},
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $s_icon = '';

  /**
   * Name of the stage.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $text_title = '';
}

?>