<table style="width:100%; color: #000000 !important;">
	<thead>
		<tr>
			<td>

			<!-- <p class="text-right color-555 font-30">
				@lang('lang_v1.packing_slip')
			</p> -->
			<h3 class="text-center">
			Sales Chalan
			</h3>
			</td>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>

<!-- business information here -->
<div class="row invoice-info">

<div class="col-xs-12 text-center">
		
	<p style="width: 100% !important" class="word-wrap">
			<span style="width:50%" class="pull-left text-left word-wrap">
			<?php
			
			?>
				@if(!empty($receipt_details->invoice_no_prefix))
				<b>Chalan No:</b>
				@endif
				{{$receipt_details->invoice_no}}<br>
				<b>{{$receipt_details->date_label}}:</b> {{$receipt_details->invoice_date}}
				@if(!empty($receipt_details->types_of_service))
				<br />
				<span class="pull-left text-left">
					<strong>{!! $receipt_details->types_of_service_label !!}</strong>
					{{$receipt_details->types_of_service}}
					<!-- Waiter info -->
					@if(!empty($receipt_details->types_of_service_custom_fields))
					@foreach($receipt_details->types_of_service_custom_fields as $key => $value)
					<br><strong>{{$key}}: </strong> {{$value}}
					@endforeach
					@endif
				</span>
				@endif

				<!-- Table information-->
				@if(!empty($receipt_details->table_label) || !empty($receipt_details->table))
				<br />
				<span class="pull-left text-left">
					@if(!empty($receipt_details->table_label))
					<b>{!! $receipt_details->table_label !!}</b>
					@endif
					{{$receipt_details->table}}

					<!-- Waiter info -->
				</span>
				@endif

				<!-- customer info -->
				@if(!empty($receipt_details->customer_info))<br>
				<b>{{ $receipt_details->customer_label }}:</b>  {!! $receipt_details->customer_info !!} <br>
				@endif
				@if(!empty($receipt_details->client_id_label))
				<b>{{ $receipt_details->client_id_label }}</b> {{ $receipt_details->client_id }}
				@endif
				@if(!empty($receipt_details->customer_tax_label))
				<br />
				<b>{{ $receipt_details->customer_tax_label }}</b> {{ $receipt_details->customer_tax_number }}
				@endif
				@if(!empty($receipt_details->customer_custom_fields))
				<br />{!! $receipt_details->customer_custom_fields !!}
				@endif
				
				@if(!empty($receipt_details->commission_agent_label))
				<br />
				<strong>{{ $receipt_details->commission_agent_label }}</strong> {{ $receipt_details->commission_agent }}
				@endif
				@if(!empty($receipt_details->customer_rp_label))
				<br />
				<strong>{{ $receipt_details->customer_rp_label }}</strong> {{ $receipt_details->customer_total_rp }}
				@endif
				<strong>Order No:</strong> <?php echo  $receipt_details->sell_custom_field_1_value?>
				<br />
				<strong>Order Date:</strong> <?php echo $receipt_details->sell_custom_field_3_value?>
			</span>

			<span style="width:50%" class="pull-right text-left">

				@if(!empty($receipt_details->header_text))
				<div style="text-align: left!important;padding-left:20px;">
					<p style="font-weight: bold;">Biller: Sarker International Machinery Co. </p>
					{!! $receipt_details->header_text !!}
				</div>


				@endif
				@if(!empty($receipt_details->due_date_label))
				<br><b>{{$receipt_details->due_date_label}}</b> {{$receipt_details->due_date ?? ''}}
				@endif

				@if(!empty($receipt_details->brand_label) || !empty($receipt_details->repair_brand))
				<br>
				@if(!empty($receipt_details->brand_label))
				<b>{!! $receipt_details->brand_label !!}</b>
				@endif
				{{$receipt_details->repair_brand}}
				@endif


				@if(!empty($receipt_details->device_label) || !empty($receipt_details->repair_device))
				<br>
				@if(!empty($receipt_details->device_label))
				<b>{!! $receipt_details->device_label !!}</b>
				@endif
				{{$receipt_details->repair_device}}
				@endif

				@if(!empty($receipt_details->model_no_label) || !empty($receipt_details->repair_model_no))
				<br>
				@if(!empty($receipt_details->model_no_label))
				<b>{!! $receipt_details->model_no_label !!}</b>
				@endif
				{{$receipt_details->repair_model_no}}
				@endif

				@if(!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
				<br>
				@if(!empty($receipt_details->serial_no_label))
				<b>{!! $receipt_details->serial_no_label !!}</b>
				@endif
				{{$receipt_details->repair_serial_no}}<br>
				@endif
				@if(!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
				@if(!empty($receipt_details->repair_status_label))
				<b>{!! $receipt_details->repair_status_label !!}</b>
				@endif
				{{$receipt_details->repair_status}}<br>
				@endif

				@if(!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
				@if(!empty($receipt_details->repair_warranty_label))
				<b>{!! $receipt_details->repair_warranty_label !!}</b>
				@endif
				{{$receipt_details->repair_warranty}}
				<br>
				@endif

				<!-- Waiter info -->
				@if(!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
				<br />
				@if(!empty($receipt_details->service_staff_label))
				<b>{!! $receipt_details->service_staff_label !!}</b>
				@endif
				{{$receipt_details->service_staff}}
				@endif
				@if(!empty($receipt_details->shipping_custom_field_1_label))
				<br><strong>{!!$receipt_details->shipping_custom_field_1_label!!} :</strong> {!!$receipt_details->shipping_custom_field_1_value ?? ''!!}
				@endif

				@if(!empty($receipt_details->shipping_custom_field_2_label))
				<br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}:</strong> {!!$receipt_details->shipping_custom_field_2_value ?? ''!!}
				@endif

				@if(!empty($receipt_details->shipping_custom_field_3_label))
				<br><strong>{!!$receipt_details->shipping_custom_field_3_label!!}:</strong> {!!$receipt_details->shipping_custom_field_3_value ?? ''!!}
				@endif

				@if(!empty($receipt_details->shipping_custom_field_4_label))
				<br><strong>{!!$receipt_details->shipping_custom_field_4_label!!}:</strong> {!!$receipt_details->shipping_custom_field_4_value ?? ''!!}
				@endif

				@if(!empty($receipt_details->shipping_custom_field_5_label))
				<br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}:</strong> {!!$receipt_details->shipping_custom_field_5_value ?? ''!!}
				@endif
				{{-- sale order --}}
				@if(!empty($receipt_details->sale_orders_invoice_no))
				<br>
				<strong>@lang('restaurant.order_no'):</strong> {!!$receipt_details->sale_orders_invoice_no ?? ''!!}
				@endif

				@if(!empty($receipt_details->sale_orders_invoice_date))
				<br>
				<strong>@lang('lang_v1.order_dates'):</strong> {!!$receipt_details->sale_orders_invoice_date ?? ''!!}
				@endif
			</span>
		</p>
	</div>

	<div class="col-md-6 invoice-col width-50">

		
		
	</div>
</div>

{{--<div class="row invoice-info color-555">--}}
{{--	<br/>--}}
{{--	<div class="col-md-6 invoice-col width-50 word-wrap">--}}
{{--		@if(!empty($receipt_details->customer_label))--}}
{{--			<b>{{ $receipt_details->customer_label }}</b><br/>--}}
{{--		@endif--}}
{{--		<!-- customer info -->--}}
{{--		<b>Customer ID:</b>{{ $receipt_details->contact_id }}<br>--}}
{{--		@if(!empty($receipt_details->customer_name))--}}
{{--			<b>Name:</b>{{ $receipt_details->customer_name }}<br>--}}
{{--		@endif--}}
{{--		@if(!empty($receipt_details->customer_info))--}}
{{--			<b>Address:</b>{!! $receipt_details->customer_info !!}--}}
{{--		@endif--}}
{{--		@if(!empty($receipt_details->client_id_label))--}}
{{--			<br/>--}}
{{--			<strong>{{ $receipt_details->client_id_label }}</strong> {{ $receipt_details->client_id }}--}}
{{--		@endif--}}
{{--		@if(!empty($receipt_details->customer_tax_label))--}}
{{--			<br/>--}}
{{--			<strong>{{ $receipt_details->customer_tax_label }}</strong> {{ $receipt_details->customer_tax_number }}--}}
{{--		@endif--}}
{{--		@if(!empty($receipt_details->customer_custom_fields))--}}
{{--			<br/>{!! $receipt_details->customer_custom_fields !!}--}}
{{--		@endif--}}
{{--	--}}
{{--	</div>--}}
{{--	<div class="col-md-6 invoice-col width-50 word-wrap">--}}
{{--		<strong>@lang('lang_v1.shipping_address'):</strong><br>--}}
{{--		{!! $receipt_details->shipping_address !!}--}}
{{--		@if(!empty($receipt_details->shipping_custom_field_1_label))--}}
{{--			<br><strong>{!!$receipt_details->shipping_custom_field_1_label!!} :</strong> {!!$receipt_details->shipping_custom_field_1_value ?? ''!!}--}}
{{--		@endif--}}

{{--		@if(!empty($receipt_details->shipping_custom_field_2_label))--}}
{{--			<br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}:</strong> {!!$receipt_details->shipping_custom_field_2_value ?? ''!!}--}}
{{--		@endif--}}

{{--		@if(!empty($receipt_details->shipping_custom_field_3_label))--}}
{{--			<br><strong>{!!$receipt_details->shipping_custom_field_3_label!!}:</strong> {!!$receipt_details->shipping_custom_field_3_value ?? ''!!}--}}
{{--		@endif--}}

{{--		@if(!empty($receipt_details->shipping_custom_field_4_label))--}}
{{--			<br><strong>{!!$receipt_details->shipping_custom_field_4_label!!}:</strong> {!!$receipt_details->shipping_custom_field_4_value ?? ''!!}--}}
{{--		@endif--}}

{{--		@if(!empty($receipt_details->shipping_custom_field_5_label))--}}
{{--			<br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}:</strong> {!!$receipt_details->shipping_custom_field_5_value ?? ''!!}--}}
{{--		@endif--}}
{{--	</div>--}}
{{--</div>--}}

