<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UserController@index')->name('index');
Route::post('/login','UserController@login')->name('login');


Route::group(['middleware'=>'auth'],function () {
    Route::get('/logout','UserController@logout')->name('logout');


    Route::group(['namespace' => 'Admin',], function () {
        Route::get('/admin_dashboard','AdminController@dashboard')->name('admin_dashboard');

        Route::get('/add_branch','BranchController@addBranch')->name('add_branch');
        Route::post('/save_branch','BranchController@saveBranch')->name('save_branch');
        Route::get('/view_branches','BranchController@viewBranches')->name('view_branches');


        Route::get('/add_department','DepartmentController@addDepartment')->name('add_department');
        Route::post('/save_department','DepartmentController@saveDepartment')->name('save_department');
        Route::get('/view_departments','DepartmentController@viewDepartments')->name('view_departments');

        Route::get('/add_issue_category','IssueCategoryController@addIssueCategory')->name('add_issue_category');
        Route::post('/save_issue_category','IssueCategoryController@saveIssueCategory')->name('save_issue_category');
        Route::get('/view_issue_categories','IssueCategoryController@viewIssueCategories')->name('view_issue_categories');


        Route::get('/add_employee','EmployeeController@addEmployee')->name('add_employee');
        Route::post('/save_employee','EmployeeController@saveEmployee')->name('save_employee');
        Route::get('/view_employees','EmployeeController@viewEmployees')->name('view_employees');

        Route::get('/view_issues','IssueController@viewIssues')->name('view_issues');
        Route::get('/assign_task/{id}','IssueController@assignTask')->name('assign_task');
        Route::post('/update_task','IssueController@assignUpdateTask')->name('update_task');
        Route::get('/view_all_issues','IssueController@viewAllIssues')->name('view_all_issues');




    });


    Route::group(['namespace' => 'Employee',], function () {

        Route::get('/employee_dashboard','ReportIssueController@dashboard')->name('employee_dashboard');
        Route::get('/report_issue','ReportIssueController@reportIssue')->name('report_issue');
        Route::post('/save_report_issue','ReportIssueController@saveReportIssue')->name('save_report_issue');
        Route::get('/my_reported_issues','ReportIssueController@viewMyReportedIssues')->name('my_reported_issues');


        Route::get('/my_tasks','TaskController@viewMyTasks')->name('my_tasks');
        Route::get('/edit_task/{id}','TaskController@editTask')->name('edit_task');
        Route::get('/my_closed_tasks','TaskController@viewClosedTasks')->name('my_closed_tasks');
        Route::get('/view_employee/{id}','TaskController@viewEmployee')->name('view_employee');

    });



});
