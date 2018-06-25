<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Faq;

class FaqComposer 
{
	protected $faqs;

	public function __construct()
	{
		$this->faqs = Faq::all();
	}

	public function compose(View $view)
	{
		$view->with('faqs', $this->faqs);
	}
}