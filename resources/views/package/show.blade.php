<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">ลำดับ</th>
			<th scope="col">แผนที่</th>
			<th scope="col">ค่าใช้จ่าย</th>
			<th scope="col">หมายเหตุ</th>
			<th scope="col">วันที่</th>
		</tr>
	</thead>
	<tbody>
		@foreach($package->histories()->get() as $i => $history)
		<tr>
			<td>
				{{ ($i+1) }}
			</td>
			<td>
				<a href="https://www.google.com/maps/search/?api=1&query={{ $history->lat }},{{ $history->long }}" class="map-btn" target="_blank">
					<img src="{{ asset('33622.svg') }}" width="32px" height="32px" title="lat:{{ $history->lat }}, long:{{ $history->long }}">
				</a>
			</td>
			<td>
				{{ $history->expenses }}
			</td>
			<td>
				{{ $history->remark }}
			</td>
			<td>
				{{ $history->created_at->format('d/m/Y') }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>