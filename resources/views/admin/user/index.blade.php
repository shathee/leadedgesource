@extends('layouts.admin')

@section('top-row')


<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Table design <small>Custom design</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <p>List of<code>All Users</code> </p>

                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th>
                                        <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">ID </th>
                                    <th class="column-title">Name </th>
                                    <th class="column-title">email </th>
                                    <th class="column-title">Bill to Name </th>
                                    <th class="column-title">Last Updated </th>
                                    <th class="column-title">Amount </th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                    </tr>
                </thead>

                <tbody>
                @foreach($users as $u)
                    @if($u->id%2==0)
                        @php
                        $oe = 'odd'
                        @endphp
                    @else
                        @php
                        $oe = 'even'
                        @endphp
                    @endif

                    <tr class="{{$oe}} pointer">
                        <td class="a-center "><input type="checkbox" class="flat" name="table_records" ></td>
                        <td class=" ">{{$u->id}}</td>
                        <td class=" ">{{$u->name}}</td>
                        <td class=" ">{{$u->email}} <i class="success fa fa-long-arrow-up"></i></td>
                        <td class=" ">John Blank L</td>
                        <td class=" ">{{$u->updated_at}}</td>
                        <td class="a-right a-right ">$7.45</td>
                        <td class=" last">
                            <a href="#">
                                <button type="button" class="btn btn-dark">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>

                        </table>
                    </div>
                </div>
            </div>
@endsection