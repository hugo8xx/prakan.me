@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('package.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                        ข้อมูลลูกค้า
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="license_no">หมายเลขทะเบียน</label>
                                    <input type="text" class="form-control" name="license_no">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label for="engine_no">เลขตัวถัง</label>
                                <input type="text" class="form-control" name="engine_no">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="year">ปี</label>
                                    <input type="text" class="form-control" name="year">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label for="brand">ยี่ห้อ</label>
                                <input type="text" class="form-control" name="brand">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="model">รุ่น</label>
                                    <input type="text" class="form-control" name="model">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        รายละเอียดการรับประกัน
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="policy_no">เลขกรมธรรม์</label>
                                    <input type="text" class="form-control" name="policy_no">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="covered">covered</label>
                                    <input type="number" class="form-control" name="covered">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col">
                        <div class="form-group">
                        <label for="date_start">วันเริ่มความคุ้มครอง</label>
                        <input type="date" class="form-control" name="date_start">
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                        <label for="date_stop">วันสิ้นสุดความคุ้มครอง</label>
                        <input type="date" class="form-control" name="date_stop">
                        </div>
                        </div>
                        </div>

                        <div class="form-row">
                        <div class="col">
                        <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" class="form-control" name="price">
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                        <label for="deduct">deduct</label>
                        <input type="number" class="form-control" name="deduct">
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">เพิ่ม</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection