@extends('layouts.frontend')

@section('title')
    Add Employee
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="d-flex justify-content-end">
            <a href="{{url('employees')}}" class="btn btn-sm btn-danger">Back</a>
        </div>
        <div class="card mt-2">
            <div class="card-header d-flex justify-content-center">
                Employee Form
            </div>
            <div class="card-body">
                <form id="add_employee_form" action="{{url('submitEmployee')}}" method="POST">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="name_input"> Name</label>
                        <input type="text" name="name" id="name_input" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="name_input"> Email</label>
                        <input type="text" name="email" id="email_input" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="name_input"> Designation</label>
                        <input type="text" name="designation" id="designation_input" class="form-control" value="{{old('designation')}}">
                    </div>
                    <div class="d-flex justify-content-start mt-4">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="module" src="{{asset('public/js/project/addEmployee.js')}}"></script>
@endsection
