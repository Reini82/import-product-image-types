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

namespace TechDivision\ImportProductImageTypes\Repositories;


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
     * @return array
     */
        public function extendsImageTypesFromDatabase()
    {
        //Override this function in case you want to extends the image types
        return ['test_test_de_labelXXX' => 'test_test_de_imageXXX'];
    }

}
