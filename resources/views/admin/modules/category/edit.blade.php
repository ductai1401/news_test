@extends('admin/master')

@section('title','Category')

@section('content')
    <div class="card" style="padding: 50px;">
        <div class="card-header">
        <h3 class="card-title">Category-List</h3><br>
        </div>        

        <form action="{{ route('admin.category.update', ['id'=>$category->id]) }}" method="post">
            @csrf
            <div class="form-group">
                <label >Category Parents</label>
                <select name="status" id="" class="form-control">
                    <option value="0">------ Root -----</option>
                </select>
            </div><br>
            <div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" aria-describedby="name" placeholder="Enter name" name="name" value="{{ old('name', $category->name )}}">
                </div><br>
                <div class="form-group">
                    <label >Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" value="{{ old('status', $category->status )}}">Show</option>
                        <option value="2" value="{{ old('status', $category->status )}}">Hide</option>

                    </select>
                </div><br><br>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form> 
    </div>
@endsection