<?php
/**
 * Tests for GateIO
 */

use PHPUnit\Framework\TestCase;
use Gateio\Gateio;

class GateioTest extends TestCase {
    private Gateio $instance;

    protected function setUp(): void {
        $this->instance = new Gateio(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gateio::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
