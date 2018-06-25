<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Partner;

class PartnersComposer
{
	protected $partners;

	public function __construct()
	{
		$this->partners = Partner::all();
	}

	public function compose(View $view)
	{
		$view->with('partners', $this->partners);
	}
}