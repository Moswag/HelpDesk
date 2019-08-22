@extends('layouts.master')
@section('content')

    <div class="panel-header panel-header-sm">


    </div>
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <form id="TypeValidation" class="form-horizontal" action="{{route('save_issue_category')}}" method="post">
                    {{csrf_field()}}
                    <div class="card ">

                        <div class="card-header ">
                            <h4 class="card-title">Add Issue Categories</h4>
                        </div>

                        <div class="card-body ">


                            <div class="row">
                                <label class="col-sm-2 col-form-label">Category</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="category"
                                               required
                                        />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Responsible Department</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <select class="form-control"
                                                  type="text"
                                                  name="department"
                                                  required
                                        >
                                            @foreach($departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Priority</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <select class="form-control"
                                                  name="priority"
                                                  required>
                                            <option>Low</option>
                                            <option>High</option>
                                        </select>
                                    </div>
                                </div>


                            </div>



                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </div>


                </form>
            </div>


        </div>

    </div>


@stop