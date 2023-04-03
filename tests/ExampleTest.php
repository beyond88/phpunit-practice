<?php declare(strict_types=1);
namespace example;

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    private ?Example $example;

    public function testSomething(): void
    {
        $this->assertSame(
            'the-result',
            $this->example->doSomething()
        );
    }

    protected function setUp(): void
    {
        $this->example = new Example(
            $this->createStub(Collaborator::class)
        );
    }

    protected function tearDown(): void
    {
        $this->example = null;
    }
}