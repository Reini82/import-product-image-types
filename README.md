# import-product-image-types

[![Latest Stable Version](https://img.shields.io/packagist/v/techdivision/import-product-image-types.svg?style=flat-square)](https://packagist.org/packages/techdivision/import-product-image-types) 
[![Total Downloads](https://img.shields.io/packagist/dt/techdivision/import-product-image-types.svg?style=flat-square)](https://packagist.org/packages/techdivision/import-product-image-types)
[![License](https://img.shields.io/packagist/l/techdivision/import-product-image-types.svg?style=flat-square)](https://packagist.org/packages/techdivision/import-product-image-types)
[![Build Status](https://img.shields.io/travis/techdivision/import-product-image-types/master.svg?style=flat-square)](http://travis-ci.org/techdivision/import-product-image-types)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/techdivision/import-product-image-types/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/techdivision/import-product-image-types/?branch=master) [![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/techdivision/import-product-image-types/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/techdivision/import-product-image-types/?branch=master)

## Introduction
This module provides the functionality to enrich the given image types with all user defined product attributes with type media/image. 

## Configuration
In case you want to use the extension, make sure to expand your composer.json from the origin project.

```json
{
    [...],
    "require": {
        [...]
        "techdivision/import-product-image-types": "x.x.x"
    },
    [...]
}
```
The columns from the csv, that would be imported, have to be a prefix with "_image" for the image and "_image_label" for the image label.