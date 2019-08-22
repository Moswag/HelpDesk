@extends('layouts.master')
@section('content')
    <div class="panel-header panel-header-lg">

        <canvas id="bigDashboardChart"></canvas>


    </div>
    <div class="content">


        <div class="row">
            <div class="col-md-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="statistics">
                                    <div class="info">
                                        <div class="icon icon-primary">
                                            <i class="now-ui-icons ui-2_chat-round"></i>
                                        </div>
                                        <h3 class="info-title">859</h3>
                                        <h6 class="stats-title">Issues</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="statistics">
                                    <div class="info">
                                        <div class="icon icon-success">
                                            <i class="now-ui-icons business_money-coins"></i>
                                        </div>
                                        <h3 class="info-title">
                                            3,521
                                        </h3>
                                        <h6 class="stats-title">Resolved Issues</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="statistics">
                                    <div class="info">
                                        <div class="icon icon-info">
                                            <i class="now-ui-icons users_single-02"></i>
                                        </div>
                                        <h3 class="info-title">562</h3>
                                        <h6 class="stats-title">Pending Issues</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="statistics">
                                    <div class="info">
                                        <div class="icon icon-danger">
                                            <i class="now-ui-icons objects_support-17"></i>
                                        </div>
                                        <h3 class="info-title">353</h3>
                                        <h6 class="stats-title">Issues Not Fixed</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@stop