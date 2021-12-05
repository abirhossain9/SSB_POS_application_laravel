@extends('backend.layout.template')
@section('body')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Create New Promotion</h4>
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
                        <form action="{{route('promotion.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>promotion code</label>
                                        <input type="text" name="promotion_code" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>prmotion price</label>
                                        <input type="text" name="prmotion_price" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" name="start_date" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" name="end_date" class="form-control" required="required" autocomplete="off">
                                   </div>
                                   <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Please Select The Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                   </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="addPromotin" value="Add New Promotion" class=" btn btn-success btn-teal mg-b-10">
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
