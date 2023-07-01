@extends('admin.layouts.main')
@section('admincontent')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Contacts</h1>
    </div>
    <div class="table-responsive col-lg-8 mb-5">
        <table class="table table-striped table-sm col-lg-8 col-md-6 col-sm-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th class="w-25">Contact</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->kontak }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
