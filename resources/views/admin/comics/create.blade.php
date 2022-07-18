@extends('admin.templates.base')

@section('mainContent')
    <h1>Insert new comic</h1>

    <form action="{{route('comics.store')}}" method="post">
        sono il form
    </form>
@endsection