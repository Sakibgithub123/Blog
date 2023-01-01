@extends('admin.master')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>sl</th>
                        <th>Category Name</th>
                        <th>Author Name</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Blog Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$blog->category_name}}</td>
                        <td>{{$blog->author_name}}</td>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->slug}}</td>
                        <td>{{$blog->description}}</td>
                        <td>{{$blog->date}}</td>
                        <td><img src="{{asset($blog->image)}}" class="img-fluid" alt=""></td>
                        <td>{{$blog->blog_type}}</td>
                        <td>{{$blog->status==1?'Publish':'UnPublish'}}</td>
                        <td>
                            @if($blog->status==1)
                            <a class="btn btn-success" href="{{route('status',['id'=>$blog->id])}}">Publish</a>
                            @else
                            <a class="btn btn-warning" href="{{route('status',['id'=>$blog->id])}}">UnPublish</a>
                                @endif


                        </td>

                    </tr>

                    @endforeach




                    </tbody>

                </table>
            </div>
        </div>
    </div>




@endsection




