<?php

namespace DRLopes\ChuckNorrisJokes\Tests;

use DRLopes\ChuckNorrisJokes\JokeFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    public function test_it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{
                "categories": [],
                "created_at": "2020-01-05 13:42:25.099703",
                "icon_url": "https://assets.chucknorris.host/img/avatar/chuck-norris.png",
                "id": "qWBbR7_sQXy2ZSjUzmQspA",
                "updated_at": "2020-01-05 13:42:25.099703",
                "url": "https://api.chucknorris.io/jokes/qWBbR7_sQXy2ZSjUzmQspA",
                "value": "Chuck Norris once made a snowman....out of rain."
            }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $jokeFactory = new JokeFactory($client);

        $joke = $jokeFactory->getRandomJoke();

        $this->assertSame('Chuck Norris once made a snowman....out of rain.', $joke);
    }
}