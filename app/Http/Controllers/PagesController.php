<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
  //   	session()->flash('success', 'This is a success alert—check it out!');
		// session()->flash('danger', 'This is a danger alert—check it out!');
		// session()->flash('warning', 'This is a warning alert—check it out!');
		// session()->flash('info', 'This is a info alert—check it out!');
        return view('pages.root');

    }

    public function permissionDenied()
    {
        // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('pages.permission_denied');
    }
}
