<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Illuminate\Support\Arr;

class Portofolio extends Component
{

    public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Php', 'Bootstrap'],
                'title' => 'Fullstack Web Store with PHP & Bootstrap',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'image' => url('/img/logo-2.png'),
                'github' => 'https://github.com/muamarzidan'
            ],
            [
                'category' => ['Laravel', 'Bootstrap', 'Javascript'],
                'title' => 'Fullstack Portofolio with Laravel, Bootstrap',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'image' => url('/img/logo.png'),
                'github' => 'https://github.com/muamarzidan'
            ],
            [
                'category' => ['Bootstrap', 'Javascript'],
                'title' => 'Web Portofolio with Html, Css, Boostrap',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'image' => url('/img/logo-3.png'),
                'github' => 'https://github.com/muamarzidan'
            ],
            [
                'category' => ['Laravel', 'ReactJS', 'Ilustration'],
                'title' => 'Fullstack Laravel',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'image' => url('/img/ytb-logo.png'),
                'github' => 'https://github.com/muamarzidan'
            ],
            [
                'category' => ['Bootstrap', 'NodeJS', 'UI Design'],
                'title' => 'Fullstack Bootstrap',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'image' => url('/img/ytb-logo.png'),
                'github' => 'https://github.com/muamarzidan'
            ],
            [
                'category' => ['Javascript', 'Tailwind'],
                'title' => 'Fullstack Javascript',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'image' => url('/img/ytb-logo.png'),
                'github' => 'https://github.com/muamarzidan'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portofolio');
    }
}
