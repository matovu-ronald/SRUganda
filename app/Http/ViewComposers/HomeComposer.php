<?php 
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Slide;
use App\Models\Partner;
use App\Models\Member;

class HomeComposer
{
	protected $slides;
	protected $partners;
	protected $members;

	public function __construct()
	{
		$this->slides = Slide::latest()->limit(3)->get();
		$this->partners = Partner::all()->count();
		$this->members = Member::whereConfirmed(1)->count();
	}

	public function compose(View $view)
	{
		$view->with('slides', $this->slides);
		$view->with('partners', $this->partners);
		$view->with('members', $this->members);
	}
}