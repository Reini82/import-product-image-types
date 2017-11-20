<?php

/**
 * TechDivision\Import\Product\Image\Types\Repositories\ImageTypeRepository
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Reinhard Hampl <r.hampl@techdivision.com>
 * @copyright 2017 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Product\Image\Types\Repositories;


/**
 * Repository implementation to load image type data.
 *
 * @author    Reinhard Hampl <r.hampl@techdivision.com>
 * @copyright 2017 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import
 * @link      http://www.techdivision.com
 */
class ImageTypeRepository extends \TechDivision\Import\Repositories\ImageTypeRepository
{

    /**
     * The prepared statement to load an existing product media gallery value entity.
     *
     * @var \PDOStatement
     */
    protected $statement;


    /**
     * Initializes the repository's prepared statements.
     *
     * @return void
     */
    public function init()
    {
        $selectStmt = "SELECT main_table.attribute_code FROM eav_attribute AS main_table
         INNER JOIN eav_entity_type AS entity_type ON main_table.entity_type_id = entity_type.entity_type_id
         LEFT JOIN eav_entity_attribute ON main_table.attribute_id = eav_entity_attribute.attribute_id
         INNER JOIN catalog_eav_attribute AS additional_table ON main_table.attribute_id = additional_table.attribute_id 
         WHERE (entity_type_code = 'catalog_product') AND (frontend_input = 'media_image') AND main_table.is_user_defined = 1
         GROUP BY main_table.attribute_code";

        // initialize the prepared statements
        $this->statement = $this->getConnection()->prepare($selectStmt);

    }


    /**
     * Enrich the image types with all custom image attributes
     *
     * @return array
     */
    public function extendsImageTypesFromDatabase()
    {
        $returnResult = array();
        $this->statement->execute();
        $result = $this->statement->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
            $returnResult[$value['attribute_code']] = $value['attribute_code'];
        }

        return $returnResult;
    }


}
