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

        $blog->content = $this->processContentImages($blog->content);

        $relatedPosts = DB::table('blogs') // Đổi tên biến thành $relatedPosts
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('client.blog.blog-detail', [
            'blog' => $blog,
            'relatedPosts' => $relatedPosts // Truyền biến với tên chính xác
        ]);
    }
    private function processContentImages($content)
{
    if (empty($content)) {
        return $content;
    }

    // Xử lý cả thẻ img thông thường và thẻ figure từ Filament
    $content = preg_replace_callback(
        '/(<img[^>]+src="([^"]+)"[^>]*>)|(<figure[^>]+data-trix-attachment="([^"]+)"[^>]*>.*?<\/figure>)/i',
        function ($matches) {
            // Xử lý thẻ img thông thường
            if (!empty($matches[1]) && !empty($matches[2])) {
                $src = $matches[2];
                return $this->processImageSrc($matches[1], $src);
            }

            // Xử lý thẻ figure từ Filament
            if (!empty($matches[3]) && !empty($matches[4])) {
                $json = json_decode(htmlspecialchars_decode($matches[4]), true);
                if (isset($json['url'])) {
                    $src = $json['url'];
                    $imgTag = '<img src="' . $src . '"';
                    if (isset($json['width'])) $imgTag .= ' width="' . $json['width'] . '"';
                    if (isset($json['height'])) $imgTag .= ' height="' . $json['height'] . '"';
                    $imgTag .= ' class="img-fluid">';
                    return $this->processImageSrc($imgTag, $src);
                }
            }

            return $matches[0];
        },
        $content
    );

    return $content;
}

private function processImageSrc($imgTag, $src)
{
    // Nếu đã là URL đầy đủ (http/https)
    if (preg_match('/^https?:\/\//i', $src)) {
        // Chuyển đổi localhost storage URL thành URL đúng
        $baseUrl = url('/');
        $newSrc = str_replace('http://localhost/storage/', $baseUrl.'/storage/', $src);
        return str_replace($src, $newSrc, $imgTag);
    }

    // Xử lý đường dẫn tương đối
    if (strpos($src, 'storage/') === 0) {
        $newSrc = asset($src);
        return str_replace($src, $newSrc, $imgTag);
    }

    return $imgTag;
}
}
