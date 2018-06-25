<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Team;

class TeamComposer
{
	protected $team;

	public function __construct()
	{
		$this->team = Team::paginate(15);
	}

	public function compose(View $view)
	{
		$view->with('team', $this->team);
	}
}