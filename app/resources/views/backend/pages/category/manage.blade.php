@extends('backend.layout.template')
@section('body')
<div class="br-pagetitle">
        <div>
        <h4>Manage All suppliers</h4>
        <p class="mg-b-0">Manage All suppliers From Here.</p>
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
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Parent Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($categories as $category)
                                @php $i++; @endphp

                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->desc}}</td>
                                    <td>
                                       @if ($category->image==NULL)
                                            <img src="{{asset('backend/assets/images/employee/default.png')}}" alt="" width="40">
                                       @else
                                            <img src="{{asset('backend/assets/images/category/'.$category->image)}}" alt="" width="40">

                                       @endif
                                    </td>
                                    <td>
                                        @if($category->parent_id==0)
                                        <span class="badge badge-success">Parent Category</span>
                                        @else
                                        <span class="badge badge-success">{{$category->parent->name}}</span>
                                        @endif
                                       </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('category.edit',$category->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#category{{$category->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="category{{$category->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete This category ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('category.destroy',$category->id)}}" method="POST">
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
                        @if ($categories->count()==0)
                            <div class="alert alert-info">
                                No category added please add a category first
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
