<?php


namespace Gremlin\Model;


abstract class AbstractElement implements ElementInterface
{
    /**
     * Get the keys of the properties associated with this element.
     */
    abstract function  keys(): array;

    /**
     * Get a Property for the Element given its key.
     *
     * @param string $key
     *
     * @return Property
     */
    abstract function property(string $key): Property;

    /**
     * Get the value of a Property given it's key.
     *
     * @param string $key
     */
    abstract function value(string $key);

    /**
     * Get the values of properties as an Iterator.
     *
     * @param string[] $propertyKeys
     *
     * @return Iterator
     */
    abstract function values(string ...$propertyKeys): Iterator;

}
