<?php

namespace Repository;

use Object\Bulletin;

class QueryRepository
{

    public static function addBulletin(Bulletin $info)
    {
        $email = $info->getEmail();
        $category = $info->getCategory();
        $heading = $info->getHeading();
        $text = $info->getText();
        $query = "insert into boardAD(email,heading,text,category) values('{$email}',
                                                        '{$heading}',
                                                        '{$text}',
                                                        '{$category}')";
        return $query;
    }
    public static function getBulletinList($categoryFilter='any'){
        $query = "select * from ad where category = '{$categoryFilter}'";
        return $query;
    }
}