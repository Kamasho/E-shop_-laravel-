@extends('layouts.Admin.admin')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-2">
                    <div class="card-body">
                        <form action="{{ url('/store_categories') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Add Category</h5>

                        <div class="col-6 mb-3">
                            <label for="product-name" class="form-label">Category Name <span class="text-danger">*</span></label>
                            <input type="text" id="product-name" class="form-control" placeholder="Enter Category Name" name="name">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="product-reference" class="form-label">Slug<span class="text-danger">*</span></label>
                            <input type="text" id="product-reference" class="form-control" placeholder="Enter Slug" name="slug">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="product-description" class="form-label">Category Description <span class="text-danger">*</span></label>
                            <div id="snow-editor2" style="height: 100px;"><input type="text" name="description"></div> <!-- end Snow-editor-->
                        </div>
                        
                        <div class="col-4 mb-2">
                            <label class="mb-2">Status <span class="text-danger">* <input type="checkbox" class="form-check-input" name="status" id="customCheck1"></span></label>
                        </div>
                        <div class="col-4 mb-2">
                            <label class="mb-2">Popular <span class="text-danger">* <input type="checkbox" class="form-check-input" name="popular" id="customCheck1"></span></label>
                        </div>
                        <div class="col-4 mb-3">
                            <label class="mb-2">Image <span class="text-danger">* <input type="file" name="image" class="form-control"></span></label>
                        </div>
                        <div class="col-4 mb-1">
                            <label for="product-summary" class="form-label">Meta Title</label>
                            <textarea class="form-control" id="product-summary" rows="3" name="meta_title" placeholder="Enter Meta Title"></textarea>
                        </div>
                        <div class="col-4 mb-1">
                            <label for="product-summary" class="form-label">Meta Descriptions</label>
                            <textarea class="form-control" name="meta_description" id="product-summary" rows="3" placeholder="Enter Meta Descriptions"></textarea>
                        </div>
                        <div class="col-4 mb-1">
                            <label for="product-summary" class="form-label">Meta keywords</label>
                            <textarea class="form-control" name="meta_keyword" id="product-summary" rows="3" placeholder="Enter Meta Keywords"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-end mt-1">
                                    <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                </div>
                            </div> <!-- end col -->
                        </div>
                            </div>
                        <!-- end row -->
                        </form>
                        
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->

        </div>
        <!-- end row -->

        <!-- file preview template -->
        <div class="d-none" id="uploadPreviewTemplate">
            <div class="card mt-1 mb-0 shadow-none border">
                <div class="p-2">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                        </div>
                        <div class="col ps-0">
                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                            <p class="mb-0" data-dz-size></p>
                        </div>
                        <div class="col-auto">
                            <!-- Button -->
                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                <i class="dripicons-cross"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div> <!-- container -->
@endsection