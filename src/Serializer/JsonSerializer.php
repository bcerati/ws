<?php

namespace WS\Serializer;

class JsonSerializer implements SerializerInterface
{
    /** @inheritDoc */
    public function serialize(object $entity)
    {
        $arraySerializer = new ArraySerializer();

        return json_encode($arraySerializer->serialize($entity));
    }
}
