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
                                    <th scope="col">Promotion Code</th>
                                    <th scope="col">Promotion Price</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($promotions as $promotion)
                                @php $i++; @endphp

                                <tr>
                                    <th scope="row">{{$i;}}</th>
                                    <td>{{$promotion->promotion_code}}</td>
                                    <td>{{$promotion->prmotion_price}}</td>
                                    <td>{{$promotion->start_date}}</td>
                                    <td>{{$promotion->end_date}}</td>
                                    <td>
                                        @if ($promotion->status==1)
                                        <span class="badge badge-success">active</span>
                                        @elseif ($promotion->status==2)
                                        <span class="badge badge-danger">inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="custom-action">
                                            <li>
                                                <a href="{{route('promotion.edit',$promotion->id)}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="modal" data-target="#promotion{{$promotion->id}}">
                                                    <i class="fa fa-trash "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="promotion{{$promotion->id}}"
                                        tabindex="-1"
                                        role="dialog"
                                        aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete This promotion ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-button text-center">
                                                        <ul>
                                                            <li>
                                                                <form action="{{route('promotion.destroy',$promotion->id)}}" method="POST">
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
                        @if ($promotions->count()==0)
                            <div class="alert alert-info">
                                No promotion added please add a promotion first
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
