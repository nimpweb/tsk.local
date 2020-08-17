<?php


namespace app\models;


class Post extends AppModel {

    const TYPE_BLOG = 'BLOG';
    const TYPE_PAGE = 'PAGE';

    public static function getAllPosts($post_type = false, $limit = false) {
        $sql = "SELECT * FROM post";
        $postArray = [];
        if ($post_type) {
            $sql .= " WHERE post_type = ?";
            array_push($postArray, $post_type);
        }
        if ($limit) $sql .= " LIMIT $limit";
        return \R::getAll($sql, $postArray);
    }

    public static function getPostByAlias($alias, $post_type = false) {
        $postArray = [];
        $sql = "SELECT * FROM post WHERE alias=?";
        array_push($postArray, $alias);
        if ($post_type) {
            $sql .= " AND post_type=?";
            array_push($postArray, $post_type);
        }
        $result = \R::getRow($sql, $postArray);
        if ($result && !empty($result)) return $result;
        return false;
    }



}