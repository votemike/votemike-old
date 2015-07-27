<?php

namespace Votemike\Http\Controllers;


class HomeController extends Controller
{
    public function index() {
        $keywords = ['LAMP', 'PHP', 'Laravel', 'Javascript', 'AngularJs', 'REST' , 'MySQL', 'HTML5', 'CSS3'];
        $sites = [
            'CssPalette' => ['title' => 'Check which CSS colours you have on your site', 'link' => 'http://www.csspalette.co'],
            'Short Twitter Names' => ['title' => 'Find the shortest available Twitter name', 'link' => 'http://www.shorttwitter.name']
        ];
        $personal = [
            'Github' => ['title' => 'GitHub account', 'link' => 'https://github.com/votemike'],
            'StackOverflow' => ['title' => 'StackOverflow account', 'link' => 'http://stackoverflow.com/users/4009201/votemike'],
            'LinkedIn' => ['title' => 'LinkedIn page', 'link' => 'https://www.linkedin.com/pub/michael-gwynne/b/b5a/299']
        ];
        $workedOn = [
            'Twitter Tools' => ['title' => 'Tools to check various personal Twitter information', 'link' => 'http://www.switchplane.com/awesome/'],
            'Extrascents' => ['title' => 'Discount perfume website', 'link' => 'http://www.extrascents.com/'],
            'British Airport Transfers' => ['title' => 'Taxi booking website', 'link' => 'http://www.british-airport-transfers.co.uk/'],
            'MNO Gallery' => ['title' => 'Photography online shop', 'link' => 'http://www.mnogallery.com/'],
            'KPlus' => ['title' => 'Moodle based LMS for Kaplan', 'link' => 'https://online.kaplaninternational.com']
        ];
        return view('welcome')->withKeywords($keywords)->withSites($sites)->withPersonal($personal)->withWorkedon($workedOn);
    }
}
