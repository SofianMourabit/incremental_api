<?php namespace IMI\Transformers;
/**
 * Created by PhpStorm.
 * User: Sofian
 * Date: 3/05/2015
 * Time: 18:46
 */

abstract class  Transformer {

    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);


}