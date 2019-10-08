<?php

namespace App\Services\Reddit;
use \GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;


class GuzzleRedditClient implements RedditClient
{

	private $client;

	public function __construct()
	{
		$this->client = new Client([
            'headers' => ['User-Agent' => true]
        ]);
	}

	public function getArticles($subreddit)
	{
		try {
			$response = $this->client->request('GET', "https://www.reddit.com/r/$subreddit.json");
			$datas = collect(json_decode($response->getBody(), true)['data']['children'])->paginate(10);
		}
		catch(ClientException $e) {
			//abort($e->getCode());
			$datas = [];
		}

		return $datas;
	}
	
}