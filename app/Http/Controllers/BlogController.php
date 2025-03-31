<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs')
            ->join('users', 'blogs.user_id', '=', 'users.id')
            ->select('blogs.*', 'users.name as author_name')
            ->get();
        return view('client.blog.blog', ['blogs' => $blogs]);
    }

    public function show($id = 0)
    {
        $blog = DB::table('blogs')
            ->join('users', 'users.id', '=', 'blogs.user_id')
            ->select('blogs.*', 'users.name as author_name')
            ->where('blogs.id', $id)
            ->first();

        if (!$blog) {
            abort(404);
        }

        // Xử lý nội dung để thay đổi đường dẫn ảnh
        if ($blog->content) {
            $blog->content = $this->processContentImages($blog->content);
        }

        $data = [
            'blog' => $blog,
            'relatedBlogs' => DB::table('blogs')
                ->where('id', '!=', $id)
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->get()
        ];

        return view('client.blog.blog-detail', $data);
    }

    private function processContentImages($content)
    {
        // Thay thế đường dẫn ảnh trong content
        $storagePath = asset('storage/');
        $content = preg_replace(
            '/<img([^>]+)src="([^"]+)"([^>]*)>/',
            '<img$1src="' . $storagePath . '/$2"$3>',
            $content
        );

        return $content;
    }
}
