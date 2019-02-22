<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 22/02/19
 * Time: 01:27 PM
 */

namespace Pixelpro\Holamundo\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Post extends AbstractDb
{

    /**
     * Post constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     *
     */
    protected function _construct()
    {
        $this->_init('pixelpro_holamundo_post', 'post_id');
    }
}
