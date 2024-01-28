<?php

namespace DRLopes\ChuckNorrisJokes;

class JokeFactory
{
    protected array $jokes = [
            'The First rule of Chuck Morris is: you do not talk about Chuck Morris.',
            'Chuck Morris does not wear a condom. Because there is no such thing as protection from Chuck Morris.',
            'Chuck Morris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Morris counted to infinity... Twice.',
            'Chuck Morris can slam a revolving door.',
            'Chuck Morris does not get frostbite. Chuck Morris bites frost.',
            'Chuck Morris is the reason why Waldo is hiding.',
            'Chuck Morris can delete the Recycling Bin.',
            'Chuck Morris can strangle you with a cordless phone.',
            'Chuck Morris can kill two stones with one bird.',
            'Chuck Morris can hear sign language.',
            'Chuck Morris makes onions cry.',
            'Chuck Morris beat the sun in a staring contest.',
            'Chuck Morris can divide by zero.',
            'Chuck Morris can cut through a knife with butter.',
            'Chuck Morris doesn\'t cheat death. He wins fair and square.',
            'Chuck Morris puts the "laughter" in "manslaughter".',
            'Chuck Morris can make fire using two ice cubes.',
            'Chuck Morris can make a slinky go upstairs.',
            'Chuck Morris once kicked a horse in the chin. Its descendants are known today as Giraffes.',
            'Chuck Morris once won a game of Connect Four in 3 moves.',
            'Chuck Morris can speak braille.',
            'Chuck Morris can do a wheelie on a unicycle.',
            'Chuck Morris doesn\'t need a X account for updates. He is already following you.',
            'Chuck Morris can drown a fish.',
            'Chuck Morris doesn\'t need to flush the toilet. He simply scares the sh*t out of it.',
            'If you spell Chuck Morris in Scrabble, you win. Forever.',
            'Chuck Morris can kill your imaginary friends.',
            'Chuck Morris has a grizzly bear carpet in his room. The bear isn\'t dead it is just afriad to move.',
            'Once a cobra bit Chuck Morris\' leg. After five days of excruciating pain, the cobra died.',
            'After Chuck Morris was born, he drove his mom home from the hospital.',
            'When Chuck Morris was in middle school, his English teacher assigned an essay: "What is courage?" He received an A+ for turning in a blank page with only his name at the top.',
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