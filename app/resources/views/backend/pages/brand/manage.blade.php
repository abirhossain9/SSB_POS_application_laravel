@extends('backend.layout.template')
@section('body')
<div class="br-pagetitle">
        <div>
        <h4>Manage All Brands</h4>
        <p class="mg-b-0">Manage All Brands From Here.</p>
    </div>
</div>
<div class="br-pagebody" style="
box-shadow: 1px 1px 2px 2px #b9b2b2;
padding:1%;">
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
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($brands as $brand)
                                @php $i++; @endphp
                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>{{$brand->name}}</td>
                                    <td>{{$brand->desc}}</td>
                                    <td>
                                       @if ($brand->image==NULL)
                                            <img src="{{asset('backend/assets/images/employee/default.png')}}" alt="" width="40">
                                       @else
                                            <img src="{{asset('backend/assets/images/brand/'.$brand->image)}}" alt="" width="40">

                                       @endif
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('brand.edit',$brand->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#brand{{$brand->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="brand{{$brand->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete This brand ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('brand.destroy',$brand->id)}}" method="POST">
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
                        @if ($brands->count()==0)
                            <div class="alert alert-info">
                                No brand added please add a brand first
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
