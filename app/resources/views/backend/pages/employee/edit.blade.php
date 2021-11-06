@extends('backend.layout.template')
@section('body')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Edit Selected Employee</h4>
        <p class="mg-b-0">Add New Employee</p>
    </div>
</div>

<div class="br-pagebody"  style="
box-shadow: 1px 1px 2px 2px #b9b2b2;
padding:2%;
">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="pd-25">
                        <form action="{{route('employee.update',$employee->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" value="{{$employee->fullname}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="3">Please Select The Gender</option>
                                            <option value="1"@if($employee->gender == 1)selected @endif>Male</option>
                                            <option value="2"@if($employee->gender == 2)selected @endif>Female</option>
                                            <option value="3"@if($employee->gender == 3)selected @endif>Undefined</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" name="company" class="form-control" value="{{$employee->company}}" required="required" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="form-group">
                                         <label>Phone</label>
                                         <input type="text" name="phone" value="{{$employee->phone}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" value="{{$employee->email}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-gorup">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{$employee->address}}" class="form-control" required="required" autocomplete="off" >
                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1"  @if($employee->status == 1) selected @endif >Active</option>
                                            <option value="2" @if($employee->status == 2) selected @endif>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Group</label>
                                        <select class="form-control" name="group">
                                            <option value="3">Please Select The Group</option>
                                            <option value="1" @if($employee->group == 1) selected @endif>Owner</option>
                                            <option value="2" @if($employee->group == 2) selected @endif>Admin</option>
                                            <option value="3" @if($employee->group == 3) selected @endif>Sales</option>
                                        </select>
                                    </div>
                                     <div class="form-gorup">
                                        <label>Profile Picture</label>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <input type="submit" name="addEmployee" value="Save Changes" class=" btn btn-success btn-teal mg-b-10">
                            </div>
                        </form>
                    <!-- d-flex -->
                </div>
                <!-- d-flex -->
            </div>
            <!-- card -->

            {{-- page body content end --}}
        </div>
    </div>
</div>

@endsection
