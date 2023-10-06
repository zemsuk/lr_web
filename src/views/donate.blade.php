@extends('lr_web::template')
@section('content')
<!-- home section starts  -->

<div class="home"></div>
<section class="about">
    <h1 class="heading">Financial Plan <span>2019 - 2024</span></h1>
    <div class="row">
        <div class="content">            
            <p>The funding sources of TICC are following; </p>
            <h3>Annual Subscription</h3>
            <p>
             To become member of the TICC, there is annual subscription fee of €25 payable on or before 1st December each year as per Section 13(3) of the Constitution. There are 40 paid members of TICC to date. The forecasted increase in subscription on year on year basis in given in chart 1: 
For detail, refer to appendix 1 - 10</p>
        </div>
        <div class="image">
            <img src="{{asset('images/chart-1.jpg')}}" alt="">    
        </div>
        <div class="content">
            <h3><span>Jumu'ah (Friday)</span> Donations Collection</h3>
            <p>Major source of funding for the TICC is collection of donations before and after Jumu’ah (Friday) prayer from the paid members and general public who come for the Friday prayer. It is a strong tradition amongst the Muslims to donate on this day every week through out the year. In 2019, total collection of donations from this source is €5179, which is forecasted to increase with the increase in Muslim community in the area. 
Below is the Chart showing the trend: 

Friday Collections 2019 - 2024
For detail, refer to appendix 1 - 10</p>
        </div>
        <div class="image">
            <img src="{{asset('images/chart-2.jpg')}}" alt="">    
        </div>
    </div>
</section>
@endsection