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
        public $date,
        public $category,
        public $slug,
        public $catSlug
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->body = $body;
        $this->date = $date;
        $this->category = $category;
        $this->slug = $slug;
        $this->catSlug = $catSlug;
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
