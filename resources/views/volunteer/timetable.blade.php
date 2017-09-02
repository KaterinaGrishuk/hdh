@extends('layouts.main')

@section('content')
    <section class="help">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{--<h3>К сожалению, графика дежурств пока нет<i class="fa fa-pencil-square-o" aria-hidden="true"></i></h3>--}}
                    {{--<div class="empty_div">--}}

                    {{--</div>--}}
                    <table class="table table-bordered table-condensed">
                        <thear>
                            <tr>
                                <td colspan="8">График с 00.00 по 00.00</td>
                            </tr>
                        </thear>
                        <tbody>
                            {{ Form::open(['method'=>"post", 'name'=>"timetable", 'id'=>"js-timetable"]) }}

                            <tr>
                                <td colspan="8">По вопросам графика звонить Кате или Саше</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Понедельник</td>
                                <td>Вторник</td>
                                <td>Среда</td>
                                <td>Четверг</td>
                                <td>Пятница</td>
                                <td>Суббота</td>
                                <td>Воскресенье</td>
                            </tr>
                            <tr>
                                <td colspan="8">Утренняя смена</td>
                            </tr>
                            <tr>
                                <td>Время выезда</td>
                                @for($i=0; $i<7; $i++)
                                    <td></td>
                                @endfor
                            </tr>
                            <tr>
                                <td>Водитель</td>
                                @for($i=0; $i<7; $i++)
                                    <td></td>
                                @endfor
                            </tr>
                            @for($i=0; $i<2; $i++)
                                <tr>
                                    <td></td>
                                    @for($y=0; $y<7; $y++)
                                        <td class="js-write-cell"><input type="hidden" name="user_name" class="save-edit" value="'+text+'" /></td>
                                    @endfor
                                </tr>
                            @endfor
                            {{ Form::close() }}
                        </tbody>
                    </table>
                    <button id="js-save-timetable">Сохранить</button>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    @parent
    <link rel="stylesheet" href="/css/timetable.css">
@endsection