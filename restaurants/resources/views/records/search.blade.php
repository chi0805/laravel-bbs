@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">探す</div>
                    <div class="panel-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="message">キーワード</label>
                                <input type="text" class="form-control" name="message" id="message" value="{{ old('message') }}"></input>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-secondary">検索</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

    </div>
@endsection
