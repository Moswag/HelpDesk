<div class="sidebar" data-color="green">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->

    <div class="logo">
        <a href="" class="simple-text logo-mini">
            FC
        </a>

        <a href="" class="simple-text logo-normal">
            Farm And City
        </a>

        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-simple btn-icon btn-neutral btn-round">
                <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
                <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
            </button>
        </div>

    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">

        <div class="user">
            <div class="photo">
                <img src="{{URL::to('assets/img/user.png')}}"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{auth()->user()->name}}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">

                        <li>
                            <a href="{{route('logout')}}">
                                <span class="sidebar-mini-icon">L</span>
                                <span class="sidebar-normal">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
        @if(auth()->user()->role==\App\AppConstants::USER_ADMIN)

            <li @if($active==\App\AppConstants::DASHBOARD)
                class="active"
                    @endif
            >


                <a href="{{route('admin_dashboard')}}">

                    <i class="now-ui-icons design_app"></i>

                    <p>Dashboard</p>
                </a>

            </li>

            <li
                    @if($active==\App\AppConstants::BRANCH)
                    class="active"
                    @endif
            >


                <a data-toggle="collapse" href="#pagesExamples">

                    <i class="now-ui-icons design_image"></i>

                    <p>
                        Branches <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="pagesExamples">
                    <ul class="nav">

                        <li>
                            <a href="{{route('add_branch')}}">
                                <span class="sidebar-mini-icon">AB</span>
                                <span class="sidebar-normal"> Add Branch </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('view_branches')}}">
                                <span class="sidebar-mini-icon">VB</span>
                                <span class="sidebar-normal">View Branches </span>
                            </a>
                        </li>

                    </ul>
                </div>


            </li>

            <li @if($active==\App\AppConstants::DEPARTMENT)
                class="active"
                    @endif>


                <a data-toggle="collapse" href="#componentsExamples">

                    <i class="now-ui-icons education_atom"></i>

                    <p>
                        Departments <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="componentsExamples">
                    <ul class="nav">

                        <li>
                            <a href="{{route('add_department')}}">
                                <span class="sidebar-mini-icon">AD</span>
                                <span class="sidebar-normal"> Add Department </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('view_departments')}}">
                                <span class="sidebar-mini-icon">VD</span>
                                <span class="sidebar-normal">View Departments </span>
                            </a>
                        </li>


                    </ul>
                </div>


            </li>

            <li>


                <a data-toggle="collapse" href="#formsExamples">

                    <i class="now-ui-icons files_single-copy-04"></i>

                    <p>
                        Issue Categories <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="formsExamples">
                    <ul class="nav">

                        <li>
                            <a href="{{route('add_issue_category')}}">
                                <span class="sidebar-mini-icon">AI</span>
                                <span class="sidebar-normal"> Add Issue Category </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('view_issue_categories')}}">
                                <span class="sidebar-mini-icon">VC</span>
                                <span class="sidebar-normal"> View Categories </span>
                            </a>
                        </li>



                    </ul>
                </div>


            </li>

            <li>


                <a data-toggle="collapse" href="#tablesExamples">

                    <i class="now-ui-icons design_bullet-list-67"></i>

                    <p>
                       Employees <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="tablesExamples">
                    <ul class="nav">

                        <li>
                            <a href="{{route('add_employee')}}">
                                <span class="sidebar-mini-icon">AE</span>
                                <span class="sidebar-normal"> Add Employee </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('view_employees')}}">
                                <span class="sidebar-mini-icon">VE</span>
                                <span class="sidebar-normal"> View Employees </span>
                            </a>
                        </li>


                    </ul>
                </div>


            </li>

                <li>


                    <a data-toggle="collapse" href="#tablesExamples1">

                        <i class="now-ui-icons design_bullet-list-67"></i>

                        <p>
                            Issues <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse " id="tablesExamples1">
                        <ul class="nav">

                            <li>
                                <a href="{{route('view_issues')}}">
                                    <span class="sidebar-mini-icon">INA</span>
                                    <span class="sidebar-normal"> Issues Not Assigned </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('view_all_issues')}}">
                                    <span class="sidebar-mini-icon">IS</span>
                                    <span class="sidebar-normal"> Issues </span>
                                </a>
                            </li>


                        </ul>
                    </div>


                </li>

            @else
                <li @if($active==\App\AppConstants::DASHBOARD)
                    class="active"
                        @endif
                >


                    <a href="{{route('employee_dashboard')}}">

                        <i class="now-ui-icons design_app"></i>

                        <p>Dashboard</p>
                    </a>

                </li>
            <li>


                <a data-toggle="collapse" href="#tablesExamples">

                    <i class="now-ui-icons design_bullet-list-67"></i>

                    <p>
                        Issue <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="tablesExamples">
                    <ul class="nav">

                        <li>
                            <a href="{{route('report_issue')}}">
                                <span class="sidebar-mini-icon">RI</span>
                                <span class="sidebar-normal"> Report Issue </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('my_reported_issues')}}">
                                <span class="sidebar-mini-icon">MRI</span>
                                <span class="sidebar-normal">My Reported Issues </span>
                            </a>
                        </li>


                    </ul>
                </div>


            </li>
            <li>


                <a data-toggle="collapse" href="#formsExamples">

                    <i class="now-ui-icons files_single-copy-04"></i>

                    <p>
                        Tasks <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse " id="formsExamples">
                    <ul class="nav">

                        <li>
                            <a href="{{route('my_tasks')}}">
                                <span class="sidebar-mini-icon">MT</span>
                                <span class="sidebar-normal"> My Tasks </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('my_closed_tasks')}}">
                                <span class="sidebar-mini-icon">CT</span>
                                <span class="sidebar-normal"> Closed Tasks </span>
                            </a>
                        </li>



                    </ul>
                </div>


            </li>
        @endif


        </ul>
    </div>
</div>