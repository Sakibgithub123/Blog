@extends('admin.master');

@section('content')

    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Category</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Add Category</h5>
                        </div>
                        <hr/>
                        <form action="{{route('add.category')}} " method="post">
                            @csrf


                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category_name" id="inputEnterYourName" placeholder="Enter Category Name">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="border p-4 rounded">
                <div class="card-title d-flex align-items-center">
                    <h5 class="mb-0"> Categories</h5>
                </div>
                <hr/>
               <table class="table table-striped">
                   <tr>
                       <th>Sl</th>
                       <th>Category Name</th>
                       <th>Status</th>
                       <th>Action</th>
                   </tr>
                   @php
                   $i=1;
                   @endphp
                   @foreach($categories as $category)

                   <tr>
                       <td>{{$i++}}</td>
                       <td>{{$category->category_name}}</td>
                       <td>{{$category->status==1?'Publish':'UnPublish'}}</td>
                       <td>
                           <a href="" class="btn btn-success">Edit</a>
                           <a href="" class="btn btn-danger">Delete</a>
                       </td>
                   </tr>
                   @endforeach
               </table>
            </div>
        </div>
    </div>

@endsection
