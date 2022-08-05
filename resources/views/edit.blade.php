
@extends('layouts.app')

@if (Session::get('locale')== "ar")
        <style>
          .container_2{
            direction:rtl;
          }
		  .box .sq:nth-child(5){
			margin-left: -1280px;
		  }
        
		  .box .sq:nth-child(1){
			margin-right: 1318px;
		  }
		  .box .sq:nth-child(2){
			display: none;
			
		  }

		
        </style>  
    @else
        <style>
             .container_2{
            direction:ltr;
            text-align:left;
          }
		  .box .sq:nth-child(2){
			display: none;
			
		  }

        </style>
    @endif


@section('content')
<div class="container">


    <div class="section_1">
	<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
		<div class="box">
			<div class="square sq" style="--i: 0;"></div>
			<div class="square sq" style="--i: 1;"></div>
			<div class="square sq" style="--i: 2;"></div>
			<div class="square sq" style="--i: 3;"></div>
			<div class="square sq" style="--i: 4;"></div>

			<div class="container_2">
				<div class="form">
					<h2>@lang('lang.Edit Realestate')</h2>
					@foreach ($realestate as $real )
					<form  action="{{route('update-realestate',$real->id)}}" method="POST" enctype="multipart/form-data">
					    @csrf
                        @method('PUT')
						<div class="inputBox">
							<select  name="country">
						    	<option value="">@lang('lang.Select city')</option>

								<option value="{{$real->cities_id}}" {{$real->cities_id =="1" ? 'selected' : ''}}>@lang('lang.Dummar')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="2" ? 'selected' : ''}}>@lang('lang.Paramkeh')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="3" ? 'selected' : ''}}>@lang('lang.Abo Romaneh')</option>

								<option value="{{$real->cities_id}}" {{$real->cities_id =="4" ? 'selected' : ''}}>@lang('lang.Hamrah')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="5" ? 'selected' : ''}}>@lang('lang.Barzeh')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="6" ? 'selected' : ''}}>@lang('lang.Mazeh')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="7" ? 'selected' : ''}}>@lang('lang.Muhajereen')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="8" ? 'selected' : ''}}>@lang('lang.Al-salheya')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="9" ? 'selected' : ''}}>@lang('lang.Rukun Eldin')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="10" ? 'selected' : ''}}>@lang('lang.Kafersouseh')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="11" ? 'selected' : ''}}>@lang('lang.Al-Kanawat')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="12" ? 'selected' : ''}}>@lang('lang.Al-shaghour')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="13" ? 'selected' : ''}}>@lang('lang.Saroujah')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="14" ? 'selected' : ''}}>@lang('lang.Joubar')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="15" ? 'selected' : ''}}>@lang('lang.Al-kaboun')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="16" ? 'selected' : ''}}>@lang('lang.Al-kadam')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="17" ? 'selected' : ''}}>@lang('lang.Al-maydan')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="18" ? 'selected' : ''}}>@lang('lang.Al-yarmouk')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="19" ? 'selected' : ''}}>@lang('lang.Harasta')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="20" ? 'selected' : ''}}>@lang('lang.Doma')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="21" ? 'selected' : ''}}>@lang('lang.zamalka')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="22" ? 'selected' : ''}}>@lang('lang.rankous')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="23" ? 'selected' : ''}}>@lang('lang.yabrod')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="24" ? 'selected' : ''}}>@lang('lang.jaramana')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="25" ? 'selected' : ''}}>@lang('lang.daraya')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="26" ? 'selected' : ''}}>@lang('lang.moadamyeh')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="27" ? 'selected' : ''}}>@lang('lang.Ain Mnin')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="28" ? 'selected' : ''}}>@lang('lang.alhajar alaswad')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="29" ? 'selected' : ''}}>@lang('lang.arabine')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="30" ? 'selected' : ''}}>@lang('lang.ain terma')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="31" ? 'selected' : ''}}>@lang('lang.al-tall')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="32" ? 'selected' : ''}}>@lang('lang.zabadani')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="33" ? 'selected' : ''}}>@lang('lang.mueariban')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="34" ? 'selected' : ''}}>@lang('lang.hush arab')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="35" ? 'selected' : ''}}>@lang('lang.saqba')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="36" ? 'selected' : ''}}>@lang('lang.ain al-fijeh')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="37" ? 'selected' : ''}}>@lang('lang.jadidat ertuz')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="38" ? 'selected' : ''}}>@lang('lang.alsabura')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="39" ? 'selected' : ''}}>@lang('lang.al-qutaifa')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="40" ? 'selected' : ''}}>@lang('lang.jeroud')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="41" ? 'selected' : ''}}>@lang('lang.nabek')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="42" ? 'selected' : ''}}>@lang('lang.qara')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="43" ? 'selected' : ''}}>@lang('lang.babila')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="44" ? 'selected' : ''}}>@lang('lang.kafer batna')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="45" ? 'selected' : ''}}>@lang('lang.hiza')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="46" ? 'selected' : ''}}>@lang('lang.maliha')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="47" ? 'selected' : ''}}>@lang('lang.televita')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="48" ? 'selected' : ''}}>@lang('lang.qatna')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="49" ? 'selected' : ''}}>@lang('lang.saydnaya')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="50" ? 'selected' : ''}}>@lang('lang.hamouria')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="51" ? 'selected' : ''}}>@lang('lang.halboun')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="52" ? 'selected' : ''}}>@lang('lang.eisal alward')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="53" ? 'selected' : ''}}>@lang('lang.yafur')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="54" ? 'selected' : ''}}>@lang('lang.qudsia')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="55" ? 'selected' : ''}}>@lang('lang.alnashabia')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="56" ? 'selected' : ''}}>@lang('lang.jabaden')</option>
								<option value="{{$real->cities_id}}" {{$real->cities_id =="57" ? 'selected' : ''}}>@lang('lang.alghuzlania')</option>






								<!-- @foreach ($cities as $city)
									<option value="{{ $city->id }}">{{ __('lang.' .  $city->country) }}</option>
								@endforeach
		 -->
							</select>
                        </div>
						<div class="inputBox">
							<input type="text" placeholder="@lang('lang.address')"  name="address" value="{{$real->address}}">
						</div>
						<div class="inputBox">
							<input type="Number" placeholder="@lang('lang.floor')"  name="floor"  value ="{{$real->floor}}">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="@lang('lang.Area')" name="area"  value ="{{$real->area}}">
						</div>
						<div class="inputBox">
							<input type="number" step=0.01  placeholder="@lang('lang.price')" name="price"  value ="{{$real->price}}">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="@lang('lang.number_of_rooms')" name="number_of_rooms"  value ="{{$real->number_of_rooms}}">
						</div>
						<div class="inputBox">
							<input type="number" placeholder="@lang('lang.number_of_path_rooms')" name="number_of_path_rooms"  value ="{{$real->number_of_path_rooms}}">
						</div>

						<div class="inputBox">
                            <select  name="state">
							<option value="{{$real->state}}" {{$real->state=="Sale" ? 'selected' : ''}}>@lang('lang.sale')</option>
							<option value="{{$real->state}}" {{$real->state=="Rent" ? 'selected' : ''}}>@lang('lang.rent')</option>

                            </select>
                        </div>
                        <div class="inputBox">
                            <select name="type">
							<option value="{{$real->type}}" {{$real->type=="court" ? 'selected' : ''}}>@lang('lang.court')</option>
							<option value="{{$real->type}}" {{$real->type=="tabo" ? 'selected' : ''}}>@lang('lang.tabo')</option>

                   
                            </select>
                        </div>
                        <div class="inputBox">
                            <select name="property_type">
							<option value="{{$real->property_type}}" {{$real->property_type=="Villa" ? 'selected' : ''}}>@lang('lang.villa')</option>
							<option value="{{$real->property_type}}" {{$real->property_type=="Flat" ? 'selected' : ''}}>@lang('lang.flat')</option>
							<option value="{{$real->property_type}}" {{$real->property_type=="Shop" ? 'selected' : ''}}>@lang('lang.shop')</option>
							<option value="{{$real->property_type}}" {{$real->property_type=="Land" ? 'selected' : ''}}>@lang('lang.land')</option>

                            </select>
                        </div>

						<div class="inputBox">
                            <select name="furnished">
							<option value="{{$real->furnished}}" {{$real->furnished=="furnished" ? 'selected' : ''}}>@lang('lang.furnished')</option>
							<option value="{{$real->furnished}}" {{$real->furnished=="not_furnished" ? 'selected' : ''}}>@lang('lang.not_furnished')</option>

                            </select>
                        </div>

						<div class="inputBox multiselect">
						<select data-placeholder="@lang('lang.select services')" multiple class="chosen-select" name="services[]">
							<option value=""></option>
							<option value="security">@lang('lang.security')</option>
							<option value="internet">@lang('lang.internet')</option>
							<option value="car_Parking">@lang('lang.car_Parking')</option> 
							<option value="supermarket">@lang('lang.supermarket')</option>
							<option value="mosque">@lang('lang.mosque')</option>
							<option value="green park">@lang('lang.green park')</option>
							<option value="restaurant">@lang('lang.restaurant')</option>
							<option value="gym">@lang('lang.gym')</option>
							<option value="school">@lang('lang.school')</option>
						</select>
						</div>
                       
                       
						<div class="inputBox">
							<label for="">Cover</label>
                            <input type="file" id="image" name="cover"  >  
                        </div>
                        <div class="inputBox">
							<label for="">Images</label>
                            <input type="file" id="image" name="image[]" multiple >  
                        </div>

						<div class="inputBox">
							<label for="description">@lang('lang.Description')</label>
							<textarea type="text" class="form-control" name="description" value="">{{$real->description}}</textarea>
						</div>

						<div class="save save_1">
                            <button type="submit">@lang('lang.update')</button>
                        </div>
						
					</form>
					@endforeach
				</div>
			</div>
		</div>
	</div>

	<script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });

		$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
    </script>
@endsection
