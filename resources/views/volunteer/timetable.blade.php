@extends('layouts.main')

@section('content')
    <section class="help">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>К сожалению, графика дежурств пока нет<i class="fa fa-pencil-square-o" aria-hidden="true"></i></h3>
                    <div class="empty_div">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/css/timetable.css">
@endsection