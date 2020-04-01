@extends('common.layout')
@section('addCSS')
<link href="{{{asset('/assets/css/〇〇.css')}}}" rel="stylesheet">
@stop
@include('common.header')
@section('content')
    <h1>HelloWorld</h1>
@stop
@section('addJS')
<script type="text/javascript" src="{{{asset('/assets/js/〇〇.js')}}}"></script>
@stop
@include('common.footer')
