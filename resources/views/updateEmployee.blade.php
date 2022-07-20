@extends('layouts.frontend')

@section('title')
    Update Employee
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="d-flex justify-content-end mt-5">
            <a href="{{url('employees')}}" class="btn btn-sm btn-danger">Back</a>
        </div>
        <div class="card mt-2">
            <div class="card-header d-flex justify-content-center">
                Update Employee
            </div>
            <div class="card-body">
                <form id="employee_update_form" action="{{url('updateEmployeeSubmit/'.$employee->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-2">
                        <label for="name_input"> Name</label>
                        <input type="text" name="name" id="name_input" class="form-control" value="{{$employee->name}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="name_input"> Email</label>
                        <input type="text" name="email" id="email_input" class="form-control" value="{{$employee->email}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="name_input"> Designation</label>
                        <input type="text" name="designation" id="designation_input" class="form-control" value="{{$employee->designation}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="status_input"> Status</label>
                        <input type="checkbox" name="status" id="status_input" {{$employee->status==1 ? 'checked' : ''}}> Checked-1/Unchecked-0
                    </div>
                    <div class="d-flex justify-content-start mt-4">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="module" src="{{asset('public/js/project/updateEmployee.js')}}"></script>
@endsection
