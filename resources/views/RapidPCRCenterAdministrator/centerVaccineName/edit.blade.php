@extends('RapidPCRCenterAdministrator.layouts.master')

@push('title')
    Vaccine Name create
@endpush

@push('css')

@endpush

@section('content')
    <div class="trusted_medical_assistants mb-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="card page-wrapper w-100" style="margin-bottom: 100px" >
                    <form action="{{route('rapidPcrCenterAdministrator.centerVaccine.update', $centerVaccineName->id)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Vaccine Name</label>
                            <select class="form-select" name="vaccineName" aria-label="Default select example">
                                <option selected>Select One</option>
                                @foreach($vaccineNames as $vaccineName)
                                    <option value="{{$vaccineName->name}}" {{$centerVaccineName->vaccineName == $vaccineName->name? 'selected': ''}} class="text-capitalize">{{$vaccineName->name}}</option>
                                @endforeach
                            </select>
                       </div>
                        @error('vaccineName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="status">Vaccine Name Status</label>
                            <br>
                            @php
                                if ($centerVaccineName->status){
                                    $status = $centerVaccineName->status;
                                }else if (old('status')){
                                    $status = old('status');
                                }else{
                                    $status = 0;
                                }
                            @endphp

                            <div class="form-check form-check-inline">
                                <input class="form-check-input for" value="1" name="status" type="radio" @if($status==1) {{'checked'}}@endif>
                                <label class="form-check-label" for="inlineRadio1">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="0" name="status"@if($status==0) {{'checked'}}@endif>
                                <label class="form-check-label" for="inlineRadio2">InActive</label>
                            </div>
                        </div>
                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="mt-4">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            <a href="{{route('rapidPcrCenterAdministrator.centerVaccine.index')}}" class="btn btn-info waves-effect waves-light">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
