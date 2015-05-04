<?php
/**
 * Created by PhpStorm.
 * User: Sofian
 * Date: 3/05/2015
 * Time: 18:48
 */

namespace IMI\Transformers;


class LessonTransformer extends  Transformer {

    public function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (boolean) $lesson['some_bool']
        ];
    }
}