<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Backpack\NewsCRUD\app\Models\Article;
use Backpack\NewsCRUD\app\Models\Category;
use Backpack\NewsCRUD\app\Models\Tag;

class BlogComposer
{
	protected $featured;
	protected $articles;
	protected $categories;
	protected $tags;

	public function __construct()
	{
		$this->featured = Article::where('featured', 1)->limit(3)->latest()->get();
		$this->articles = Article::latest()->paginate(10);
		$this->categories = Category::all();
		$this->tags 	  = Tag::all();
	}

	public function compose(View $view)
	{
		$view->with('featured', $this->featured);
		$view->with('articles', $this->articles);
		$view->with('categories', $this->categories);
		$view->with('tags', $this->tags);
	}
}