<div class="row color-555">
	<div class="col-xs-12">
		<br/>
		<table class="table table-bordered">
			<thead>
				<tr style="background-color: #357ca5 !important; color: black !important; font-size: 20px !important" class="text-center">
					<td style="background-color: #357ca5 !important; color: black !important; width: 5% !important">#</td>
					
					<td style="background-color: #357ca5 !important; color: black !important; width: 65% !important">
						{{$receipt_details->table_product_label}}
					</td>
					
					<td style="background-color: #357ca5 !important; color: black !important; width: 15% !important;">
						{{$receipt_details->table_qty_label}}
					</td>
					<td style="background-color: #357ca5 !important; color: black !important; width: 15% !important">
					Unit
					</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$grand_total=0;
				?>
				@foreach($receipt_details->lines as $line)
					<tr>
						<td style="color:black!important;" class="text-center">
							{{$loop->iteration}}
						</td>
						<td style="color:black!important;" style="word-break: break-all;">
                            {{$line['name']}} {{$line['product_variation']}} {{$line['variation']}} 
                            @if(!empty($line['sub_sku'])), {{$line['sub_sku']}} @endif @if(!empty($line['brand'])), {{$line['brand']}} @endif
                            @if(!empty($line['product_custom_fields'])), {{$line['product_custom_fields']}} @endif
                            @if(!empty($line['sell_line_note']))({!!$line['sell_line_note']!!}) @endif
                            @if(!empty($line['lot_number']))<br> {{$line['lot_number_label']}}:  {{$line['lot_number']}} @endif 
                            @if(!empty($line['product_expiry'])), {{$line['product_expiry_label']}}:  {{$line['product_expiry']}} @endif 
                        </td>
						<td style="color:black!important;" class="text-center">
							{{$line['quantity']}}
							<?php
				$grand_total=+$line['quantity'];
				?>
						</td>
						<td style="color:black!important;" class="text-center">
						{{$line['units']}}
					</td>
					</tr>
					@if(!empty($line['modifiers']))
						@foreach($line['modifiers'] as $modifier)
							<tr>
								<td class="text-center">
									&nbsp;
								</td>
								<td>
		                            {{$modifier['name']}} {{$modifier['variation']}} 
		                            @if(!empty($modifier['sub_sku'])), {{$modifier['sub_sku']}} @endif 
		                            @if(!empty($modifier['sell_line_note']))({!!$modifier['sell_line_note']!!}) @endif 
		                        </td>
								<td class="text-right">
									{{$modifier['quantity']}} {{$modifier['units']}}
								</td>
							</tr>
						@endforeach
					@endif
				@endforeach
				<tr>
					<td></td>
					<td style="text-align: right;">Total Quantity</td>
					<td style="text-align: center;">{{$receipt_details->total_quantity}} </td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4" style="font-weight: bold;">
					<?php
					if($receipt_details->total_quantity==1)
					{
						?>
						In Word:{{convertNumberToWord($receipt_details->total_quantity)}} Number(Set) Only</td>
						<?php
					}else
					{
?>
In Word:{{convertNumberToWord($receipt_details->total_quantity)}} Numbers(Sets) Only</td>
<?php
					}
					?>
					
				</tr>

				@php
					$lines = count($receipt_details->lines);
				@endphp


			</tbody>
		</table>
	</div>
