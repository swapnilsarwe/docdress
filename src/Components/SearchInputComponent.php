<?php

namespace Docdress\Components;

use Illuminate\View\Component;

class SearchInputComponent extends Component
{
    /**
     * Repository config.
     *
     * @var object|null
     */
    public $config;

    /**
     * Create new SearchInputComponent instance.
     *
     * @param  string $class
     * @return void
     * @param string $version
     */
    public function __construct($repo, /**
     * Version.
     */
    public $version = 'master', /**
     * CSS Classes.
     */
    public $class = '')
    {
        $this->config = (object) config("docdress.repos.{$repo}");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('docdress::components.search_input');
    }
}
