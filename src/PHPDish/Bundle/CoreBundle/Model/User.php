<?php

/*
 * This file is part of the phpdish/phpdish
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PHPDish\Bundle\CoreBundle\Model;

use Doctrine\Common\Collections\Collection;
use PHPDish\Bundle\PostBundle\Model\CategoryInterface;
use PHPDish\Bundle\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{

    /**
     * @var Collection|CategoryInterface[]
     */
    protected $categories;

    /**
     * 订阅的专栏
     */
    protected $followingCategories;

    /**
     * 订阅的节点
     */
    protected $followingThreads;

    /**
     * 点赞的话题
     */
    protected $votedTopics;

    /**
     * 点赞的回复
     */
    protected $votedReplies;

    /**
     * 点赞的文章
     */
    protected $votedPosts;

    /**
     * 点赞的文章
     */
    protected $votedComments;

    /**
     * 文章数量.
     */
    protected $postCount = 0;

    /**
     * 话题数量.
     */
    protected $topicCount = 0;

    /**
     * @var string
     */
    protected $locale;
}