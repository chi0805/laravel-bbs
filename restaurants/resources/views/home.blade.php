@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <nav class="panel panel-default">
                    <div class="panel-heading">投稿</div>
                    <div class="panel-body">
                    </div>
                    <div class="record-list">
                        <ul class="record-list-items">
                            @foreach($records as $record)
                                <li class="record-item">
                                    <img src="{{ asset('storage/images/' . $record->image) }}" class="record-item-img" alt="カードの画像" style="width:80%;">
                                    <div href="#" class="record-item-body">
                                        <h5 class="card-title">{{ $record->title }}</h5>
                                        <div class="record-item-tags">
                                            @foreach($record->tags as $tag)
                                                <a href="#">{{ $record->tag }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection

