<?php

namespace DRLopes\ChuckNorrisJokes;
use GuzzleHttp\Client;

class JokeFactory
{
    const API_ENDPOINT = 'http://api.icndb.com/jokes/random';
    protected Client $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    public function getRandomJoke(): string|bool
    {
        $response = $this->client->get(self::API_ENDPOINT);

        $joke = json_decode($response->getBody()->getContents());

        if ($joke->type !== 'success') {
            return false;
        }

        return $joke->value->joke;
    }

    public function getRandomJokes(int $number): array|bool
    {
        $response = $this->client->get(self::API_ENDPOINT . '/' . $number);

        $jokes = json_decode($response->getBody()->getContents());

        if ($jokes->type !== 'success') {
            return false;
        }

        return array_map(fn($joke) => $joke->joke, $jokes->value);
    }
}