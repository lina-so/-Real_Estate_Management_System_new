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
			margin-left: -495px;
		  }

		
        </style>  
    @else
        <style>
             .container_2{
            direction:ltr;
            text-align:left;
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
					<h2 class="h2">@lang('lang.add realestate')</h2>
					<form  action="{{ route('store-realestate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
				    	<div class="inputBox">
							<select  name="country">
								<option value="">@lang('lang.Select city')</option>
								
								@foreach ($cities as $city)
									<option value="{{ $city->id }}">{{ __('lang.' .  $city->country) }}</option>
								@endforeach
		
							</select>
                        </div>
						<div class="inputBox">
							<input type="text" placeholder=@lang('lang.address') name="address">
						</div>
						<div class="inputBox">
							<input type="Number"placeholder=@lang('lang.floor') name="floor">
						</div>
						<div class="inputBox">
							<input type="number" placeholder=@lang('lang.Area') name="area">
						</div>
						<div class="inputBox">
							<input type="number" step=0.01  placeholder=@lang('lang.price') name="price">
						</div>
						<div class="inputBox">
							<input type="number" placeholder=@lang('lang.number_of_rooms') name="number_of_rooms">
						</div>
						<div class="inputBox">
							<input type="number"  placeholder=@lang('lang.number_of_path_rooms') name="number_of_path_rooms">
						</div>

						<div class="inputBox">
                            <select  name="state">
                                <option value="Sale">@lang('lang.sale')</option>
                                <option value="Rent">@lang('lang.rent')</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <select name="type">
                                <option value="court">@lang('lang.court')</option>
                                <option value="tabo">@lang('lang.tabo')</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <select name="property_type">
                                <option value="Villa">@lang('lang.villa')</option>
                                <option value="Flat">@lang('lang.flat')</option>
                                <option value="Shop">@lang('lang.shop')</option>
                                <option value="Land">@lang('lang.land')</option>
                            </select>
                        </div>
						<div class="inputBox">
                            <select name="furnished">
						     	<!-- <option value="" selected disabled>@lang('lang.furnished')</option> -->
                                <option value="furnished">@lang('lang.furnished')</option>
                                <option value="not_furnished">@lang('lang.not_furnished')</option>
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
                       
						<div class="inputBox img">
							<label for="">Cover</label>
                            <input type="file" id="image" name="cover"  >  
                        </div>
                        <div class="inputBox img">
							<label for="">Images</label>
                            <input type="file" id="image" name="image[]" multiple >  
                        </div>

						<div class="inputBox">
							<label for="description">@lang('lang.Description')</label>
							<textarea type="text" class="form-control" name="description" value=""></textarea>
						</div>

						<div class="save save_1">
                            <button type="submit">@lang('lang.save')</button>
                        </div>
						
					</form>
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


