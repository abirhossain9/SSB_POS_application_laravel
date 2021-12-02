@extends('backend.layout.template')
@section('body')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Update Brand</h4>
        <p class="mg-b-0">Update brand informations from here</p>
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
                        <form action="{{route('brand.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Brand Name</label>
                                        <input type="text" value="{{$brand->name}}" name="name" class="form-control" required="required" autocomplete="off">
                                    </div>
                                   <div class="form-group">
                                      <label>Brand Description</label>
                                      <textarea class="form-control" rows="5" name="desc"> {{$brand->desc}} </textarea>
                                   </div>
                                   <div class="form-group">
                                    <label>Brand Image</label><br>
                                    @if($brand->image == null)
                                    no image uploaded
                                    @else
                                    <img src="{{asset('backend/assets/images/brand/'.$brand->image)}}" alt="" width="40">
                                    @endif
                                    <input class="form-control-file" type="file" name="image">
                                   </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="updateBrand" value="Save Changes" class=" btn btn-success btn-teal mg-b-10">
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
