@extends('backend.layout.template')
@section('body')
<div class="br-pagetitle">
        <div>
        <h4>Manage All Employee</h4>
        <p class="mg-b-0">Manage All Employees From Here.</p>
    </div>
</div>
<div class="br-pagebody" style="
box-shadow: 1px 1px 2px 2px #b9b2b2;
padding:2%;">
    <div class="row">
        <div class="col-lg-12">
            {{-- page body content start --}}

            <div class="card bd-0 shadow-base">
                <div class="d-md-flex justify-content-between pd-25">
                    {{-- Table Content start --}}
                    <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table table-bordered table-striped table-hover table-custom">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#sl.</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">company</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Group</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($employees as $employee)
                                @php $i++; @endphp

                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>@if ($employee->image==NULL)
                                         <img src="{{asset('backend/assets/images/employee/default.png')}}" alt="" width="40">
                                    @else
                                         <img src="{{asset('backend/assets/images/employee/'.$employee->image)}}" alt="" width="40">

                                    @endif</td>
                                    <td>{{$employee->fullname}}</td>
                                    <td>{{$employee->company}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>
                                        @if ($employee->group==1)
                                        <span class="badge badge-success">Owner</span>
                                        @elseif ($employee->group==2)
                                        <span class="badge badge-info">Admin</span>
                                        @elseif ($employee->group==3)
                                        <span class="badge badge-warning">Salesman</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($employee->status==1)
                                        <span class="badge badge-success">active</span>
                                        @elseif ($employee->status==2)
                                        <span class="badge badge-danger">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('employee.edit',$employee->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#employee{{$employee->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="employee{{$employee->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delte This employee ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('employee.destroy',$employee->id)}}" method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                                </form>

                                                            </li>
                                                            <li>
                                                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @if ($employees->count()==0)
                            <div class="alert alert-info">
                                No employee added please add a employee first
                            </div>
                        @endif

                    </div>

                    {{-- Table Content end --}}
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
