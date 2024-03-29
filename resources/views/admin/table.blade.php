@extends('layouts.master')
@section('content')
         <div class="panel-header">


        </div>


        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Branches</h4>
                        </div>
                        <div class="card-body">

                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <table id="datatable" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>23</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sidney</td>
                                    <td>37</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Prescott Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gavin Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Martena Mccray</td>
                                    <td>Post-Sales support</td>
                                    <td>Edinburgh</td>
                                    <td>46</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Unity Butler</td>
                                    <td>Marketing Designer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Howard Hatfield</td>
                                    <td>Office Manager</td>
                                    <td>San Francisco</td>
                                    <td>51</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hope Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>41</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vivian Harrell</td>
                                    <td>Financial Controller</td>
                                    <td>San Francisco</td>
                                    <td>62</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Timothy Mooney</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>37</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jackson Bradshaw</td>
                                    <td>Director</td>
                                    <td>New York</td>
                                    <td>65</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i
                                                    class="fas fa-heart"></i></a>
                                        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i
                                                    class="far fa-calendar-alt"></i></a>
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i
                                                    class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- end content-->
                    </div><!--  end card  -->
                </div> <!-- end col-md-12 -->
            </div> <!-- end row -->

        </div>




<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>


<script src="assets/js/core/bootstrap.min.js"></script>


<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<script src="assets/js/plugins/moment.min.js"></script>


<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for Sweet Alert -->
<script src="assets/js/plugins/sweetalert2.min.js"></script>

<!-- Forms Validations Plugin -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="assets/js/plugins/bootstrap-datetimepicker.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="assets/js/plugins/fullcalendar.min.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="assets/js/plugins/jquery-jvectormap.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js"></script>


<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="buttons.github.io/buttons.js"></script>


<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>


<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-dashboard.min44ca.js?v=1.4.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>


<!-- Sharrre libray -->
<script src="assets/demo/jquery.sharrre.js"></script>

<script>
    $(document).ready(function () {


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: {twitter: {via: 'CreativeTim'}},
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/now-ui-dashboard-pro/examples/dashboard.html'
        });


        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-46172202-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        // Facebook Pixel Code Don't Delete
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }

    });
</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
    />

</noscript>

<script>
    $(document).ready(function () {
        $().ready(function () {
            $sidebar = $('.sidebar');
            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
            //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
            //         $('.fixed-plugin .dropdown').addClass('show');
            //     }
            //
            // }

            $('.fixed-plugin a').click(function (event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    }
                    else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function () {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function () {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function () {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    nowuiDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    nowuiDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });
        });
    });
</script>


<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });

        var table = $('#datatable').DataTable();

        // Edit record
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function () {
            alert('You clicked on Like button');
        });
    });
</script>


@stop