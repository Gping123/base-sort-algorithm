<?php

namespace Src\BubbleSort;

use Src\Sort\Sort;

/**
 * 冒泡排序
 */
class BubbleSort extends Sort
{
    /**
     * 具体算法实现
     *
     * @param array $data
     * @param bool $type
     * @return array
     */
    public function algorithm($data,bool $type)
    {
        $count = count($data);
        for($i = 0; $i < $count; ++$i) {

            for($j = $i + 1; $j < $count; ++$j) {
                
                if($data[$i] < $data[$j] == $type) {
                    $data[$i] = $data[$j] + $data[$i] - ($data[$j] = $data[$i]);
                }

            }

        }

        return $data;

    }


}
