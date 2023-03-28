<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Root\PhpunitPractice\Greeter;

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new Greeter;
        $greeting = $greeter->greet('Hello, Alice!');
        $this->assertSame('Hello, Alice!', $greeting);
    }
}