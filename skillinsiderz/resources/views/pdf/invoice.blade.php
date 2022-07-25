<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Skillinsiderz - Professional Skills Hub In Pakistan</title>
	<link href="./HTML to API - Invoice_files/css" rel="stylesheet" type="text/css">
	<!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<style type="text/css">
		html, body, div, span, applet, object, iframe,
		h1, h2, h3, h4, h5, h6, p, blockquote, pre,
		a, abbr, acronym, address, big, cite, code,
		del, dfn, em, img, ins, kbd, q, s, samp,
		small, strike, strong, sub, sup, tt, var,
		b, u, i, center,
		dl, dt, dd, ol, ul, li,
		fieldset, form, label, legend,
		table, caption, tbody, tfoot, thead, tr, th, td,
		article, aside, canvas, details, embed,
		figure, figcaption, footer, header, hgroup,
		menu, nav, output, ruby, section, summary,
		time, mark, audio, video {
			margin: 0;
			padding: 0;
			border: 0;
			font: inherit;
			font-size: 100%;
			vertical-align: baseline;
		}

		html {
			line-height: 1;
		}

		
		body {
			font-family: 'Source Sans Pro', sans-serif;
			font-weight: 300;
			font-size: 12px;
			margin: 0;
			padding: 0;
		}
		body a {
			text-decoration: none;
			color: inherit;
		}
		body a:hover {
			color: inherit;
			opacity: 0.7;
		}
		body .container {
			min-width: 500px;
			margin: 0 auto;
			padding: 0 20px;
		}
		body .clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
		body .left {
			float: left;
		}
		body .right {
			float: right;
		}
		body .helper {
			display: inline-block;
			height: 100%;
			vertical-align: middle;
		}
		body .no-break {
			page-break-inside: avoid;
		}

		

		

		footer {
			margin-bottom: 20px;
		}
		footer .thanks {
			margin-bottom: 40px;
			color: #026BB0;
			font-size: 1.16666666666667em;
			font-weight: 600;
		}
		footer .notice {
			margin-bottom: 25px;
		}
		footer .end {
			padding-top: 5px;
			border-top: 2px solid #026BB0;
			text-align: center;
		}
		#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0171B9;
  color: white;
}

	</style>
</head>

<body style="padding:1%;">
	<div style="min-width: 500px;
			margin: 0 auto;
			">
		<img  src="{{public_path('logo/logo.png') }}" style="max-width:250px;"> 
	</div>
	<br /> <br /> 
	<div style="width:80%;">
		<div style=" width: 70%;
			float: left;
			padding-top:20px;">
			<table  id="customers">
				<tr>
					<th>Course Name</th>
					<th>Invoice Date</th>
					<th>Invoice</th>
				</tr>
				<tr>
					<td>{{ $data->course->title }}</td>
					<td> {{ date("d-m-y") }}</td>
					<td>Invoice # SI{{ $data->id }}</td>
				</tr>
			</table>
		</div>
	</div>
	<br /> <br /> <br /> <br />  <br />  <br />  <br />  <br />  
	<table id="customers">
			<tr>
				<th>Student Information</th>
				<th>Email</th>
				<td>{{ $data->student->email }}</td>
			</tr>
			<tr>
				<td>{{ $data->student->name }}</td>
				<th>whats App</th>
				<td>{{ $data->student->phone }}</td>
			</tr>
			<tr>
				<td>{{ $data->student->address }}</td>
				<th>Phone</th>
				<td>{{ $data->student->phone }}</td>
			</tr>
			<tr>
				<td>{{ $data->student->city }} , {{ $data->student->state }} , {{ $data->student->country }}</td>
				<th>CNIC</th>
				<td>{{ $data->student->cnic }}</td>
			</tr>
	</table>
	<br />
	<div style="height:490px; border:1px solid #ddd;">
		<table id="customers">
				<tr>
					<th>Description</th>
					<th>Duration</th>
					<th>Batch No</th>
					<th>Amount (PKR)</th>
				</tr>
				<tr>
					<td>
						Registration Fee of {{ $data->course->duration }} Course
					</td>
					<td>
						{{ $data->course->duration }}
					</td>
					<td>
						{{ $data->badge->code }}
					</td>
					<td>
						{{ $data->admission_fee }}
					</td>
				</tr>
				<tr>
					<td>
						Tution Fee of {{ $data->course->title }}
					</td>
					<td>
						{{ $data->course->duration }}
					</td>
					<td>
					</td>
					<td>
						{{ $data->course->regular_fee }}
					</td>
				</tr>
				<tr>
					<td colspan="4">
						Remaining Accounts Installments Plan
					</td>
				</tr>
				@foreach($data->instalments as $instalment)
					@if($instalment->status != "paid")
						<tr>
							<td colspan="4">
								{{ substr($instalment->last_day, strrpos($instalment->last_day, '-') + 1) }} {{ date('F Y',strtotime($instalment->last_day)) }}  Rs. {{ $instalment->amount }}
							</td>
						</tr>
					@endif
				@endforeach
		</table>
	</div>
	<div style="width:100%;">
		<div style="
			padding-top:20px;">
			<table  id="customers">
				<tr>
					<th colspan="6">Bank & Jazzcash Payment Details</th>
					<th>Grand Total</th>
					<td style="background-color:#ddd;">PKR {{ $data->total_amount }}</td>
				</tr>
				<tr>
					<td colspan="6">Jazzcash & Easypaisa : 03184544494</td>
					<th>Paid Amount</th>
					<td style="background-color:#ddd;">PKR {{ $data->paid }}</td>
				</tr>
				<tr>
					<td colspan="6">Meezan Bank : 02880103165685</td>
					<th>Balance Due</th>
					<td style="background-color:#ddd;">PKR {{ $data->pending }}</td>
				</tr>
				
			</table>
		</div>
	</div>
	<table  id="customers" >
		<tr>
			<th colspan="6">Terms & Conditions Apply</th>
		</tr>
		<tr>
			<td colspan="6">
				Fee is non-refundable but the option to freeze or transfer in any course as per policy
			</td>
		</tr>
		<tr>
			<td colspan="6">
				Head Office: Opposite to zainabia Hospital, Main Multan Road Lahore
			</td>
		</tr>
		<tr>
			<td colspan="6">
				UAN: 04235434011 | Whats App: +92318-4544494 | info@skillinsiderz.com
			</td>
		</tr>
		<tr style="text-align: center;">
			<td  colspan="6">
				This System generated document and does requrie any signature
			</td>
		</tr>
	</table>
</body>
	
</html>