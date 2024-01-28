# Chuck Norris Jokes

Create random Chuck Norris jokes

## Instalation

Require the package using composer:

```bash
composer require drlopes/chuck-norris-jokes
```

## Usage

```php
use DrLopes\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();

echo $joke; // Chuck Norris doesn't need a debugger, he just stares down the bug until the code confesses.
```

## License

[MIT](LICENSE.md)
