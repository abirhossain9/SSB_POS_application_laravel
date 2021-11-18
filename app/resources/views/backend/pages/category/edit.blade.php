@extends('backend.layout.template')
@section('body')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update Supplier</h4>
        <p class="mg-b-0">Update This Supplier</p>
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
                        <form action="{{route('supplier.update',$supplier->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" name="company_name"  value="{{$supplier->company_name}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Supplier Name</label>
                                        <input type="text" name="supplier_name" value="{{$supplier->supplier_name}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" value="{{$supplier->email}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{$supplier->phone}}" class="form-control" required="required" autocomplete="off">
                                   </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{$supplier->address}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Vat Number</label>
                                        <input type="text" name="vat_number" value="{{$supplier->vat_number}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>GST Number</label>
                                        <input type="text" name="gst_number" value="{{$supplier->gst_number}}" class="form-control" required="required" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Please Select The Status</option>
                                            <option value="1" @if($supplier->status == 1) selected @endif >Active</option>
                                            <option value="2" @if($supplier->status == 2) selected @endif >Inactive</option>
                                        </select>
                                   </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="updateSupplier" value="Save Changes" class=" btn btn-success btn-teal mg-b-10">
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
