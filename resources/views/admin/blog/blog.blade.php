@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Blog</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Add Blog</h5>
                        </div>
                        <hr/>
                        <form action="{{route('add.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Category Name</label>
                                <div class="col-sm-9">

                                    <select name="category_id" class="form-control" id="category_name">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Author Name</label>
                                <div class="col-sm-9">

                                    <select name="author_id" class="form-control" id="author_name">
                                        @foreach($authors as $author)
                                        <option value="{{$author->id}}">{{$author->author_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" id="inputEnterYourName" placeholder="Enter Title ">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="slug" id="inputEnterYourName" placeholder="Enter Slug">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date" id="inputEnterYourName" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" id="inputEnterYourName" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Blog Type</label>
                                <div class="col-sm-9">
                                    <select name="blog_type" class="form-control" id="">
                                        <option value="popular">Popular</option>
                                        <option value="trending">Trending</option>
                                        <option value="latest">Latest</option>
                                    </select>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label"> Status</label>
                                <div class="col-sm-9">
                                    <input type="radio"  value="1" name="status" id="inputEnterYourName">Publish &nbsp
                                    <input type="radio"  value="2" name="status" id="inputEnterYourName">UnPublish
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


@endsection
