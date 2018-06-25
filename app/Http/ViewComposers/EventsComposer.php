<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Events;

class EventsComposer
{
	protected $events;

	public function __construct()
	{
		$this->events = Events::latest()->paginate(15);
	}

	public function compose(View $view)
	{
		$view->with('events', $this->events);
	}
}