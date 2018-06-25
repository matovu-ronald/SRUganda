<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Gallery;

class GalleryComposer
{
	protected $gallery;

	public function __construct()
	{
		$this->gallery = Gallery::latest()->paginate(15);
	}

	public function compose(View $view)
	{
		$view->with('gallery', $this->gallery);
	}
}