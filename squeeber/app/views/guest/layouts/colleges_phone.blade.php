		
			<div class="collegesphoneh">Please Select Your College</div>
			
			
			<div style="width:100%;-webkit-column-count:2;-moz-column-count:2;column-count:2;">
		
				@foreach($colleges as $college)
				<div style="margin-bottom:20px;margin-bottom:20px;" class="collegestabscreen">
					<div class="mysqueeb">
					<strong><a>{{$college->name}}</a></strong>
					<div class="campusestabscreen">
					<ul>
						@foreach($college->Branch()->orderBy('name','ASC')->get() as $campus)
						<li><a href="{{URL::route('selectcampus',$campus->id)}}">{{$campus->name.' Campus'}}</a></li>
						@endforeach
						
					</ul>
					</div>
					</div>
				</div>
				@endforeach
				
			</div>			