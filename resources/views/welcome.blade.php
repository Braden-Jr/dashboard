@extends('form')

@section('contents')

<div class="main-content">
        

    <main>
   
        <h2 class="dash-title DATA">Dashboard</h2>

        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <span class="ti-briefcase"></span>
                    <div>
                        <h5>Total Number of Campaigns</h5>
                        <h4 style=color:black>  32 </h4>
                    </div>
                </div>
              
            </div>
            
            <div class="card-single">
                <div class="card-body">
                    {{-- <i  class="fa-solid " style="font-size: 25px;margin-right:20px;"></i> --}}
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>Total Number of Employees</h5>
                        <h4 style=color:black> </h4>
                    </div>
                </div>
              
            </div>
            
            <div class="card-single">
                <div class="card-body">
                    <span class="fa-solid fa-cake-candles"></span>
                    <div>
                        <h5>Birthday</h5>
                        <h4> </h4>
                        <button type="button" style="width: 100%;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            View more
                          </button>
                    </div>
                </div>
              
            </div>
        </div>

        <div class="card-single">
          {{-- <h5><i class="fa-solid fa-bell"></i>Announcements</h5> --}}
          <div class="card-body">
            {{-- <span class="fa-solid fa-bell"></span>   --}}
            <div>
            <h5><span class="fa-solid fa-bell"></span>Announcements</h5>
            </div>

          </div>
          <div style="overflow-x: auto; display:flex;">
            {{-- <h5 style="overflow-y: auto; display:flex;"><span class="fa-solid fa-bell"></span>Announcements</h5> --}}
            <img style="size: 50px; width:20%; border-radius:10px; margin:10px 10px 20px 20px;" src="{{URL::asset('/img/newyear-absi.png')}}" />
            <img style="size: 50px; width:20%; border-radius:10px; margin:10px 10px 20px 10px;" src="{{URL::asset('/img/reso.png')}}" />
            <img style="size: 50px; width:20%; border-radius:10px; margin:10px 10px 20px 10px;" src="{{URL::asset('/img/growth.png')}}" />
            <img style="size: 50px; width:20%; border-radius:10px; margin:10px 10px 20px 10px;" src="{{URL::asset('/img/wins.png')}}" />
            {{-- <img style="size: 50px; width:20%; border-radius:10px; margin:10px 20px 20px 10px;" src="{{URL::asset('/img/success.png')}}" /> --}}
            {{-- <h4> items</h4> --}}
        </div>

        <div class="card-single">
          <div class="card-body">
            {{-- <h5><span class="fa-solid fa-bell"></span>Holidays</h5> --}}
            {{-- <i class="fa-solid fa-paperclip"></i> --}}
              <div>
                  {{-- <h5>Holidays</h5> --}}
                  <h5><i class="fa-sharp fa-solid fa-paperclip"></i>Holidays</h5>
                  <h4>This is the Upcoming Holidays</h4>
                  <img style="size: 50px; width:20%; border-radius:10px; margin:10px 10px 20px 20px;" src="{{URL::asset('/img/rizal-day.png')}}" />
                  <img style="size: 50px; width:20%; border-radius:10px; margin:10px 10px 20px 20px;" src="{{URL::asset('/img/dec-25.png')}}" />
              </div>
          </div>
        
      </div>
        
      </div>

        {{-- start --}}
        {{-- <div class="container text-center">
            <div class="row dash-cards">
                <div class="col-6 card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Total Number of Campaigns</h5>
                            <h4> </h4>
                        </div>
                    </div>
                  
                </div>

              <div class="col-6 card-single">
                <div class="card-body">
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>Total Number of Employees</h5>
                        <h4> </h4>
                        <i  class="fa-solid " style="font-size: 25px;margin-right:20px;"></i>
                    </div>
                </div>
              
            </div>

              <div class="col-6 card-single">
                <div class="card-body">
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>Birthday</h5>
                        <h4> </h4>
                    </div>
                </div>
              
            </div>

            <div class="col-6 card-single">
                <div class="card-body">
                    <span class="ti-check-box"></span>
                    <div>
                        <h5>Announcements</h5>
                        <h4> </h4>
                    </div>
                </div>
              
            </div>


            </div>
          </div> --}}

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        {{-- <i class="fa-solid fa-cake-candles"></i> --}}
          <h1 class="modal-title fs-5" id="exampleModalLabel">Birthday Celebrants</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Employee Number</th>
                <th scope="col">Name</th>
                <th scope="col">Project Name</th>
                <th scope="col">Contact Number</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"  name='employee_number'style="color: black;"></th>
                <td scope="column"  name='name'style="color: black;"></td>
                <td scope="column"  name='project_name'style="color: black;"></td>
                <td scope="column"  name='contact_number'style="color: black;"></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         
        </div>
      </div>
    </div>
  </div>

  {{-- START GRAPH --}}
{{-- <link
	rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	type="text/css"
/>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script
	src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
	type="text/javascript"
></script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<style>
	.container {
	width: 70%;
	margin: 15px auto;
	}
	body {
	text-align: center;
	color: green;
	}
	h2 {
	text-align: center;
	font-family: "Verdana", sans-serif;
	font-size: 30px;
	}
</style>
<body>
	<div class="container">
	<h2>Line Chart</h2>
	<div>
		<canvas id="myChart"></canvas>
	</div>
	</div>
</body>

<script>
	var ctx = document.getElementById("myChart").getContext("2d");
	var myChart = new Chart(ctx, {
	type: "line",
	data: {
		labels: [
		"Monday",
		"Tuesday",
		"Wednesday",
		"Thursday",
		"Friday",
		"Saturday",
		"Sunday",
		],
		datasets: [
		{
			label: "work load",
			data: [2, 9, 3, 17, 6, 3, 7],
			backgroundColor: "rgba(153,205,1,0.6)",
		},
		{
			label: "free hours",
			data: [2, 2, 5, 5, 2, 1, 10],
			backgroundColor: "rgba(155,153,10,0.6)",
		},
		],
	},
	});
</script> --}}


</main>