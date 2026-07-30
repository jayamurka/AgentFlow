<?php
/**
 * Tests for AgentFlow
 */

use PHPUnit\Framework\TestCase;
use Agentflow\Agentflow;

class AgentflowTest extends TestCase {
    private Agentflow $instance;

    protected function setUp(): void {
        $this->instance = new Agentflow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Agentflow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
