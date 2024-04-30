<?php

namespace WellnessLiving;

/**
 * Base class for all Edge Cache models.
 */
class WlEdgeAbstract extends WlModelAbstract
{
  /**
   * CID of this Edge Cache model.
   *
   * `null` may only be set in this base class.
   * This constant is obligatorily overridden in all subclasses.
   *
   * @var int|null
   */
  const CID=null;

  /**
   * @inheritDoc
   */
  const SIGNATURE = false;

  /**
   * @inheritDoc
   */
  protected function apiUrl()
  {
    return $this->config()->urlEdge().$this->resource();
  }

  /**
   * @inheritDoc
   */
  protected function requestGetVariables($s_method)
  {
    return [];
  }

  /**
   * @inheritDoc
   */
  protected function resource()
  {
    $a_key = [];
    $a_field = static::fieldConfig();

    foreach($a_field as $s_field => $a_method)
    {
      if(empty($a_method['get'])||empty($a_method['get']['get']))
        continue;

      $a_key[]=$this->$s_field;
    }

    ksort($a_key);

    return $this::CID.'/'.implode('/',$a_key).'.json';
  }
}

?>