</div>
<?php
function convertNumberToWord($num = false)
{
    $num = str_replace(array(',', ' '), '' , trim($num));
    if(! $num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven',
        'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
        } else {
            $tens = (int)($tens / 10);
            $tens = ' ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    return implode(' ', $words);
}
?>
<div style="height:150px;"></div>
<table style="width:100%">
	<tr>
		<td style="width:33%;text-align:center">
			{{ $receipt_details->sales_person }}
			______________________<br>Name of Salesman
		</td>
		<td style="width:33%;text-align:center">
			______________________<br> Customer Signature
		</td>
		<td style="width:34%;text-align:center">
			______________________<br> Authorized Signature
		</td>
	</tr>
</table>

			</td>
		</tr>
	</tbody>
</table>
<div style="height:30px;"></div>
<div class="row" style="color: #000000 !important;position:fixed;bottom:0;width:100%;">
	@if(!empty($receipt_details->footer_text))
	<div style="font-weight:bold;text-align:center" class="@if($receipt_details->show_barcode || $receipt_details->show_qr_code) col-xs-8 @else col-xs-12 @endif">
		{!! $receipt_details->footer_text !!}
	</div>
	@endif
	@if($receipt_details->show_barcode || $receipt_details->show_qr_code)
	<div class="@if(!empty($receipt_details->footer_text)) col-xs-4 @else col-xs-12 @endif text-center">
		@if($receipt_details->show_barcode)
		{{-- Barcode --}}
		<img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
		@endif

		@if($receipt_details->show_qr_code && !empty($receipt_details->qr_code_text))
		<img class="center-block mt-5" src="data:image/png;base64,{{DNS2D::getBarcodePNG($receipt_details->qr_code_text, 'QRCODE', 3, 3, [39, 48, 54])}}">
		@endif
	</div>
	@endif
</div>