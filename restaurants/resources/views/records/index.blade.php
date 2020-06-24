@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <nav class="panel panel-default">
                    <div class="panel-heading">検索結果</div>
                    <div class="record-list">
                        <ul class="record-list-items">
                            @foreach($records as $record)
                                <li class="record-item">
                                    <a href="#">
                                        <img src="{{ asset('storage/images/' . $record->image) }}" class="record-item-image" alt="カードの画像">
                                    </a>
                                    <div href="#" class="record-item-body">
                                        <h5 class="card-title">{{ $record->title }}</h5>
                                        <div class="record-item-tags">
                                            @foreach($record->tags as $tag)
                                                <a href="#">#{{ $tag }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        <div class="clear paginate">{{ $records->links('pagination::default') }}</div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection

