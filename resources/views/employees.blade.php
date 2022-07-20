@extends('layouts.frontend')

@section('title')
    Employees
@endsection

@section('content')
    <div class="d-flex justify-content-end mt-5">
        <a href="{{url('addEmployee')}}" class="btn btn-sm btn-primary">Add Employee</a>
    </div>
    <div class="card mt-2">
        <div class="card-header d-flex justify-content-between">
            <h2>Employee Table</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Phones</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="employeesTableBody"></tbody>
              </table>
              <pre></pre>
        </div>
    </div>
@endsection

@section('js')
<script>
    getEmployees = '{{url('getEmployees')}}';
</script>
<script type="module" src="{{asset('public/js/project/employees.js')}}"></script>
@endsection
