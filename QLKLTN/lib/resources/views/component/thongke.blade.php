<div class="col-lg-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<canvas id="Chart1"></canvas>

			<script>
				let Chart1 = document.getElementById('Chart1').getContext('2d');

				//Global options
				Chart.defaults.global.defaultFontFamily = 'Arial';
				Chart.defaults.global.defaultFontSize = 14;
				Chart.defaults.global.defaultFontColor = '#777';
				Chart.scaleService.updateScaleDefaults('linear', {
					ticks: {
						min: 0,
					}
				});

				let makeChart1 = new Chart(Chart1, {
					@php $c=0; @endphp
          @php $d=0; @endphp

          @if($row > 0)
          @foreach($tk as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1))
          @foreach($tk1 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row3))
          @foreach($tk3 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row4))
          @foreach($tk4 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row5))
          @foreach($tk5 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row12))
          @foreach($tk12 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row13))
          @foreach($tk13 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row14))
          @foreach($tk14 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row15))
          @foreach($tk15 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row34))
          @foreach($tk34 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row35))
          @foreach($tk35 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row45))
          @foreach($tk45 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row123))
          @foreach($tk123 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row124))
          @foreach($tk124 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row125))
          @foreach($tk125 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row134))
          @foreach($tk134 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row135))
          @foreach($tk135 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row145))
          @foreach($tk145 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row345))
          @foreach($tk345 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1234))
          @foreach($tk1234 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1235))
          @foreach($tk1235 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1245))
          @foreach($tk1245 as $tks)
          @if($tks->bao_cao != null)
          @php $c=$c+1; @endphp
          @else
          @php $d=$d+1; @endphp
          @endif
          @endforeach
          @endif
          type: 'pie',
          data:{
            labels:['Hoàn thành', 'Chưa hoàn thành'],
            datasets:[{
							// label:'Số',
							data:[
							{{$c}},
							{{$d}},
							],
							backgroundColor:[
							'rgba(223, 0, 41, 0.3)',
							'rgba(54, 162, 235, 0.3)',
							'rgba(255, 200, 132, 0.3)',							
							'rgba(153, 102, 255, 0.3)',
							'rgba(255, 260, 86, 0.3)',
							'rgba(75, 192, 192, 0.3)',
							'rgba(255, 159, 64, 0.3)',
							],
							borderWidth:1,
							borderColor:'#777',
							hoverBorderWidth:1,
							hoverBorderColor:'#000'
						}]
					},
					options:{
						title:{
							display:true,
							text:'Hoàn thành báo cáo khóa luận tốt nghiệp',
							fontSize:18
						},
						legend:{
							display:true,
							position:'right',
							labels:{
								fontColor:'#777'
							}
						},
						layout:{
							padding:{
								top:0,
								bottom:0,
								left:0,
								right:0
							}
						},
						tooltips:{
							enabled:true,
						},

					}
				});
			</script>

		</div>
	</div>
</div>

