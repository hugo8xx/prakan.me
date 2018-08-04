<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">ลำดับ</th>
			<th scope="col">ละติจูด</th>
			<th scope="col">ลองติจูด</th>
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
				{{ $history->lat }}
			</td>
			<td>
				{{ $history->long }}
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