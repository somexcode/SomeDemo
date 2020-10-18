<?php
declare(strict_types=1);

namespace SomeDemo\SomeList\Config\Somenode;

use Magento\Framework\Module\Dir;

class SchemaLocator implements \Magento\Framework\Config\SchemaLocatorInterface
{

    protected $_schema = null;
    protected $_perFileSchema = null;

    /**
     * @param \Magento\Framework\Module\Dir\Reader $moduleReader
     */
    public function __construct(
        \Magento\Framework\Module\Dir\Reader $moduleReader
    ) {
        $etcDir = $moduleReader->getModuleDir(Dir::MODULE_ETC_DIR, 'SomeDemo_SomeList');
        $this->_schema = $etcDir . '/somenode_merged.xsd';
        $this->_perFileSchema = $etcDir . '/somenode.xsd';
    }

    /**
     * Get path to merged config schema
     *
     * @return string|null
     */
    public function getSchema()
    {
        return $this->_schema;
    }

    /**
     * Get path to pre file validation schema
     *
     * @return string|null
     */
    public function getPerFileSchema()
    {
        return $this->_perFileSchema;
    }
}

