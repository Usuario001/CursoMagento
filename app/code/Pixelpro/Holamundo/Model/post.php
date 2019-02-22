<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 22/02/19
 * Time: 01:26 PM
 */

namespace Pixelpro\Holamundo\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'pixelpro_holamundo_post';
    protected $_cacheTag = 'pixelpro_holamundo_post';
    protected $_eventPrefix = 'pixelpro_holamundo_post';

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('Pixelpro\Holamundo\Model\ResourceModel\Post');
    }

    /**
     * @return array|string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return array
     */
    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}