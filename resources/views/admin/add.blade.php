@extends('layouts.master')
@section('content')

    <div class="panel-header panel-header-sm">


    </div>
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <form id="TypeValidation" class="form-horizontal" action="#" method="">


                    <div class="card ">

                        <div class="card-header ">
                            <h4 class="card-title">Add Branch</h4>
                        </div>

                        <div class="card-body ">


                            <div class="row">
                                <label class="col-sm-2 col-form-label">Required Text</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="required"
                                               required="true"
                                        />
                                    </div>
                                </div>

                                <label class="col-sm-3 label-on-right"><code>required</code></label>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Email</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="email"
                                               email="true"
                                        />
                                    </div>
                                </div>

                                <label class="col-sm-3 label-on-right"><code>email="true"</code></label>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Number</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="number"
                                               number="true"
                                        />
                                    </div>
                                </div>

                                <label class="col-sm-3 label-on-right"><code>number="true"</code></label>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Url</label>

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <input class="form-control"
                                               type="text"
                                               name="url"
                                               url="true.html"
                                        />
                                    </div>
                                </div>

                                <label class="col-sm-3 label-on-right"><code>url="true"</code></label>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Equal to</label>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input class="form-control"
                                               id="idSource"
                                               type="text"
                                               placeholder="#idSource"
                                        />
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input class="form-control"
                                               id="idDestination"
                                               type="text"
                                               placeholder="#idDestination"
                                               equalTo="#idSource"
                                        />
                                    </div>
                                </div>

                                <label class="col-sm-4 label-on-right"><code>equalTo="#idSource"</code></label>
                            </div>


                        </div>


                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>


                </form>
            </div>


        </div>

    </div>


@stop