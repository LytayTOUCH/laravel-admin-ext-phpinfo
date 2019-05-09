<?php

namespace Korko\PHPInfo\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;
use Korko\PHPInfo\PHPInfo;

class PHPInfoController extends Controller
{
    public function index(Content $content, PHPInfo $info)
    {
        $info = $info->toCollection();
        return $content
            ->header('PHP Informations')
            ->description('Description')
            ->body(view('phpinfo::index', compact('info')));
    }
}
