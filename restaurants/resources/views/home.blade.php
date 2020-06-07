@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">投稿</div>
          <div class="panel-body">
            <a href="records/create" class="btn btn-default btn-block">
              投稿する
            </a>
          </div>
          <div class="list-group">
            @foreach($records as $record)
              <a
                  href="#"
                  class="list-group-item"
              >
                {{ $record->title }}
              </a>
              <div>
                {{ $record->message}}
              </div>
            @endforeach
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection

