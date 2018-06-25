<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */
    public function main()
    {
        $content = [
            'name' => 'content',
            'label' => trans('backpack::pagemanager.content'),
            'type' => 'wysiwyg',
            'placeholder' => trans('backpack::pagemanager.content_placeholder'),
        ];

        return $this->crud->addFields([$content]);
    }

    private function about()
    {
        $this->crud->addField([
            'name' => 'pic',
            'label' => 'Image',
            'type' => 'browse',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->main();
    }

    private function contact()
    {

    }

    private function blog()
    {

    }

    private function team()
    {
        $this->main();
    }

    private function membership()
    {
        $this->crud->addField([
            'name' => 'pic',
            'label' => 'Image',
            'type' => 'browse',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
                        'name' => 'content',
                        'label' => trans('backpack::pagemanager.content'),
                        'type' => 'wysiwyg',
                        'placeholder' => trans('backpack::pagemanager.content_placeholder'),
                    ]);
    }

    private function events()
    {

    }

    private function gallery()
    {
        
    }

    private function resource()
    {
        $this->main();
    }

    private function faqs()
    {
        $this->main();
    }

    private function partners()
    {
        $this->main();
    }

    private function history()
    {
        $this->crud->addField([
            'name' => 'pic',
            'label' => 'Image',
            'type' => 'browse',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->main();
    }

}
