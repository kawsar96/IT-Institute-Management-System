<!DOCTYPE html>
<html>
<head>
<style>
.back{
				position: absolute;
				top:15px;
				transform: scale(1.14);
			
				opacity: 0.7;
				width: 100%;
				height: 100%;
				z-index: -99;
				
			}
            .image1{
				border: 1px solid blue;
				position: absolute;
				top:20px;
				right: -15px;
				width: 150px;
				height: 150px;
			}
</style>
</head>
<body>


<img class="back" src="{{('images'.'/'. 'eletterhead.jpg')}}" alt="nai">
<!-- <img class="back" src="{{('storage'.'/'.'app'.'/'.'public'.'/'.'letterhead'.'/'. 'eletterhead.jpg')}}" alt="nai"> -->

<div class="col-lg-8 p-b-100 profile-info">


<!-- <img class="image1" src="{{('storage'.'/'.'app'.'/'.'public'.'/'.'employee'.'/'. $employees->name)}}"> -->
<img class="image1" src="{{('storage'.'/'. 'employee'.'/'.$employees->name)}}">

			<!-- <p><span class="txt3" style="font-weight:bold"></span>{{$employees->image}}</p> -->

                <h1 class="m-b-10"><strong>{{$employees->firstname}}</strong> <strong>{{$employees->lastname}}</strong></h1>
                <h4 class="m-b-10">{{$employees->designation}}</h4>
                <p><span class="txt3">National Id :</span> {{$employees->nid}}</p>
				<p><span class="txt3">Mobile :</span> {{$employees->mobile}}</p>
                <p><span class="txt3">Email :</span> {{$employees->email}}</p>
                <p><span class="txt3">Temporary Address :</span> {{$employees->taddress}}</p>
                <p><span class="txt3">Parmanent Address :</span> {{$employees->paddress}}</p>
				<p><span class="txt3">School :</span> {{$employees->school}}</p>
                <!-- <p><span class="txt3">Passing Year :</span>{{$employees->schoolyear}}</p> -->
                <p><span class="txt3">School Result :</span> {{$employees->sgrade}}</p>
				<p><span class="txt3">College :</span>{{$employees->college}}</p>
                <!-- <p><span class="txt3">Passing Year :</span>{{$employees->collegeyear}}</p> -->
                <p><span class="txt3">College Result :</span> {{$employees->cgrade}}</p>
				<p><span class="txt3">University(Bachelor) :</span>{{$employees->university}}</p>
                <!-- <p><span class="txt3">Passing Year(Bachelor) :</span>{{$employees->universityyear}}</p>
                <p><span class="txt3">University Major(Bachelor) :</span> {{$employees->university_major}}</p> -->
                <p><span class="txt3">University Result(Bachelor) :</span> {{$employees->ugrade}}</p>
                <p><span class="txt3">University(Masters) :</span>{{$employees->masters}}</p>
                <!-- <p><span class="txt3">Passing Year(Masters) :</span>{{$employees->mastersyear}}</p>
                <p><span class="txt3">University Major(Masters) :</span> {{$employees->masters_major}}</p> -->
                <p><span class="txt3">University Result(Masters) :</span> {{$employees->mgrade}}</p> 
                <p><span class="txt3">Unique Id :</span> {{$employees->uno}}</p>
                <p><span class="txt3">Date of Birth :</span> {{$employees->dob}}</p>
                <p><span class="txt3">Joining Date :</span> {{$employees->joiningdate}}</p>
             
                <p><span class="txt3">Father Name :</span>{{$employees->father}}</p>
                <p><span class="txt3">Father Mobile No :</span>{{$employees->fno}}</p>
                <p><span class="txt3">Mother Name :</span>{{$employees->mother}}</p>
                <p><span class="txt3">Mother Mobile No :</span>{{$employees->mno}}</p>
                <p><span class="txt3">Guardian NID :</span>{{$employees->gnid}}</p>
                <p><span class="txt3">Guardian Mobile No :</span>{{$employees->gno}}</p>
                
            </div>
            </body>
            </html>



                   
    
    

   