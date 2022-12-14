<?php
/**
 * Divide the array into many sub-arrays,
 * where each subarray is at most of group size.
 *
 * @method static any[] group(any[] $array, int $size)
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
 */

class ArrayGroup {
    public static function group($arr){
        print_r(array_chunk($arr, 2));
    }

}
$array = array(1,2,3,4,5,6);
    ArrayGroup::group($array);
?>