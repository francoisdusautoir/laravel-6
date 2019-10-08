<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Reddit\GuzzleRedditClient;

class RedditController extends Controller
{
    
    public function show($subreddit, GuzzleRedditClient $reddit)
    {
    	$articles = $reddit->getArticles($subreddit);
		return view('reddit.list', compact('articles', 'subreddit'));
    }

}
