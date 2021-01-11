<?php

namespace WS\Serializer;

interface SerializerInterface
{
    /**
     * @param object $entity
     *
     * @return mixed
     */
    public function serialize(object $entity);
}
