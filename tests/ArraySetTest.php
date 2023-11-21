<?php

class ArraySetTest extends \PHPUnit\Framework\TestCase
{
    private ?\App\Set $_instance = null;

    public function setUp(): void
    {
        $this->_instance = new \App\ArraySet();
    }

    public function testInstance() :void
    {
        $this->assertTrue($this->_instance instanceof \App\Set);
    }

    public function testAdd(): void
    {
        $this->_instance->add(2);
        $this->assertFalse($this->_instance->isEmpty());
        $this->assertEquals(1, $this->_instance->getSize());

        $this->_instance->add(3);
        $this->assertFalse($this->_instance->isEmpty());
        $this->assertEquals(2, $this->_instance->getSize());

        $this->_instance->add(3);
        $this->assertFalse($this->_instance->isEmpty());
        $this->assertEquals(2, $this->_instance->getSize());
    }

    public function testRemove(): void
    {
        // Add 2, then 3:
        $this->_instance->add(2)->add(3);
        $this->assertFalse($this->_instance->isEmpty());
        $this->assertEquals(2, $this->_instance->getSize());

        // Remove 3, so far, everything's fine:
        $this->_instance->remove(3);
        $this->assertFalse($this->_instance->isEmpty());
        $this->assertEquals(1, $this->_instance->getSize());

        // Removing 100 (not in the set), should throw an exception:
        $this->expectException(\App\NotInSetException::class);
        $this->_instance->remove(100);
    }
}