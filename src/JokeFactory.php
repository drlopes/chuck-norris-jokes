<?php

namespace DRLopes\ChuckNorrisJokes;

class JokeFactory
{
    protected array $jokes = [
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
            'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'Chuck Norris can slam a revolving door.',
            'Chuck Norris does not get frostbite. Chuck Norris bites frost.',
            'Chuck Norris is the reason why Waldo is hiding.',
            'Chuck Norris can delete the Recycling Bin.',
            'Chuck Norris can strangle you with a cordless phone.',
            'Chuck Norris can kill two stones with one bird.',
            'Chuck Norris can hear sign language.',
            'Chuck Norris makes onions cry.',
            'Chuck Norris beat the sun in a staring contest.',
            'Chuck Norris can divide by zero.',
            'Chuck Norris can cut through a knife with butter.',
            'Chuck Norris doesn\'t cheat death. He wins fair and square.',
            'Chuck Norris puts the "laughter" in "manslaughter".',
            'Chuck Norris can make fire using two ice cubes.',
            'Chuck Norris can make a slinky go upstairs.',
            'Chuck Norris once kicked a horse in the chin. Its descendants are known today as Giraffes.',
            'Chuck Norris once won a game of Connect Four in 3 moves.',
            'Chuck Norris can speak braille.',
            'Chuck Norris can do a wheelie on a unicycle.',
            'Chuck Norris doesn\'t need a X account for updates. He is already following you.',
            'Chuck Norris can drown a fish.',
            'Chuck Norris doesn\'t need to flush the toilet. He simply scares the sh*t out of it.',
            'If you spell Chuck Norris in Scrabble, you win. Forever.',
            'Chuck Norris can kill your imaginary friends.',
            'Chuck Norris has a grizzly bear carpet in his room. The bear isn\'t dead it is just afriad to move.',
            'Once a cobra bit Chuck Norris\' leg. After five days of excruciating pain, the cobra died.',
            'After Chuck Norris was born, he drove his mom home from the hospital.',
            'When Chuck Norris was in middle school, his English teacher assigned an essay: "What is courage?" He received an A+ for turning in a blank page with only his name at the top.',
        ];

    public function __construct(?array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}