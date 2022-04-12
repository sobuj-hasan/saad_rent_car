@extends('layouts.app')
@section('title', 'Booking Page')
@section('content')
    <!-- sec-2 start -->
  
  <div class="sec-2">
  
    <marquee behavior="" direction=""  Scrollamount=10><h1>WELCOME TO SAAD RENT A CAR</h1></marquee>
    
    </div>
    
  
  <!-- sec-2 end -->
  
  
  

    <!-- booking start -->

    <div class="booking">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

    <div class="booking-box">

    <label for="">Your Name</label>
    <input type="text" placeholder="Enter Your Name">
    
    <label for="">Your Phone Number</label>
    <input type="text" placeholder="Enter Your Phone Number">

    <label for="">Enter The Car Name You Need</label>
    <input type="text" placeholder="Car Name">

    <label for="">Date When You Need The Car</label>
    <input type="date">

    <label for="">Pick-Up Time</label>

    <input type="time" placeholder="Pick-Up Time">

    <label for="">Drop Off</label>

    <input type="time" placeholder="Drop-Off-Time">

    <textarea name="" id="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>

    <Button>Send</Button>


    </div>

                </div>
            </div>
        </div>
    </div>




    <!-- booking end -->
@endsection











