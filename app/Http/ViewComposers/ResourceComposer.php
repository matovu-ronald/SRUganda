<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Resource;

class ResourceComposer
{
	protected $resources;

	public function __construct()
	{
		$this->resources = Resource::latest()->get();
	}

	public function compose(View $view)
	{
		$view->with('resources', $this->resources);
	}
}