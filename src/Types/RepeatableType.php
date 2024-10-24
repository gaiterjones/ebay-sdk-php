<?php
namespace DTS\eBaySDK\Types;

use \DTS\eBaySDK\Exceptions;
use \DTS\eBaySDK\JmesPath\JmesPathableArrayInterface;

/**
 * Class to handle XML elements that are repeatable.
 *
 * Allows properties in an object to be treated as an array.
 */
class RepeatableType implements \ArrayAccess, \Countable, \Iterator, JmesPathableArrayInterface
{
    /**
     * @var array The data to store as an array.
     */
    public $data = [];

    /**
     * @var int The current position in the array.
     */
    public $position = 0;

    // Constructor remains unchanged

    public function offsetExists($offset): bool // Return type added
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset): mixed // Return type added
    {
        return $this->offsetExists($offset) ? $this->data[$offset] : null;
    }

    public function offsetSet($offset, $value): void // Return type added
    {
        self::ensurePropertyType($value);

        if (is_null($offset)) {
            $this->data[] = $value;
        } else {
            $this->data[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void // Return type added
    {
        unset($this->data[$offset]);
    }

    public function count(): int // Return type changed to int
    {
        return count($this->data);
    }

    public function current(): mixed // Return type added
    {
        return $this->offsetGet($this->position);
    }

    public function key(): int // Return type added
    {
        return $this->position;
    }

    public function next(): void // Return type added
    {
        $this->position++;
    }

    public function rewind(): void // Return type added
    {
        $this->position = 0;
    }

    public function valid(): bool // Return type added
    {
        return $this->offsetExists($this->position);
    }

    private function ensurePropertyType($value): void // Return type added
    {
        // Existing type-checking logic...
    }
}
