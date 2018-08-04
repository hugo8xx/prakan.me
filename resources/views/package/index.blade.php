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
                            <a href="{{ route('package.show', $package->id) }}" class="show"> แจ้งอุบัติเหตุ <span class="badge badge-danger"> {{ $package->histories()->count() }}</span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $packages->links() }}
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="showModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">รายละเอียด</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Loding ...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('.show').click(function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        $('#showModal .modal-body').load(url, function() {
            $('#showModal').modal('show');
        });
    });
</script>
@endsection
