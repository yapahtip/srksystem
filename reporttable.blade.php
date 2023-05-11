@extends('layouts.master')
@section('content')
<link href="{{ URL::to('assets/css/custom_style.css') }}" rel="stylesheet">
{{-- message --}}
{!! Toastr::message() !!}

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('report/table') }}">List Report</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List User</h4>
                        <a href="report/exportpdf" class="btn-btn-info">Export PDF</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Report ID</th>
                                        <th>Open Date</th>
                                        <th>Open Name</th>
                                        <th>SRK Group</th>
                                        <th>Student Name</th>
                                        <th>Student Matric</th>
                                        <th>Student Tel No.</th>
                                        <th>Location</th>
                                        <th>Case</th>
                                        <th>Chronology</th>
                                        <th>Status</th>
                                        <th>Close Name</th>
                                        <th>Close Date</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($report_table as $key=>$items)
                                    <tr>
                                        {{-- <td><img class="rounded-circle" width="35" src="{{URL::to('assets/images/'.$items->avatar)}}" alt=""></td> --}}
                                        <td class="id">{{$items->id}}</td>
                                        <td class="open_date">{{$items->open_date}}</td>
                                        <td class="openname">{{$items->openname}}</td>
                                        <td class="srkgroup">{{$items->srkgroup}}</td>
                                        <td class="studentname">{{$items->studentname}}</td>
                                        <td class="studentmatric">{{$items->studentmatric}}</td>
                                        <td class="studenttelno">0{{$items->studenttelno}}</td>
                                        <td class="location">{{$items->location}}</td>
                                        <td class="case">{{$items->kes}}</td>
                                        <td class="chronology">{{$items->chronology}}</td>
                                        <td class="status">{{$items->status}}</td>
                                        <td class="closename">{{$items->closename}}</td>
                                        <td class="close_date">{{$items->close_date}}</td>
                                        {{-- <td><img class="rounded-circle" width="35" src="{{URL::to('assets/images/report/'.$items->photo)}}" alt=""></td> --}}
                                        <td><img class="rounded-circle" width="35" src="{{URL::to('../../fyp_flutter/image/'.$items->photo)}}" alt=""></td>
                                        {{-- <td><img src="{{asset('assets/images/report/'.$items->photo)}}"  alt="" style="width:40px;"></td> --}}

                                        {{-- <td hidden class="role_name">{{$items->role_name}}</td>
                                        @if ($items->role_name =='Admin')
                                        <td><span class="badge light badge-success">{{$items->role_name}}</span></td>
                                        @else
                                        <td><span class="badge light badge-info">{{$items->role_name}}</span></td>
                                        @endif --}}
                                        {{-- <td class="email">{{$items->email}}</td>
                                        <td hidden class="phone_number">{{$items->phone_number}}</td>
                                        <td hidden class="status">{{$items->status}}</td>
                                        @if ($items->status =='active')
                                        <td>
                                            <span class="badge light badge-success">
                                            <i class="fa fa-circle text-success me-1"></i>{{$items->status}}
                                            </span>
                                        </td>
                                        @else
                                        <td>
                                            <span class="badge light badge-denger">
                                            <i class="fa fa-circle text-denger me-1"></i>{{$items->status}}
                                            </span>
                                        </td>
                                        @endif

                                        <td class="join_date">{{$items->join_date}}</td> --}}
                                        <td>
                                            <div class="d-flex">
                                                @if  (Session::get('role_name') =='Admin')
                                                <a class="btn btn-primary shadow btn-xs sharp me-1 edit_user" href="#" data-toggle="modal" data-target="#edit_user"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger shadow btn-xs sharp delete_user" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i></a>
                                                @elseif (Session::get('role_name') !='Admin')
                                                    @if ($items->status == 'open')
                                                        <a class="btn btn-primary shadow btn-xs sharp me-1 edit_user" href="#" data-toggle="modal" data-target="#edit_user"><i class="fas fa-pencil-alt"></i></a>
                                                {{-- <a class="btn btn-danger shadow btn-xs sharp delete_user" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i></a> --}}
                                                    @endif
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Report ID</th>
                                        <th>Open Date</th>
                                        <th>Open Name</th>
                                        <th>SRK Group</th>
                                        <th>Student Name</th>
                                        <th>Student Matric</th>
                                        <th>Student Tel No.</th>
                                        <th>Location</th>
                                        <th>Case</th>
                                        <th>Chronology</th>
                                        <th>Status</th>
                                        <th>Close Name</th>
                                        <th>Close Date</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Expense Modal -->
<div id="edit_user" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('report/update') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">ID</label>
                            <input type="text" placeholder="Report ID" class="form-control" id="e_id" name="id" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Student Name</label>
                            <input type="text" placeholder="Student Name" class="form-control" id="e_studentname" name="studentname" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Student Matric</label>
                            <input type="text" placeholder="Student Matric" class="form-control" id="e_studentmatric" name="studentmatric">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Student Tel No.</label>
                            <input type="text" placeholder="Student Tel No." class="form-control" id="e_studenttelno" name="studenttelno" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Location</label>
                            <input type="tel" placeholder="Location" class="form-control" id="e_location" name="location">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Case</label>
                            <input type="text" placeholder="Case" class="form-control" id="e_case" name="case" >
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Chronology</label>
                            <input type="tel" placeholder="Chronology" class="form-control" id="e_chronology" name="chronology" >
                        </div>
                    </div>
                    {{-- <input type="text" class="form-control" placeholder="Close Name" name="closename" value="{{ Session::get('name') }}"> --}}
                    {{-- <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Close Name</label>
                            <input type="text" class="form-control" placeholder="Close Name" id="e_closename" name="closename" >
                        </div>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Upload File</label>
                            <div class="input-group mb-6">
                                <div class="form-file">
                                    <input type="file" class="form-file-input form-control" id="e_photo" name="photo">
                                </div>
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div> --}}
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary-save submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Expense Modal -->

<!-- Delete User Modal -->
<div class="modal custom-modal fade" id="delete_user" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete User</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ route('report/delete') }}" method="POST">
                        @csrf
                        <input type="hidden" placeholder="Report ID" class="form-control" id="e_id2" name="id" readonly>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary-cus continue-btn submit-btn">Delete</button>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary-cus cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete User Modal -->
@section('script')
    <!-- Bootstrap Core JS -->
    <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>

    {{-- show data on model or edit --}}
    <script>
        $(document).on('click','.edit_user',function()
        {
            var _this = $(this).parents('tr');


            $('#e_id').val(_this.find('.id').text());
            $('#e_studentname').val(_this.find('.studentname').text());
            $('#e_studentmatric').val(_this.find('.studentmatric').text());
            $('#e_studenttelno').val(_this.find('.studenttelno').text());
            $('#e_location').val(_this.find('.location').text());
            $('#e_case').val(_this.find('.case').text());
            $('#e_chronology').val(_this.find('.chronology').text());
            // $('#e_closename').val(_this.find('.closename').text());
            // $('#e_photo').val(_this.find('.photo').text());
        });
    </script>

    {{-- delete user --}}
    <script>
        $(document).on('click','.delete_user',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id2').val(_this.find('.id').text());
        });
    </script>

@endsection
@endsection
