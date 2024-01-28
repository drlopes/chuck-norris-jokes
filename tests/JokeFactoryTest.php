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
                "type": "success",
                "value": {
                    "id": 469,
                    "joke": "Chuck Norris can binary search unsorted data.",
                    "categories": ["nerdy"]
                }
            }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $jokeFactory = new JokeFactory($client);

        $joke = $jokeFactory->getRandomJoke();

        $this->assertSame('Chuck Norris can binary search unsorted data.', $joke);
    }

    public function test_it_returns_multiple_random_jokes()
    {
        $mock = new MockHandler([
            new Response(200, [], '{
                "type": "success",
                "value": [
                    {
                        "id": 469,
                        "joke": "Chuck Norris can binary search unsorted data.",
                        "categories": ["nerdy"]
                    },
                    {
                        "id": 469,
                        "joke": "Chuck Norris can binary search unsorted data.",
                        "categories": ["nerdy"]
                    }
                ]
            }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $jokeFactory = new JokeFactory($client);

        $jokes = $jokeFactory->getRandomJokes(2);
        
        $this->assertIsArray($jokes);
        
        $this->assertSame([
            'Chuck Norris can binary search unsorted data.',
            'Chuck Norris can binary search unsorted data.',
        ], $jokes);

        $this->assertSame(2, count($jokes));
    }
}