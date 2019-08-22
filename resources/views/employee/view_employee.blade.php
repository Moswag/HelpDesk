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
                            <h4 class="card-title">View Employee</h4>
                        </div>

                        <div class="card-body ">


                            <div class="row">
                                <label class="col-sm-2 col-form-label">Name</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="name"
                                               value="{{$employee->name}}"
                                               disabled
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
                                               value="{{$employee->surname}}"
                                               disabled
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
                                               value="{{$employee->email}}"
                                               disabled
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
                                               value="{{$employee->employee_id}}"
                                               disabled
                                        />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Department</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="department"
                                               value="{{\App\Department::find($employee->department_id)->name}}"
                                               disabled
                                        />
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
                                               value="{{$employee->desk_phone}}"
                                               disabled
                                        />
                                    </div>
                                </div>

                            </div>

                        </div>


                </form>
            </div>


        </div>

    </div>


@stop