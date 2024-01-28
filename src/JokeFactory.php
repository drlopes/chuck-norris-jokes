<?php

namespace DRLopes\ChuckNorrisJokes;
use GuzzleHttp\Client;

class JokeFactory
{
    const API_ENDPOINT = 'https://api.chucknorris.io/jokes/random';
    protected Client $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    public function getRandomJoke(): string
    {
        $response = $this->client->get(self::API_ENDPOINT);

        $joke = json_decode($response->getBody()->getContents());

        return $joke->value;
    }
}