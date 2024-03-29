@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Category

                    <a href="{{url ('admin/category/create')}}"
                        class="btn btn-primary btn-sm text-white float-end">BACK</a>
                </h3>

            </div>
            <div class="card-body">
                <form action="{{ url('admin/category')}" method="POST" enctype="multipart/form-data">
                @csrf    
                <div class="row">
                        <div class="col-md-6 mb-3">
                            <labe>Title</label>
                                <input type="text" name="title" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <labe>Slug</label>
                                <input type="text" name="slug" class="form-control" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <labe>Description</label>
                                <input type="text" name="description" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <labe>Image</label>
                                <input type="file" name="image" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <labe>Status</label></br>
                                <input type="checkbox" name="status" />
                        </div>
                        <div class="col-md-12">
                            <h4>SEO TAGS</h4>

                        </div>
                        <div class="col-md-6 mb-3">
                            <labe>Meta_Title</label>
                                <input type="text" name="meta_title" class="form-control" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <labe>Meta_Keyword</label>
                            <textarea  name="meta_keyword" class="form-control" row="3"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <labe>Meta_Description</label>
                            <textarea name="meta_description" class="form-control" row="3"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end ">Save</button>
                        </div>


                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection