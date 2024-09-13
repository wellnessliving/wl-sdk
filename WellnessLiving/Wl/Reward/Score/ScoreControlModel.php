<?php

namespace WellnessLiving\Wl\Reward\Score;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Login\WlLoginActivityTypeSid;

/**
 * Works with user's scores.
 */
class ScoreControlModel extends WlModelAbstract
{
  /**
   * The user's bonus scores balance.
   *
   * @get result
   * @var int
   */
  public $i_score = 0;

  /**
   * User's activity ID. One of {@link WlLoginActivityTypeSid} constants.
   *
   * @post get
   * @var int
   */
  public $id_type = 0;

  /**
   * The business key that user are in.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Object ID, for example, class period ID for books and visits.
   *
   * @post get
   * @var ?string
   */
  public $k_id = null;

  /**
   * The user's key to work with the scores.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>