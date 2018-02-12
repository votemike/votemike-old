<?php

namespace Votemike\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        $keywords = ['LAMP', 'PHP', 'Laravel', 'Javascript', 'AngularJs', 'REST' , 'MySQL', 'HTML5', 'CSS3'];
        $sites = [
            'Blog' => ['title' => 'My blog', 'link' => route('showBlogPosts')],
            'Bullshitter\'s Guide' => ['title' => 'Wiki for involving yourself in conversations you know nothing about', 'link' => 'http://bullshitters.guide/'],
            'CssPalette' => ['title' => 'Check which CSS colours you have on your site', 'link' => 'http://www.csspalette.co'],
            'Inveniō' => ['title' => 'Online video discovery', 'link' => 'https://inveniō.com'],
            'Property Stress Test' => ['title' => 'Demo Property Stress Test Tool', 'link' => route('stressTest')],
            'Used Blocks' => ['title' => 'Placeholder site for second hand phone blocks', 'link' => 'http://usedblocks.co.uk'],
        ];
        $personal = [
            'Github' => ['title' => 'GitHub account', 'link' => 'https://github.com/votemike'],
            'StackOverflow' => ['title' => 'StackOverflow account', 'link' => 'http://stackoverflow.com/users/4009201/votemike'],
            'LinkedIn' => ['title' => 'LinkedIn page', 'link' => 'https://www.linkedin.com/pub/michael-gwynne/b/b5a/299'],
        ];
        $workedOn = [
            '/schedules' => ['title' => 'BBC TV and Radio schedules', 'link' => 'https://www.bbc.co.uk/schedules'],
            'Twitter Tools' => ['title' => 'Tools to check various personal Twitter information', 'link' => 'http://www.switchplane.com/awesome/'],
            'British Airport Transfers' => ['title' => 'Taxi booking website', 'link' => 'http://www.british-airport-transfers.co.uk/'],
            'MNO Gallery' => ['title' => 'Photography online shop', 'link' => 'http://www.mnogallery.com/'],
            'KPlus' => ['title' => 'Moodle based LMS for Kaplan', 'link' => 'https://online.kaplaninternational.com'],
            'Paddle (Vendors Site)' => ['title' => 'Paddle\'s site for Vendors', 'link' => 'https://vendors.paddle.com/'],
        ];
        return view('welcome')->withKeywords($keywords)->withSites($sites)->withPersonal($personal)->withWorkedon($workedOn);
    }
}