<div class="col-lg-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<canvas id="Chart2"></canvas>

			<script>
				let Chart2 = document.getElementById('Chart2').getContext('2d');

				//Global options
				Chart.defaults.global.defaultFontFamily = 'Arial';
				Chart.defaults.global.defaultFontSize = 14;
				Chart.defaults.global.defaultFontColor = '#777';
				// Chart.scaleService.updateScaleDefaults('linear', {
				// 	ticks: {
				// 		min: 0,
				// 	}
				// });

				let makeChart2 = new Chart(Chart2, {
					@php $a=0; @endphp
					@php $b=0; @endphp
					@php $c=0; @endphp
          @php $d=0; @endphp
          @if($row > 0)
          @foreach($tk as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1))
          @foreach($tk1 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row3))
          @foreach($tk3 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row4))
          @foreach($tk4 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row5))
          @foreach($tk5 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row12))
          @foreach($tk12 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row13))
          @foreach($tk13 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row14))
          @foreach($tk14 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row15))
          @foreach($tk15 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row34))
          @foreach($tk34 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row35))
          @foreach($tk35 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row45))
          @foreach($tk45 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row123))
          @foreach($tk123 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row124))
          @foreach($tk124 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row125))
          @foreach($tk125 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row134))
          @foreach($tk134 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row135))
          @foreach($tk135 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row145))
          @foreach($tk145 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row345))
          @foreach($tk345 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1234))
          @foreach($tk1234 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1235))
          @foreach($tk1235 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1245))
          @foreach($tk1245 as $tks)
          @if($tks->diem1 != null && $tks->diem2 != null && $tks->diem3 != null && $tks->diem4 != null)
          @if( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) < 8)
          @php $a+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) >= 8 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 9)
          @php $b+=1; @endphp
          @elseif( ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) > 9 && ($tks->diem1*($tks->ts1/100)+$tks->diem2*($tks->ts2/100)+$tks->diem3*($tks->ts3/100)+$tks->diem4*($tks->ts4/100)) <= 10)
          @php $c+=1; @endphp
          @else
          @php $d=0; @endphp
          @endif
          @else
          @php $d+=1; @endphp
          @endif
          @endforeach

          @endif
          type: 'horizontalBar',
          data:{
            labels:['Dưới 8', 'Từ 8 đến 9', 'Từ 9 đến 10', 'Chưa có điểm'],
            datasets:[{
							// label:'Số',
							data:[
							{{$a}},
							{{$b}},
							{{$c}},
							{{$d}},
							],
							backgroundColor:[
							'rgba(255, 99, 132, 0.3)',
							'rgba(54, 162, 235, 0.3)',
							'rgba(255, 200, 132, 0.3)',							
							'rgba(153, 102, 255, 0.3)',
							'rgba(255, 260, 86, 0.3)',
							'rgba(75, 192, 192, 0.3)',
							'rgba(255, 159, 64, 0.3)',
							],
							borderWidth:1,
							borderColor:'#777',
							hoverBorderWidth:1,
							hoverBorderColor:'#000'
						}]
					},
					options:{
						title:{
							display:true,
							text:'Thống kê điểm khóa luận tốt nghiệp',
							fontSize:18
						},
						legend:{
							display:false,
							position:'right',
							labels:{
								fontColor:'#777'
							}
						},
						scales:{
							xAxes:[{
								ticks:{
									beginAtZero:true,
									stepSize: 1
								}
							}],
							yAxes:[{
								ticks:{
									beginAtZero:true,
									stepSize: 1
								}
							}]
						},
						layout:{
							padding:{
								top:0,
								bottom:0,
								left:0,
								right:0
							}
						},
						tooltips:{
							enabled:false,
						},

					}
				});
			</script>

		</div>
	</div>
</div>

<div class="col-lg-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<canvas id="Chart3"></canvas>

			<script>
				let Chart3 = document.getElementById('Chart3').getContext('2d');

				//Global options
				Chart.defaults.global.defaultFontFamily = 'Arial';
				Chart.defaults.global.defaultFontSize = 14;
				Chart.defaults.global.defaultFontColor = '#777';
				Chart.scaleService.updateScaleDefaults('linear', {
					ticks: {
						min: 0,
					}
				});

				let makeChart3 = new Chart(Chart3, {
					@php $a=0; @endphp	//đã đkí
					@php $b=0; @endphp	//chưa đkí
          @if($row > 0)
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row3))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row4))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row5))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row12))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row13))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row14))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row15))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row34))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row35))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row45))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row123))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row124))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row125))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row134))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row135))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row145))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row345))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1234))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1235))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @elseif(isset($row1245))
          @foreach($tvlist as $tv)
          @if($tv->trang_thai == 1)
          @php $a+=1; @endphp
          @else
          @php $b+=1; @endphp
          @endif
          @endforeach
          @endif
          type: 'doughnut',
          data:{
            labels:['Đã đăng ký khóa luận tốt nghiệp', 'Chưa đăng ký khóa luận tốt nghiệp'],
            datasets:[{
							// label:'Số',
							data:[
							{{$a}},
							{{$b}}
							],
							backgroundColor:[
							'rgba(223, 0, 41, 0.3)',
							'rgba(54, 162, 235, 0.3)',
							'rgba(255, 200, 132, 0.3)',							
							'rgba(153, 102, 255, 0.3)',
							'rgba(255, 260, 86, 0.3)',
							'rgba(75, 192, 192, 0.3)',
							'rgba(255, 159, 64, 0.3)',
							],
							borderWidth:1,
							borderColor:'#777',
							hoverBorderWidth:1,
							hoverBorderColor:'#000'
						}]
					},
					options:{
						title:{
							display:true,
							text:'Số lượng sinh viên đã đăng ký hoặc chưa đăng ký khóa luận tốt nghiệp',
							fontSize:18
						},
						legend:{
							display:true,
							position:'right',
							labels:{
								fontColor:'#777'
							}
						},
						layout:{
							padding:{
								top:0,
								bottom:0,
								left:0,
								right:0
							}
						},
						tooltips:{
							enabled:true,
						},

					}
				});
			</script>
		</div>
	</div>
