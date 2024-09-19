<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class blogCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title,
        public $author,
        public $body,
        public $date
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->body = $body;
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function getTitle(){
        
    }
    
    public function render(): View|Closure|string
    {
        return view('components.blog-card');
    }
}
