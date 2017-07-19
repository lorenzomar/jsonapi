<?php

/**
 * This file is part of the json-api package.
 *
 * (c) Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 */

namespace JsonApi;

/**
 * Class Links.
 * A resource object **MAY** contain references to other resource objects ("relationships"). Relationships may be
 * to-one or to-many. Relationships can be specified by including a member in a resource's links object.
 *
 * @package json-api
 * @author Lorenzo Marzullo <marzullo.lorenzo@gmail.com>
 * @link https://github.com/lorenzomar/jsonapi.git
 */
class Links
{
    /**
     * @var Link[]
     */
    private $links;

    /**
     * @var null|Link
     */
    private $self;

    /**
     * @var null|Link
     */
    private $related;

    public function __construct(Link $self = null, Link $related = null)
    {
        if($self !== null) {
            $this->with('self', $self);
        }

        if($related !== null) {
            $this->with('related', $related);
        }
    }

    /**
     * withSelf.
     * A 'self' member, whose value is a URL for the relationship itself (a "relationship URL"). This URL allows the
     * client to directly manipulate the relationship. For example, it would allow a client to remove an 'author' from
     * an 'article' without deleting the people resource itself.
     *
     * @param Link $self
     *
     * @return static
     */
    public function withSelf(Link $self)
    {
        $new = clone $this;
        $new->self = $self;

        return $new;
    }

    /**
     * withRelated.
     *
     * @param Link $related
     *
     * @return static
     */
    public function withRelated(Link $related)
    {
        $new = clone $this;
        $new->related = $related;

        return $new;
    }

    public function with($key, Link $link)
    {

    }
}