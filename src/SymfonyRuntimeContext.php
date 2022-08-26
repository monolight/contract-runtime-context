<?php
namespace ML\Contracts;

interface SymfonyRuntimeContext
{
    /**
     * @param array $context
     *
     * @return void
     *
     * Set the context array data. Code calling this method is expected pass the array context
     * from the Symfony Runtime component.
     */
    public function setContext(array $context): void;
}
