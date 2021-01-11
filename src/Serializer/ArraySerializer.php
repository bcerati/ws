<?php

namespace WS\Serializer;

use ReflectionClass;

class ArraySerializer implements SerializerInterface
{
    /** @inheritDoc */
    public function serialize(object $entity)
    {
        $data = [];

        $reflectionClass = new ReflectionClass($entity);
        $properties = $reflectionClass->getProperties();

        foreach ($properties as $property) {
            $parts = explode('_', $property->getName());
            $parts = array_map('ucfirst', $parts);
            $propertyName = implode('', $parts);

            $getterName = 'get' . $propertyName;

            if (method_exists($entity, $getterName)) {
                $value = $entity->$getterName();
            } else {
                $property->setAccessible(true);
                $value = $property->getValue($entity);
            }

            if (is_object($value)) {
                if ($value instanceof \DateTime) {
                    $value = $value->format('c');
                } else {
                    $value = $this->serialize($value);
                }
            } else if(is_array($value)) {
                foreach ($value as &$val) {
                    if (is_object($val)) {
                        $val = $this->serialize($val);
                    }
                }
            }

            $data[$property->getName()] = $value;
        }

        return $data;

    }
}
