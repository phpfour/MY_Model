<?php

/**
 * Example Post Model
 *
 * An example model created after the ever simple blog post
 * entity to show how the model helper can be used.
 *
 * @author Md Emran Hasan <phpfour@gmail.com>
 */
class Post extends MY_Model
{
    public function __construct ()
    {
        parent::__construct();
        $this->loadTable('posts', 'post_id');
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public function getBySlug($slug)
    {
        $result = $this->findBy('slug', $slug);
        return empty($result) ? false : $result;
    }
}