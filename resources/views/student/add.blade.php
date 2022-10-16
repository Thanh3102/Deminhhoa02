@extends('layouts.app')
@section('title',"Add new student")
@section('content')
<div style="display: flex;justify-content: center">
    <div>
        <h1>Add Student</h1>
        <a href="/students" class="btn btn-outline-info">Manage Student</a>
        <form method="post" action="" style="min-width: 500px">
            <div class="mb-3">
                <label for="txtFullName" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="txtFullName" name="txtFullName">
            </div>
            <div class="mb-3">
                <label for="txtBirthday" class="form-label">Birthday</label>
                <input type="text" class="form-control" id="txtBirthday" name="txtBirthday">
            </div>
            <div class="mb-3">
                <label for="txtAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="txtAddress" name=txtAddress>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div> 
</div>

@endsection