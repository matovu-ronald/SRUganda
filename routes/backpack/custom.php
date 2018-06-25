<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'role:admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { 
	CRUD::resource('slide', 'SlideCrudController');
	CRUD::resource('gallery', 'GalleryCrudController');
	CRUD::resource('events', 'EventsCrudController');
	CRUD::resource('team', 'TeamCrudController');
	CRUD::resource('members', 'MemberCrudController');
	CRUD::resource('resources', 'ResourceCrudController');
	CRUD::resource('faq', 'FaqCrudController');
	CRUD::resource('partner', 'PartnerCrudController');
	CRUD::resource('testimonial', 'TestimonialCrudController');
}); // this should be the absolute last line of this file
