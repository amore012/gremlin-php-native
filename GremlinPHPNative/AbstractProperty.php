<?php


namespace Gremlin\Model;


abstract class AbstractProperty implements PropertyInterface
{

    function element(): AbstractElement
    {
        // TODO: Implement element() method.
    }

    static function empty(): PropertyInterface
    {
        // TODO: Implement empty() method.
    }

    /**
     * @inheritDoc
     */
    function ifPresent(Consumer $consumer): void
    {
        // TODO: Implement ifPresent() method.
    }

    /**
     * @inheritDoc
     */
    function isPresent(): bool
    {
        // TODO: Implement isPresent() method.
    }

    /**
     * @inheritDoc
     */
    function key(): string
    {
        // TODO: Implement key() method.
    }

    /**
     * @inheritDoc
     */
    function orElse($value)
    {
        // TODO: Implement orElse() method.
    }

    /**
     * @inheritDoc
     */
    function orElseGet(Supplier $supplier)
    {
        // TODO: Implement orElseGet() method.
    }

    /**
     * @inheritDoc
     */
    function orElseThrow(exceptionSupplier $exceptionSupplier)
    {
        // TODO: Implement orElseThrow() method.
    }

    /**
     * @inheritDoc
     */
    function remove(): void
    {
        // TODO: Implement remove() method.
    }

    /**
     * @inheritDoc
     */
    function value()
    {
        // TODO: Implement value() method.
    }
}
