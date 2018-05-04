<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function content($slug)
    {
        $content = \App\Content::where('slug', $slug)->get()->first();
        return view('content', ['content' => $content]);
    }

    public function index()
    {
        // $articles = [
        //     (object) [
        //         'title' => 'Tokyo',
        //         'description' => 'Our trip to Tokyo was fabulous, take a look to see where we went and what we did.',
        //         'timePublished' => time(),
        //     ],
        //     (object) [
        //         'title' => 'Table Tennis',
        //         'description' => 'Table tennis is going really well I am focusing on training more and more its going good.',
        //         'timePublished' => time(),
        //     ],
        //     (object) [
        //         'title' => 'Painting',
        //         'description' => 'Have really got the bug for painting of late, hope Claire is not mad!',
        //         'timePublished' => time(),
        //     ],
        // ];

        // $projects = [
        //     (object) [
        //         "name" => "Business Management System",
        //         "shortDesc" => "Complete solution for Acme.",
        //         "pathLogo" => "logo-acme.svg",
        //         "type" => "notsure",
        //         "url" => "https://bms.acmefg.com/",
        //         "classes" => 'project-acme',
        //     ],
        //     (object) [
        //         "name" => "East Lancashire Table Tennis League",
        //         "shortDesc" => "Fixture, team and player management.",
        //         "pathLogo" => "logo-elttl.svg",
        //         "type" => "sport",
        //         "url" => "http://eastlancstt.org.uk/",
        //         "classes" => 'project-elttl',
        //     ],
        //     (object) [
        //         "name" => "AudioVisual Online",
        //         "shortDesc" => "Bespoke audio visual e-commerce platform.",
        //         "pathLogo" => "logo-avo.svg",
        //         "type" => "ecommerce",
        //         "url" => "https://audiovisualonline.co.uk/",
        //         "classes" => 'project-avo',
        //     ],
        //     (object) [
        //         "name" => "Github",
        //         "shortDesc" => "Various projects.",
        //         "pathLogo" => "logo-elttl.svg",
        //         "type" => "plugin",
        //         "url" => "http://github.com/",
        //         "classes" => 'project-github',
        //     ],
        // ];

        $content = new \App\Content;
        $projects = $content->where('type', $content::typeProject)->where('status', $content::statusPublished)->get();

        return view('welcome', [
            'projects' => $projects,
        ]);
    }
}