</div>

<div class="col-lg-6 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<canvas id="Chart4"></canvas>

			<script>
				let Chart4 = document.getElementById('Chart4').getContext('2d');

				//Global options
				Chart.defaults.global.defaultFontFamily = 'Arial';
				Chart.defaults.global.defaultFontSize = 14;
				Chart.defaults.global.defaultFontColor = '#777';
				Chart.scaleService.updateScaleDefaults('linear', {
					ticks: {
						min: 0,
					}
				});

				let makeChart4 = new Chart(Chart4, {
					@php $a=0; @endphp	//Toán - tin                   1
					@php $b=0; @endphp	//Kinh tế                      2
                   	     @php $c=0; @endphp	//Ngoại ngữ                    3
                         @php $d=0; @endphp  //Khoa học sức khỏe            4
                         @php $e=0; @endphp  //Khoa học xã hội và nhân văn  5
                         @php $f=0; @endphp  //Âm nhạc ứng dụng             6
                   	@if($row > 0)
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row1))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row3))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row4))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row5))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row12))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row13))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row14))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row15))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row34))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row35))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row45))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row123))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row124))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row125))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row134))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row135))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row145))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row345))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row1234))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row1235))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @elseif(isset($row1245))
                         @foreach($tvlist as $tv)
                         @if($tv->khoa_thanhvien == 1)
                         @php $a++; @endphp
                         @elseif($tv->khoa_thanhvien == 2)
                         @php $b++; @endphp
                         @elseif($tv->khoa_thanhvien == 3)
                         @php $c++; @endphp
                         @elseif($tv->khoa_thanhvien == 4)
                         @php $d++; @endphp
                         @elseif($tv->khoa_thanhvien == 5)
                         @php $e++; @endphp
                         @elseif($tv->khoa_thanhvien == 6)
                         @php $f++; @endphp
                         @endif
                         @endforeach
                    @endif
                    type: 'doughnut',
                    data:{
                      labels:['Toán - Tin', 'Kinh tế - Quản lý', 'Ngoại ngữ', 'Khoa học sức khỏe', 'Khoa học xã hội và nhân văn', 'Âm nhạc ứng dụng'],
                      datasets:[{
							// label:'Số',
							data:[
							{{$a}},
							{{$b}},
							{{$c}},
                                   {{$d}},
                                   {{$e}},
                                   {{$f}}
							],
							backgroundColor:[
							'rgba(223, 0, 41, 0.3)',
							'rgba(54, 162, 235, 0.3)',
							'rgba(255, 200, 132, 0.7)',							
							'rgba(153, 102, 255, 0.3)',
							'rgba(255, 260, 86, 0.3)',
							'rgba(75, 192, 192, 0.3)',
							'rgba(255, 159, 64, 0.3)',
							],
							borderWidth:1,
							borderColor:'#777',
							hoverBorderWidth:1,
							hoverBorderColor:'#000'
						}]
					},
					options:{
						title:{
							display:true,
							text:'Số lượng sinh viên trong các khoa',
							fontSize:18
						},
						legend:{
							display:true,
							position:'right',
							labels:{
								fontColor:'#777'
							}
						},
						layout:{
							padding:{
								top:0,
								bottom:0,
								left:0,
								right:0
							}
						},
						tooltips:{
							enabled:true,
						},

					}
				});
			</script>
		</div>
	</div>
</div>



