@extends('layouts.app')
@section('title', $title)
@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="/merks/create" class="btn btn-primary mb-3 align-items-start">Create new merks</a>
    <div class="table-responsive">
        <table id="table" class="table table-striped align-middle nowrap table-bordered border-dark" style="width:100%">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody">
                @foreach ($merks as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->name_merk }}</td>
                        <th>
                            <div class="d-flex">
                                <a title="edit" href="/merks/{{ $item->id }}"
                                    class="btn btn-primary text-white align-right"><i class="fa fa-edit"></i></a>
                                &nbsp;
                                <a title="hapus" href=""
                                    class="btn btn-danger text-white show_confirm align-right"><i
                                        class="fa fa-trash"></i></a>
                            </div>
                        </th>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>
@endsection
