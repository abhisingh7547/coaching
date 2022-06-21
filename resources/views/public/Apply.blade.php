@extends('base')

@section('title')
    Apply for admission
@endsection

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">

            </div>
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">Apply admission</div>
                    <div class="card-body">
                        <form action="{{route('student.store')}}" method="post">
                            @csrf
                            <div class="mb-">
                                <label for="">Your Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                @error('name')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-">
                                <label for="">Father's Name</label>
                                <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control">
                                @error('fatherName')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-">
                                <label for="">Mother's Name</label>
                                <input type="text" name="motherName" value="{{old('motherName')}}" class="form-control">
                                @error('motherName')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                                @error('dob')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-">
                                <label for="">Education</label>
                                <input type="text" name="education" value="{{old('education')}}" class="form-control">
                                @error('education')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Gender</label>
                                <select name="gender" id="" class="form-select">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option value="o">Other</option>
                                </select>
                                @error('gender')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection