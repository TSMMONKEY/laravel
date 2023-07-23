@extends('layouts.dashboard')

@section('title', 'Add New Client')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h4 class="card-title">Create New Task</h4>
            </div>
            <div class="card-body">
                <form class="forms-sample" action="" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">Task Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                            name="task_name" value="{{ old('task_name') }}">
                        @error('task_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Task</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="task" value="{{ old('task') }}">
                        @error('task')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group m-b-20">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="task_description" value="{{ old('task_description') }}"></textarea>
                        @error('task_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="d-flex" style="align-content:center; align-items:center; margin: 36px -1px;">
                        <div class="form-group col-6" style="padding-left: 0;">
                            <label class="">Attachments</label>
                            <div class="custom-file">
                                <label class="form-control col-12" for="inputGroupFile02"
                                    style="width: max-content;
                                border: 2px dotted gray;
                                padding: 8% 12% 13% 14%;"><i
                                        class="lni-move"></i>
                                    <input type="file" class="custom-file-input" id="inputGroupFile02" style="width: 0">
                                </label>
                            </div>
                        </div>
                        <!-- Date Picker -->
                        <div class="form-group row col-6">
                            <label class="col-12 col-form-label">Due Date</label>
                            <div class="col-12">
                                <input class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <!-- // Date Picker -->
                    </div> --}}
                    <button type="submit" class="btn btn-common mr-3">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
