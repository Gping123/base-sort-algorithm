<?php

namespace Src\Quicksort;

use Src\Sort\Sort;

/**
 * Quicksort class
 * 
 * 快速排序
 * 
 */
class Quicksort extends Sort
{
    /**
     * 算法过程
     *
     * @param array $data
     * @param integer $begin
     * @param integer $end
     * @param integer $middle
     * @param [type] $type
     * @return void
     */
    public function algorithm($data,bool $type,int $begin  = 1,int $end = -1,int $middle = null)
    {
        if($end === -1) {
            $end = count($data);
        }
        if(is_null($middle)) {
            $middle = $data[0];
        }

        if($begin >= $end) {
            return $data;
        } elseif(count($data) <= 1) {
            return $data;
        }

        $left = [];
        $right = [];

        for(; $begin < $end; ++$begin) {
            if($data[$begin] > $middle == $type) {
                $left[] = $data[$begin];
            } else {
                $right[] = $data[$begin];
            }
        }

        $leftCount = count($left);
        $rightCount = count($right);
        if($leftCount > 1) {
            $left = $this->algorithm($left, $type, 1, count($left), $left[0]);
        }
        $left[] = $middle;
        if($rightCount > 1) {
            $right = $this->algorithm($right, $type, 1, count($right), $right[0]);
        }

        return array_merge($left, $right);

    }

}
