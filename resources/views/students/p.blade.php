<!DOCTYPE html>
<html>
	<head>
		<style>
			body{
				position: relative;
				font-family: sans-serif;
			}
			.main-body{
				margin-top: 50px;
				}
			.image{
				border: 1px solid blue;
				position: absolute;
				top:0px;
				right: 0px;
				width: 150px;
				height: 200px;
			}

			.image1{
				border: 1px solid blue;
				position: absolute;
				top:815px;
				right: -15px;
				width: 100px;
				height: 100px;
			}
			.back{
				position: absolute;
				top:15px;
				transform: scale(1.14);
			
				opacity: 0.7;
				width: 100%;
				height: 100%;
				z-index: -99;
				
			}
			.arrange{
				margin-top: 0px;
			}
			.arran{
				height: 50px;
				border: 1px solid #000080;
				width: 450px;
				padding-left: 10px;
				font-weight:bold;
			}
			.arran2{
				height: 50px;
				border: 1px solid #000080;
				width:222px;
				padding-left: 10px;
				font-weight:bold;
			}
			.arran3{
				width:250px;
				padding-left: 10px;
				font-weight:bold;
			}
			.arran4{
				width: 250px;
				font-weight:bold;
				padding-left:10px;
			}
			.arran5{
				width: 250px;
				font-weight:bold;
				padding-left:275px;
				
				
			}
			.daag{
				margin-top: 0px;
				border-top: 4px solid black;
			}
			.daag2{
				border-top: 4px solid #000080;
				margin-bottom: 60px;
			}
			.daag3{
				padding-top: 30px;
				/* height: 60px; */
				height: 77px;
			}
			.my-header h2 { 
			display: inline;
			}
			.my-header span { 
			display: inline;
			float: right;
			}
			.txt4{
				margin-left: 20px;
			}
		</style>
	</head>
	<body>
		<img class="back" src="{{('images'.'/'. 'letterhead.jpg')}}" alt="nai">
		<!-- <img class="back" src="{{('storage'.'/'.'app'.'/'.'public'.'/'.'letterhead'.'/'. 'letterhead.jpg')}}" alt="nai"> -->
		<p style="text-align:right ; opacity:0.5 "> {{$students->transactionId}} </p>

		<div class="main-body">
			

			<table class="">
			<tr>
					<td class="txt3 arran2"><span>Roll:</span></td>
					<td class="arran"><p> {{$students->roll}} </p></td>
				</tr>
				<tr>
					<td class="txt3 arran2"><span>Name:</span></td>
					<td class="arran"><p> {{$students->firstname}} {{$students->lastname}}</p></td>
				</tr>
				<tr>
					<td class="txt3 arran2"><span>Mobile:</span></td>
					<td class="arran"><p> {{$students->mobile}}</p></td>
				</tr>
				<tr>
					<td class="txt3 arran2"><span>Address:</span></td>
					<td class="arran"><p> {{$students->address}}</p></td>
				</tr>
				<tr>
					<td class="txt3 arran2"><span>Course:</span></td>
					<td class="arran"><p> {{$students->course}}</p></td>
				</tr>
				<tr>
					<td class="txt3 arran2"><span>Batch:</span></td>
					<td class="arran"><p> {{$students->batch}}</p></td>
				</tr>
				<tr>
					<td class="txt3 arran2"><span>Referance:</span></td>
					<td class="arran"><p> {{$students->referance}}</p></td>
				</tr>
			</table>
			<div class="daag2">
				<h2 style="text-align:center">Payment</h2>
			</div>
			
			<p><span class="txt3" style="font-weight:bold">Admission Total : </span>{{$students->admission}} bdt</p>
			<p><span class="txt3" style="font-weight:bold">1st Installment : </span>{{$students->paid}} bdt</p>
			<p><span class="txt3" style="font-weight:bold">2nd Installment : </span>{{$students->paid2}} bdt</p>
			<p><span class="txt3" style="font-weight:bold">Due Amount : </span>{{$students->due}} bdt</p>
			
			<div class="my-header" style="text-align:right ; margin-right:0px">
				<span style="border-top: 2px solid black"></span>
			</div>
			


			<div class="daag3">
			<p style="text-align:right ; opacity:0.5 "> {{$students->transactionId}} </p>
			<p class="arran5" >Roll : {{$students->roll}} </p>
			</div>
			
			<table class="arrange">
				<tr>
					<td class="arran3"><span> Name: {{$students->firstname}} {{$students->lastname}} </span></td>
					<td class="arran4"><p> Admission Total: {{$students->admission}} bdt</p></td>
				</tr>
				<tr>
					<td class="arran3"><span> 1st Installment: {{$students->paid}} bdt</span></td>
					<td class="arran3"><span> 2nd Installment: {{$students->paid2}} bdt</span></td>
					<td class="arran4"><p> Due Amount: {{$students->due}} bdt</p></td>
				</tr>
				
			</table>
			
			
			<!-- <img class="image1" src="{{('storage'.'/'.'app'.'/'.'public'.'/'.'student'.'/'. $students->name)}}"> -->
			<img class="image1" src="{{('storage'.'/'. 'student'.'/'.$students->name)}}">
			

			<p><span class="txt3" style="font-weight:bold"></span>{{$students->image}}</p>
		</div>
	</body>
</html>