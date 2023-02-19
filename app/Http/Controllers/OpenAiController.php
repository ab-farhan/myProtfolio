<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class OpenAiController extends Controller
{
    public function index()
    {
        return view('layouts.backend.openai');
    }
    public function api(Request $request)
    {
        try {
            $client = new \GuzzleHttp\Client();

            $response = $client->post('https://api.openai.com/v1/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . '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',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'text-davinci-003',
                'prompt' => $request->data,
                    'temperature' => 0.5,
                    'max_tokens' => 100,
                    'top_p' => 1.0,
                    'frequency_penalty' => 0.0,
                    'presence_penalty' => 0.0
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            dump($result);
            dump($result['choices'][0]['text']);

            // Do something with the result

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
