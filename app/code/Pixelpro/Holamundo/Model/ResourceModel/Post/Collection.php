<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 22/02/19
 * Time: 01:27 PM
 */

namespace Pixelpro\Holamundo\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'pixelpro_helloworld_post_collection';
    protected $_eventObject = 'post_collection';
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Pixelpro\Holamundo\Model\Post', 'Pixelpro\Holamundo\Model\ResourceModel\Post');
    }
}