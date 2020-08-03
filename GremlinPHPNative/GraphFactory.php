<?php

namespace Gremlin\Factory;

use Gremlin\Model\Graph;

class GraphFactory
{
    /**
     * Instantiates a new Gremlin Model.
     *
     * @return Graph
     */
    public function __invoke()
    {
        return new Graph();
    }
}
