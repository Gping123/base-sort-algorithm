<?php
namespace Src\InsertionSort;

use Src\Sort\Sort;

/**
 * 插入排序
 */
class InsertionSort extends Sort
{

    public function algorithm($data, bool $type)
    {
        $count = count($data ?? []);
        if($count < 1) {
            return $data;
        }

        for($i = 1; $i < $count; ++$i) {
            
            $nextItem = $i + 1;

            while($nextItem && $data[$nextItem] > $data[$nextItem - 1] == $type) {

                $data[$nextItem] = $data[$nextItem] + $data[$nextItem - 1] - ($data[$nextItem - 1] = $data[$nextItem]);

                $nextItem--;

            }

        }

        return $data;

    }

}
