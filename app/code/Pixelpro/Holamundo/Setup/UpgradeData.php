<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 22/02/19
 * Time: 01:29 PM
 */

namespace Pixelpro\Holamundo\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $_postFactory;

    /**
     * InstallData constructor.
     * @param \Pixelpro\Holamundo\Model\PostFactory $postFactory
     */
    public function __construct(\Pixelpro\Holamundo\Model\PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            'titulo' => "Magento Modules",
            'contenido' => "This post is all about Magento modules.",

        ];
        $post = $this->_postFactory->create();
        $post->addData($data)->save();
    }
}