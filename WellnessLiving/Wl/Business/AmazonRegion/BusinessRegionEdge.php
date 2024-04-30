<?php

namespace WellnessLiving\Wl\Business\AmazonRegion;

use WellnessLiving\WlEdgeAbstract;

/**
 * An Edge Cache for business data center.
 */
class BusinessRegionEdge extends WlEdgeAbstract
{
  /**
   * Alphabet to encode binary data.
   */
  const ALPHABET="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz+-";

  /**
   * Number of business keys included in a single row.
   */
  const BLOCK_ROW=1024;

  /**
   * CID of this class.
   */
  const CID = 1565;

  /**
   * A list of blocks.
   *
   * Format of this array is discussed in
   * `namespace.Wl/Business/AmazonRegion/doc/business-region-edge-format.en.md`.
   *
   * Only businesses that reside in {@link BusinessRegionEdge::$a_region} are added here.
   *
   * @get result
   * @var string[]
   */
  public $a_block;

  /**
   * A list of non-default regions mentioned in {@link BusinessRegionEdge::$a_block}.
   *
   * Effectively, this is a list of all regions that have at least one business except default region.
   *
   * Value is one of {@link AmazonRegionSid} constants.
   *
   * @get result
   * @var int[]
   */
  public $a_region;

  /**
   * ID of the data block.
   *
   * In current implementation, this property is not used an is always set to 0.
   *
   * @get get
   * @var string
   */
  public $i_block='0';

  /**
   * ID of the default region.
   *
   * One of {@link AmazonRegionSid} constants.
   *
   * The most popular region is selected as default region, and its data is not stored in
   * {@link BusinessRegionEdge::$a_block}. Thus, all non-existent businesses are deemed as placed in this default
   * region.
   *
   * @get result
   * @var int
   */
  public $id_region;

  /**
   * Returns ID of the data center in which specified business resides.
   *
   * Note that this method does not check if the business exists.
   * For non-existent businesses, this method returns the default region.
   *
   * Note also that this method does not make API requests.
   * You must provide that this model object be loaded with the data prior calling this method.
   *
   * @param string $k_business Key of the business which region must be retrieved.
   * @return int ID of the region of specified business.
   *   One of {@link AmazonRegionSid} constants.
   */
  public function businessRegion($k_business)
  {
    $i_block=(int)($k_business/$this::BLOCK_ROW);
    if(!isset($this->a_block[$i_block]))
      return $this->id_region;

    $a_alphabet=[];
    for($i_char=0;$i_char<strlen(static::ALPHABET);$i_char++)
      $a_alphabet[static::ALPHABET[$i_char]]=$i_char;

    $s_block=$this->a_block[$i_block];
    $i_position=0;

    $i_offset=$k_business%static::BLOCK_ROW;

    $i_value=0;
    $i_volume=1;
    foreach($this->a_region as $id_region)
    {
      while($i_volume<2&&$i_position<strlen($s_block))
      {
        $i_char=$a_alphabet[$s_block[$i_position]];
        $i_value+=$i_char*$i_volume;
        $i_volume*=64;
        $i_position++;
      }

      if($i_volume<=1)
        break;

      $i_bit=$i_value%2;
      $i_value=(int)($i_value/2);
      $i_volume=(int)($i_volume/2);

      if(!$i_bit)
        continue;

      $i_offset_done=-1;
      $is_include=true;
      $is_skip=false;
      $is_first=true;
      while($i_offset_done<static::BLOCK_ROW-1)
      {
        while($i_volume<4096&&$i_position<strlen($s_block))
        {
          $i_char=$a_alphabet[$s_block[$i_position]];
          $i_value+=$i_char*$i_volume;
          $i_volume*=64;
          $i_position++;
        }

        $is_include=!$is_include;

        $i_class=$i_value%4;
        $i_value=(int)($i_value/4);
        $i_volume=(int)($i_volume/4);

        if(!$i_class)
        {
          $i_class_offset=0;
          $i_class_volume=1;
        }
        elseif($i_class==1)
        {
          $i_class_offset=1;
          $i_class_volume=2;
        }
        elseif($i_class==2)
        {
          $i_class_offset=3;
          $i_class_volume=32;
        }
        else
        {
          $i_class_offset=35;
          $i_class_volume=1024;
        }

        $i_length=$i_value%$i_class_volume;
        $i_value=(int)($i_value/$i_class_volume);
        $i_volume=(int)($i_volume/$i_class_volume);

        $i_offset_done+=$i_class_offset+$i_length+($is_first?0:1);
        $is_first=false;

        if($i_offset_done>=$i_offset&&!$is_skip)
        {
          if($is_include)
            return $id_region;
          $is_skip=true;
        }
      }
    }

    return $this->id_region;
  }
}

?>