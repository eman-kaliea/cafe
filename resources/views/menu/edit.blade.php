@extends('master')
@section('content')
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              تعديل تصنيف
                          </header>
                          <div class="panel-body">
                              <form role="form" method="POST" action='{{url("menu-update/{$menu->id}")}}' 
                              enctype="multipart/form-data">
                                @csrf
                                @if(session()->has('success'))
                                <div class="row">
                                    <div class="alert alert-success fade in">
                                            <button data-dismiss="alert" class="close close-sm" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong>{{session()->get('success')}}</strong>
                                    </div>
                                </div>
                                    
                                @endif
                                <div class="row">
                                  <div class="form-group col-md-6">
                                      <label for="exampleInputEmail1">اسم التصنيف</label>
                                      <input type="text" class="form-control" value="{{$menu->name}}" name="name" id="exampleInputEmail1" placeholder="Enter email">
                                  </div>
                                 </div>
                                 <div class="row">
                                  <div class="form-group col-md-6">
                                      <label for="exampleInputFile">صورة التصنيف</label>
                                      <input type="file" name="image" id="exampleInputFile">
                                      <img width="50" src='{{asset("menuImage/{$menu->image}")}}'>

                                  </div>
</div>
                                 
                                  <button type="submit" class="btn btn-info">Submit</button>
                              </form>

                          </div>
                      </section>
                  </div>
              
              </div>
@endsection