<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;
use Backpack\NewsCRUD\app\Models\Article;
use App\Models\Events;
use App\Models\Team;
use App\Models\Resource;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::findBySlug($slug);

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }

    public function singleBlog($slug)
    {
        $article = Article::where('slug', $slug)->first();

        return view('pages.single-blog', compact('article'));
    }

    public function singleEvent($slug)
    {
        $event = Events::where('slug', $slug)->first();

        return view('pages.single-event', compact('event'));
    }

    public function singleTeam($slug)
    {
        $team = Team::where('slug', $slug)->first();

        return view('pages.single-team', compact('team'));
    }

    public function download($id)
    {
        $resource = Resource::find($id);
        $resource->increment('downloads');
        $filename = $resource->file;
        $newFilename = str_replace('uploads/resources/', '', $filename);
        // Check if file exists in app/storage/file folder
        $file_path = storage_path() .'/app/public/'. $filename;
        if (file_exists($file_path))
        {
            // Send Download
            return \Response::download($file_path, $newFilename, [
                'Content-Length: '. filesize($file_path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
       
        return dd($file_path);
    }


}