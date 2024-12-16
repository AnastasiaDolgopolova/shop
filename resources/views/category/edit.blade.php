@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Main</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Category Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('categories.update', $category->id) }}"
                        method="POST">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="{{ $category->title }}" class="form-control"
                                        id="inputTitle" placeholder="Title">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection