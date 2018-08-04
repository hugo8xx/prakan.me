<div class="card">
  <div class="card-header">
    ผลการค้นหา
  </div>
  <div class="card-body">
    <h5 class="card-title">รายละเอียดความคุ้มครอง</h5>
    <p>เลขทะเบียน :{{ $car->license_no }}</p>
    <p>{{ $car->package }}</p>
    @foreach($car->packages as $package)
    <p>บริษัทผู้รับประกัน : {{ $package->user->name}}</p>
    <p>เลขกรมธรรม์ : {{ $package->policy_no}}</p>
    <p>วันที่คุ้มครอง :{{ $package->date_start->format('d/m/Y') }} - {{ $package->date_stop->format('d/m/Y') }}</p>
    <p>คุ้มครอง : {{ $package->covered }}</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">แจ้งอุบัติเหตุ</a>
    @endforeach
  </div>
</div>

<form method="POST" action="{{ route('car.update', $car->id) }}">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ยืนยัน เบอร์โทรศัพท์</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          <div class="form-group">
              <input type="text" class="form-control" name="phone">
          </div>
        </p>
      </div>
      <div class="modal-footer">
        <input type="" name="lat" id="lat">
        <input type="" name="long" id="long">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<script>
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        $('#lat').val(position.coords.latitude);
        $('#long').val(position.coords.longitude);
    });
  }
</script>