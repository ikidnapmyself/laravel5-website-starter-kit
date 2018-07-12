<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    /**
     * @var Youtube $youtube
     */
    private $youtube;

    public function __construct()
    {
        try {
            $this->youtube = new \Madcoda\Youtube\Youtube(['key' => env('YOUTUBE_API_KEY')]);
        } catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function listChannelVideos($channelId, $maxResults = 10, $order = null, $part = ['id', 'snippet'], $pageInfo = false)
    {
        $params = array(
            'type' => 'video',
            'channelId' => $channelId,
            'part' => implode(', ', $part),
            'maxResults' => $maxResults,
            'q' => ''
        );
        if (!empty($order)) {
            $params['order'] = $order;
        }
        try{
            return $this->youtube->searchAdvanced($params, $pageInfo);
        } catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function index()
    {
        $results = $this->listChannelVideos('');

        $gallery = [];

        foreach ($results as $key => $result)
        {
            $gallery[] = [
                'thumbnail' => asset($result->snippet->thumbnails->default->url),
                'title'     => $result->snippet->title,
                'link'      => url('https://www.youtube.com/embed/'.$result->id->videoId),
                'date'      => date('d-m-Y', strtotime($result->snippet->publishedAt)),
            ];
        }

        return view('gallery', ['gallery' => $gallery]);
    }
}
