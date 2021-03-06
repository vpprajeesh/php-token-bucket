<?php
namespace Api\TokenBucket\Serializer;

use Api\TokenBucket\SerializerInterface;

class JsonSerializer implements SerializerInterface
{
    public function serialize($data)
    {
        return json_encode($data);
    }

    public function unserialize($value)
    {
        return json_decode($value, true);
    }
}
