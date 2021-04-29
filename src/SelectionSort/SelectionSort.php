<?php
namespace Src\SelectionSort;

use Src\Sort\Sort;

/**
 * 选择排序
 */
class SelectionSort extends Sort
{
    public function algorithm($data, bool $type)
    {
        $count = count($data);
        for($i = 0; $i < $count; ++$i) {

            $switch = $i;

            for($j = $i + 1; $j < $count; ++$j) {

                if ($data[$switch] < $data[$j] == $type) {
                    $switch = $j;
                }

            }

            if($switch !== $i) {
                $data[$i] = $data[$switch] + $data[$i] - ($data[$switch] = $data[$i]);
            }

        }

        return $data;

    }
}
