@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('package.create') }}" class="btn btn-primary btn-sm">create</a>
            <table class="table mt-3">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Policy No</th>
                        <th scope="col">ทะเบียนรถยนต์</th>
                        <th scope="col">ระยะเวลาความคุ้มครอง</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packages as $package)
                    <tr>
                        <td>{{ $package->id }}</td>
                        <td>{{ $package->policy_no }}</td>
                        <td>{{ $package->car->license_no }}</td>
                        <td>
                            {{ ($package->date_start) ? $package->date_start->format('d/m/Y') : '' }} -
                            {{ ($package->date_stop) ? $package->date_stop->format('d/m/Y') : '' }}
                        </td>
                        <td>
                            <span class="badge badge-danger">{{ $package->histories()->count() }}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $packages->links() }}
        </div>
    </div>
</div>
@endsection
