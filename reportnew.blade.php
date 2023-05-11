
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('report/new') }}">Create Report</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-xl-12">
                            <form action="insert" method="post" enctype="multipart/form-data">
                                @csrf
                                    {{-- <label class="form-label">Open Name</label> --}}

                                <input hidden type="text" placeholder="Open Name" class="form-control" name="openname" value="{{ Session::get('name') }}">
                                <input hidden type="text" placeholder="SRK Group" class="form-control" name="srkgroup" value="{{ Session::get('group_name') }}">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Student Name</label>
                                        <input type="text" placeholder="Student Name" class="form-control" name="studentname" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Student Matric</label>
                                        <input type="text" placeholder="Student Matric" class="form-control" name="studentmatric">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Student Tel No.</label>
                                        <input type="text" placeholder="Student Tel No." class="form-control" name="studenttelno" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Location</label>
                                        <input type="tel" placeholder="Location" class="form-control" name="location">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Case</label>
                                        <input type="text" placeholder="Case" class="form-control" name="case" >
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Chronology</label>
                                        <input type="tel" placeholder="Chronology" class="form-control" name="chronology" >
                                    </div>
                                </div>
                                <div class="row">

                                    {{-- <div class="mb-3 col-md-6">
                                        <label class="form-label">Close Name</label>
                                        <input type="text" class="form-control" placeholder="Close Name" name="closeename" >
                                    </div> --}}
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Upload File</label>
                                        <div class="input-group mb-6">
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control" name="photo">
                                            </div>
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')

@endsection
@endsection
