<?php

namespace WellnessLiving\Studio\Tests\Bisect;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The list of the tests of a build of the bisection of the tests, for the compilation server that runs the build.
 *
 * @method WlModelRequest get() Gives the list of the tests of a build.  A build of the bisection of the tests runs only the tests of its list. The compilation server asks for it when  the argument of the build has the flag `is_test_list`; a rerun gets the list of the build that it reruns. Only  an application of the group `thoth.build` may call it.
 */
class BisectListModel extends WlModelAbstract
{
  /**
 * The names of the tests that the build runs, sorted: the names that the filter of a test run takes.
 *
 * @get result
 * @var string[]
 */
  public $a_test = [];

  /**
 * The build that asks for its list: a build of the bisection, or its rerun.
 *
 * @get get
 * @var string
 */
  public $k_build = '';
}

?>