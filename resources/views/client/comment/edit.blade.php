{{-- @extends('layouts.app') <!-- hoặc layout bạn đang dùng -->

@section('content')
    <div class="container">
        <h4>Sửa bình luận</h4>

        <form action="{{ route('client.comment.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="content">Nội dung</label>
                <textarea name="content" class="form-control" rows="4">{{ old('content', $comment->content) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Cập nhật</button>
        </form>
    </div>
@endsection --}}