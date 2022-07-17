@extends('layouts.app')
@section('title', $title)
@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="/cars/create" class="btn btn-primary mb-3 align-items-start">Create new cars</a>
    <div class="table-responsive">
        <table id="table" class="table table-striped align-middle nowrap table-bordered border-dark" style="width:100%">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Plat</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Year</th>
                    <th scope="col">Color</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody">
                @foreach ($cars as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->plat_no }}</td>
                        <td>{{ $item->merk->name_merk }}</td>
                        <td>{{ $item->production_year }}</td>
                        <td>{{ $item->color }}</td>
                        <th>
                            <div class="d-flex">
                                <a title="edit" href="/cars/{{ $item->id }}/edit"
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
