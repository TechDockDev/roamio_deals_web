@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb20">
            <h1 class="title-bar">{{__("Activity package Management")}}</h1>
            <div class="title-actions">
               <a href="{{ url('/admin/module/event/availability/' . request()->route('activity_id') . '/pricePackage') }}" class="btn btn-warning btn-xs">
  <i class="fa fa-calendar"></i> {{ __("Price Availability") }}
</a>
               <a href="{{ url('/admin/module/event/edit/' .request()->route('activity_id')) }}" class="btn btn-info btn-xs">
  <i class="fa fa-hand-o-right"></i> {{ __("Back to Activity") }}
</a>
            </div>
        </div>
        @include('admin.message')
          
          @if(Session::get('pacakagestoreadded'))
         
           <div style="background:green">Package added successfully</div>


          @endif
      
        <div class="row">
            <div class="col-md-4">


                <form novalidate="" class="needs-validation" action="{{url('/admin/module/event/availability/storePackage')}}" method="post" enctype="mutipart/form-data">
                    <div class="panel">
                        <div class="panel-title"><strong>Add Package</strong></div>
                        <div class="panel-body">
                            <input type="hidden" name="_token" value="2jMN4Ka9nXl6mZzbZlR4vkDtmkxvas4y4R9TbpER">                            <div class="form-group">

   <input type="hidden" name="parent_id" value="{{request()->route('activity_id')}}">
    <label>Package Name <span class="text-danger">*</span></label>
    <input type="text" required="" value="" placeholder="Package Name" name="title" class="form-control" required>
</div>
<div class="form-group d-none">
    <label>Package Description</label>
    <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
</div>
    <div class="form-group">
        <label>Feature Image </label>
                <div class="dungdt-upload-box dungdt-upload-box-normal " data-val="">
            <div class="upload-box" v-show="!value">
                <input type="hidden" name="image_id" v-model="value" value="">
                <div class="text-center">
                </div>
                <div class="text-center">
                    <span class="btn btn-primary btn-field-upload" @click="openUploader">Upload image</span>
                </div>
            </div>
            <div class="attach-demo" title="Change file">
                            </div>
            <div class="upload-actions justify-content-between" v-show="value">
                                <a class="edit-img btn btn-sm btn-primary edit-single" data-file=""><i class="fa fa-edit"></i></a>
                <a class="delete btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </div>
        </div>
        
    </div>

    <div class="form-group">
        <label>Gallery</label>
                <div class="dungdt-upload-multiple " data-val="">
            <div class="attach-demo d-flex">
                            </div>
            <div class="upload-box" v-show="!value">
                <input type="hidden" name="gallery" v-model="value" value="">
                <div class="text-left">
                    <span class="btn btn-info btn-sm btn-field-upload" @click="openUploader"><i class="fa fa-plus-circle"></i> Select images</span>
                </div>
            </div>
        </div>
        
    </div>
    <hr>
<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Price <span class="text-danger">*</span></label>
                <input type="number" required="" value="" min="1" placeholder="Price" name="price" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Number of Person<span class="text-danger">*</span></label>
                <input type="number" required="" value="1" min="1" max="100" placeholder="Number" name="number" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Discount Price<span class="text-danger">*</span></label>
                <input type="number" required="" value="" min="1" placeholder="Price" name="discount_price" class="form-control">
            </div>
        </div>
    </div>
    <hr>
          
        <hr>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Max Adults </label>
                <input type="number" min="1" value="1" name="adults" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Max Children </label>
                <input type="number" min="0" value="0" name="children" class="form-control">
            </div>
        </div>
    </div>
    
    <hr>
<div class="form-group">
	<label>Import url</label>
	<input type="text" value="" name="ical_import_url" class="form-control">
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label><strong>Status</strong> </label>
                <select name="status" class="custom-select">
                    <option value="publish">Publish</option>
                    <option value="pending">Pending</option>
                    <option value="draft">Draft</option>
                </select>
            </div>
        </div>
    </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Add Package</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">

               <!--  <div class="filter-div d-flex justify-content-between ">
                    <div class="col-left">
                        @if(!empty($rows))
                            <form method="post" action="{{route('hotel.admin.room.bulkEdit')}}" class="filter-form filter-form-left d-flex justify-content-start">
                                {{csrf_field()}}
                                <select name="action" class="form-control">
                                    <option value="">{{__(" Bulk Actions ")}}</option>
                                    <option value="publish">{{__(" Publish ")}}</option>
                                    <option value="draft">{{__(" Move to Draft ")}}</option>
                                    <option value="pending">{{__("Move to Pending")}}</option>
                                    {{--<option value="clone">{{__("Clone")}}</option>--}}
                                    <option value="delete">{{__("Delete")}}</option>
                                </select>
                                <button data-confirm="{{__('Do you want to delete?')}}" class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">{{__('Apply')}}</button>
                            </form>
                        @endif
                    </div>
                    <div class="col-right">
                        <p><i></i></p>
                    </div>
                </div> -->
               
                <div class="panel">
                    <div class="panel-body">
                        <form action="" class="bravo-form-item">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th width="45px"><input type="checkbox" class="check-all"></th>
                                        <th> {{ __('Package name')}}</th>
                                        <th width="100px"> {{ __('Person')}}</th>
                                        <th width="100px"> {{ __('Price')}}</th>
                                        <th width="100px"> {{ __('Status')}}</th>
                                        <th width="100px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($get as $gg)
                                            <tr class="active">
                                                <td><input type="checkbox" name="ids[]" class="check-item" value="{{$gg->id}}">
                                                </td>
                                                <td class="title">
                                                  {{$gg->title}}
                                                </td>
                                                <td>{{$gg->number}}</td>
                                                <td>{{$gg->price}}</td>
                                                <td><span class="badge ">{{$gg->status}}</span></td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> {{__('Edit')}}
                                                    </a>
                                                </td>
                                            </tr>
                                             @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                     {{--{{$rows->appends(request()->query())->links()}}--}}   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
