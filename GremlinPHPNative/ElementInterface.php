<?php


namespace Gremlin\Model;


interface ElementInterface
{
    /**
     * Gets the unique identifier for the graph Element.
     */
    function graph(): Graph;

    /**
     * Get the keys of the properties associated with this element.
     */
    function id(): int; //Java-docs had this as "Object", not fully sure what the difference would be

    /**
     * Gets the label for the graph Element which helps categorize it.
     */
    function keys(): array;

    /**
     * Get an Iterator of properties where the propertyKeys is meant to be a filter on the available keys.
     */
    function label(): string;

    /**
     * Get a Property for the Element given its key.
     *
     * @param array $propertyKeys
     *
     * @return Iterator
     */
    function properties(array $propertyKeys): Iterator;

    /**
     * Add or set a property value for the Element given its key.
     *
     * @param string $key
     *
     * @return Property
     */
    function property(string $key): Property;

//    /**
//     * Removes the Element from the graph.
//     */
//    function property(string key, V value): <V> Property<V>;
//
//    /**
//     * Get the value of a Property given it's key.
//     */
//    function remove(): void;
//
//
//    function value(string key): default <V> V;
//
//
//default <V> Iterator<V>	values(String... propertyKeys)
//Get the values of properties as an Iterator.
//}
}
