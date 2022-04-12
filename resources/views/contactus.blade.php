@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('contact.message') }}">
                        @csrf
                        <label for="">Your Name</label>
                        <input type="text" placeholder="Enter Your Full Name" name="name">
                        @error('name')
                            <span class="text-danger fw-bolder">{{ $message }}</span>
                        @enderror
                        <br>
                        <label for="">Email Address</label>
                        <input type="email" placeholder="Enter Your Email Address" name="email">
                        @error('email')
                            <span class="text-danger fw-bolder">{{ $message }}</span>
                        @enderror
                        <br>
                        <label for="">Phone Number</label>
                        <input type="text" placeholder="Enter Your Phone Number" name="phone">
                        @error('phone')
                            <span class="text-danger fw-bolder">{{ $message }}</span>
                        @enderror
                        <br>
                        <label for="">Message</label>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                        @error('message')
                            <span class="text-danger fw-bolder">{{ $message }}</span>
                        @enderror
                        <br>
                        <Button type="submit">SEND</Button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection