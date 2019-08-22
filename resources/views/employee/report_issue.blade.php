@extends('layouts.master')
@section('content')

    <div class="panel-header panel-header-sm">


    </div>
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <form id="TypeValidation" class="form-horizontal" action="{{route('save_report_issue')}}" method="post">
                    {{csrf_field()}}
                    <div class="card ">

                        <div class="card-header ">
                            <h4 class="card-title">Report Issue</h4>
                        </div>

                        <div class="card-body ">

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Issue Category</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <select class="form-control"
                                                type="text"
                                                name="category"
                                                required
                                        >
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                            @endforeach
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Description</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <textarea class="form-control"
                                               type="text"
                                               name="description"
                                               required
                                        ></textarea>
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