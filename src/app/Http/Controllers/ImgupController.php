<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ImgupController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imgup');
    }

    // /**
    //  * ファイルアップロード処理
    //  */
    // public function upload(Request $request)
    // {
    //     $this->validate($request, [
    //         'file' => [
    //             // 必須
    //             'required',
    //             // アップロードされたファイルであること
    //             'file',
    //             // 画像ファイルであること
    //             'image',
    //             // MIMEタイプを指定
    //             'mimes:jpeg,png',
    //         ]
    //     ]);

    //     if ($request->file('file')->isValid([])) {
    //         $path = $request->file->store('public');
    //         return view('imgup')->with('filename', basename($path));
    //     } else {
    //         return redirect()
    //             ->back()
    //             ->withInput()
    //             ->withErrors();
    //     }
    // }
}

/**
     * ファイルアップロード処理
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $path = $request->file->store('public');
            return view('home')->with('filename', basename($path));
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }
    }