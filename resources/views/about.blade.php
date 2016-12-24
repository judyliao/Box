@extends('layouts.app')

@section('content')
<div class="container contentbody">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">關於我們</div>
                <div class="panel-body">
                    施工中...
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">聯絡資訊</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">分店</th>
                                <th class="text-center">分店資訊</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3" class="text-center" style="width:25%; vertical-align:middle;">延吉店</td>
                                <td>
                                    <img class="location">台北市大安區延吉街137巷30號1樓
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="phone">02-2711-9925 / 0981-322-120
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="clock">AM 7:00 - PM 7:30
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="text-center" style="width:25%; vertical-align:middle;">八德店</td>
                                <td>
                                    <img class="location">台北市松山區八德路三段121號之4
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="phone">02-2578-1010 / 0972-003-955
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="clock">AM 7:00 - PM 7:30
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
