@extends('layouts.app')
@section('title', $title)
@section('container')
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-7 col-lg-6 col-xl-6">
            <h3 class="badge fs-5 text-wrap text-dark p-2 border-bottom border-4 border-primary">Update Merk :
                {{ $merk->name_merk }}</h3>
            <form action="">
                <label for="kode_merk" class="col-form-label text-dark">Kode</label>
                <div class="col">
                    <input type="text" maxlength="3" class="form-control" id="kode_merk" value="{{ $merk->kode }}">
                </div>

                <label for="name_merk" class="col-form-label pt-7 text-dark">Name Merk</label>
                <div class="col">
                    <input type="text" class="form-control" id="name_merk" value="{{ $merk->name_merk }}">
                </div>
                <button class="col-4 btn btn-primary btn-sm float-right mt-4 p-2">Update</button>
            </form>
        </div>
    </div>
@endsection
