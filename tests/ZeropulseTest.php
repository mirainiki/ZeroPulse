<?php
/**
 * Tests for ZeroPulse
 */

use PHPUnit\Framework\TestCase;
use Zeropulse\Zeropulse;

class ZeropulseTest extends TestCase {
    private Zeropulse $instance;

    protected function setUp(): void {
        $this->instance = new Zeropulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zeropulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
