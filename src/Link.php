<?php

/**
 * This file is part of the json-api package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace JsonApi;

/**
 * Class Link.
 *
 * @package json-api
 * @author Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link https://github.com/lorenzomar/jsonapi.git
 */
class Link
{
    /**
     * @var string
     */
    private $href;

    /**
     * @var null|array
     */
    private $meta;

    public function __construct($href, array $meta = null)
    {
        $this->href = $href;
        $this->meta = $meta;
    }

    /**
     * withMeta.
     *
     * @param array $meta
     *
     * @return static
     */
    public function withMeta(array $meta)
    {
        $new = clone $this;
        $new->meta = $meta;

        return $new;
    }
}