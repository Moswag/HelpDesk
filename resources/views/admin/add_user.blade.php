@extends('layouts.master')
@section('content')

    <div class="panel-header panel-header-sm">


    </div>
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <form id="TypeValidation" class="form-horizontal" action="{{route('save_employee')}}" method="post">
                    {{csrf_field()}}
                    <div class="card ">
                        @if(Session::has('message'))
                        <div class="alert-success">{{Session::get('message')}}</div>
                        @else
                            <div class="alert-danger">{{Session::get('error')}}</div>
                            @endif
                        <div class="card-header ">
                            <h4 class="card-title">Add Employee</h4>
                        </div>

                        <div class="card-body ">


                            <div class="row">
                                <label class="col-sm-2 col-form-label">Name</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="name"
                                               required
                                        />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="surname"
                                               required
                                        />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Email</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="email"
                                               name="email"
                                               required
                                        />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Employee ID</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="employee_id"
                                               required
                                        />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Branches</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <select class="form-control"
                                                type="text"
                                                name="department"
                                                required>
                                            @foreach($branches as $branch)
                                                <option value="{{$branch->id}}">{{$branch->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Department</label>

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
                                <label class="col-sm-2 col-form-label">Extension</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="extension"
                                               required
                                        />
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