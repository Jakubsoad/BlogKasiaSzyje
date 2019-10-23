<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        return view('shop');
    }

    public function send_message(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'mail' => 'required|email',
            'message' => 'required'
        ]);


        return view('success');
    }

    public function messages()
    {
        return [
            'name.required' => 'siema',
            'mail.required'  => 'heja',
            'message.required'  => 'elo'
        ];
    }
}
