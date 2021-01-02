@extends('frontend.layout.master')
@section('title','Contact Us')

@section('content')


    <div class="container contact-form">
        <div class="contact-image">
            <img src="frontend/images/rocket_contact.png" alt="rocket_contact"/>
        </div>
        <form action="{{ route('submit.message') }}" method="post">
            @csrf
            <h3>Drop Us a Message</h3>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="contact_name" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact_phone" class="form-control" placeholder="Your Phone Number *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact_country" class="form-control" placeholder="Your Country *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact_passport" class="form-control" placeholder="Your Passport ID *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="contact_message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection