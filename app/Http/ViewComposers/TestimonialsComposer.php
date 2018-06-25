<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Testimonial;

class TestimonialsComposer
{
	protected $testimonials;

	public function __construct()
	{
		$this->testimonials  = Testimonial::latest()->get();
	}

	public function compose(View $view)
	{
		$view->with('testimonials', $this->testimonials);
	}
}

