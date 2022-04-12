@extends('layouts.app')
@section('title', 'Booking Page')
@section('content')
    <!-- sec-2 start -->
<div class="sec-2">
   <marquee behavior="" direction=""  Scrollamount=10>
      <h1>WELCOME TO SAAD RENT A CAR</h1>
   </marquee>
</div>
<!-- sec-2 end -->
<!-- booking start -->
<div class="booking">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="booking-box">
              <form method="POST" action="{{ route('contact.message') }}">
                @csrf
                <label for="">Your Name</label>
                <input type="text" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label for="">Your Phone Number</label>
                <input type="text" placeholder="Enter Your Phone Number" name="phone" value="{{ old('phone') }}">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label for="">Enter The Car Name You Need</label>
                <input type="text" placeholder="Car Name" name="car_name" value="{{ old('car_name') }}">
                @error('car_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label for="">Date When You Need The Car</label>
                <input type="date" name="date">
                <label for="">Pick-Up Time</label>
                <input type="time" placeholder="Pick-Up Time" name="pick_time" value="{{ old('pick_time') }}">
                @error('pick_time')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <label for="">Drop Off</label>
                <input type="time" placeholder="Drop-Off-Time" name="drop_time" value="{{ old('drop_time') }}">
                @error('drop_time')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <textarea name="description" id="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                <Button type="submit">Send</Button>
              </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- booking end -->
@endsection











