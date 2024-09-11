<?php

namespace WellnessLiving\Wl\Reward\Score;

use WellnessLiving\WlModelAbstract;

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
   * The business key that user are in.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

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