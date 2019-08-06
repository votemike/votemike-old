<?php

namespace Votemike\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        $keywords = ['LAMP', 'PHP', 'Laravel', 'Javascript', 'AngularJs', 'REST' , 'MySQL', 'HTML5', 'CSS3', 'ReactJS', 'NodeJS', 'Web Performace', 'SEO', 'Accessibility'];
        $sites = [
            'Blog' => ['title' => 'My blog', 'link' => route('showBlogPosts')],
            'CssPalette' => ['title' => 'Check which CSS colours you have on your site', 'link' => 'http://www.csspalette.co'],
            'Inveniō' => ['title' => 'Online video discovery', 'link' => 'https://inveniō.com'],
            'Property Stress Test' => ['title' => 'Demo Property Stress Test Tool', 'link' => route('stressTest')],
            'Tah-Do' => ['title' => 'Impact/Effort ToDo List and Chart', 'link' => 'https://tahdo.app'],
        ];
        $personal = [
            'Github' => ['title' => 'GitHub account', 'link' => 'https://github.com/votemike'],
            'StackOverflow' => ['title' => 'StackOverflow account', 'link' => 'http://stackoverflow.com/users/4009201/votemike'],
            'LinkedIn' => ['title' => 'LinkedIn page', 'link' => 'https://www.linkedin.com/pub/michael-gwynne/b/b5a/299'],
        ];
        $workedOn = [
            'BBC Sounds' => ['title' => 'Live and on-demand radio and podcasts', 'link' => 'https://www.bbc.co.uk/sounds'],
            '/programmes' => ['title' => 'A record of everything on BBC Television and Radio', 'link' => 'https://www.bbc.co.uk/programmes'],
            'British Airport Transfers' => ['title' => 'Taxi booking website', 'link' => 'http://www.british-airport-transfers.co.uk/'],
            'MNO Gallery' => ['title' => 'Photography online shop', 'link' => 'http://www.mnogallery.com/'],
            'KPlus' => ['title' => 'Moodle based LMS for Kaplan', 'link' => 'https://online.kaplaninternational.com'],
            'Paddle (Vendors Site)' => ['title' => 'Paddle\'s site for Vendors', 'link' => 'https://vendors.paddle.com/'],
        ];
        return view('welcome')->withKeywords($keywords)->withSites($sites)->withPersonal($personal)->withWorkedon($workedOn);
    }
}
