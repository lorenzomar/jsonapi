<?php

/**
 * This file is part of the json-api package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace JsonApi\Definition;

/**
 * Class Pagination.
 *
 * @package json-api
 * @author Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link https://github.com/lorenzomar/jsonapi.git
 */
class Pagination
{
    /**
     * @var null
     */
    private $first;

    /**
     * @var null|string
     */
    private $last;

    /**
     * @var null|string
     */
    private $prev;

    private $next;
}