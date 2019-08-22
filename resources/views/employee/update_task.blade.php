@extends('layouts.master')
@section('content')

    <div class="panel-header panel-header-sm">


    </div>
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <form id="TypeValidation" class="form-horizontal" action="{{route('update_task')}}" method="post">
                    {{csrf_field()}}
                    <div class="card ">

                        <div class="card-header ">
                            <h4 class="card-title">Update Task</h4>
                        </div>

                        <div class="card-body ">
                            <input type="hidden" name="id" value="{{$issue->id}}">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                                type="text"
                                                name="category"
                                               value="{{$issue->category}}"
                                               disabled
                                        />

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Issue</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                                type="text"
                                                name="desc"
                                                value="{{$issue->description}}"
                                                disabled
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <select class="form-control"
                                                type="text"
                                                name="status"
                                                required
                                        >
                                            <option value="Closed">Close</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </div>


                </form>
            </div>


        </div>

    </div>


@stop