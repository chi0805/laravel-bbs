@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">投稿を作成する</div>
                    <div class="panel-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="image">
                                <label for="title">タイトル</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                                <label for="message">感想</label>
                                <textarea class="form-control" name="message" id="message" value="{{ old('message') }}"></textarea>
                                <label for="tags">タグ</label>
                                <input type="text" class="form-control" name="tags" id="tags" value="{{ old('tags') }}" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-secondary">送信</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
