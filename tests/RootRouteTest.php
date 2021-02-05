<?php

declare(strict_types=1);

namespace App\Tests;

use JsonException;

class RootRouteTest extends TestCase
{
    /**
     * Test root route.
     *
     * @return void
     * @throws JsonException
     *
     * @test
     */
    public function rootRouteHasJsonResponderStandard(): void
    {
        $this->get('/');

        self::assertJson(
            json_encode([$this->app->version()], JSON_THROW_ON_ERROR),
            $this->response->getContent()
        );
    }
}
