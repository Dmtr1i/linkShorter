<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{

    public function home() {
        return view('welcome', [
            'short_link' => null
        ]);
    }

    public function short(Request $request) {
        $data = $request->validate([
            'userLink' => ['required', 'url'],
        ]);
        $check = Link::get()
                    ->where('old_link', $data['userLink']
        );
        if (count($check) > 0)
        {
            return view('welcome', [
                'short_link' => $check->value('short_link')
            ]);
        }

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $individuality_check = true;
        $num = 3;
        $count = 5;
        while($individuality_check)
        {
            $shortLink = 'http://127.0.0.1:8000/';
            for ($i = 0; $i < $num; $i++) {
                $shortLink .= $characters[rand(0, strlen($characters) - 1)];
            }
            $count -= 1;
            if (count(Link::get()->where('short_link', $shortLink)) == 0) $individuality_check = false;
            if ($count == 0) {
                $num += 1;
                $count = 5;
            }
        }
        
        $link = Link::create([
            "old_link" => $data["userLink"],
            "short_link" => $shortLink
        ]);
        return view('welcome', [
            'short_link' => $shortLink
        ]);
    }

    public function getLink(Request $request) {
        $req = Link::get()
                ->where('short_link', $request['url']
        );
        $result = $req->value('old_link');
        if (count($req) > 0) {
            return view('redirect', [
                'short_link' => $req
            ]);
        } else {
            return view('welcome', [
                'short_link' => 'is missing in database, pleace try again or make new link!'
            ]);
        }
    }
}
