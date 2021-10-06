@component('mail::message')
<style>
    p{
        color: #5a5454 !important;
    }
    strong{
        font-weight: 600;
        color: #5a5454 !important;
    }
    h4{
        line-height: 18px;
        font-size: 16px;
        font-weight: 600;
        color: #5a5454 !important;
    }
    span{
        color: #615656 !important;
        font-size: 14px;
    }
    .italic {
        color:#d1343a; 
        font-size:15px;
    }
</style>
@if( $data['type'] == 'new applicant')

<p>Hello Bamiscradle,</p>
<p>
    You have a new new applicant from Bamiscradle enrollment form, below are the details<br> 
    <strong>Child's Name : </strong>{{ $data['name'] }}<br>
    <strong>Child's Age : </strong>{{ $data['age'] }}<br>
    <strong>Child's DOB : </strong>{{ date('d, M Y', strtotime($data['dob'])) }}<br>
    <strong>Child's Gender : </strong>{{ $data['gender'] }}<br>
    <strong>Disability : </strong>{{ $data['specify_dis'] }}<br>
    <strong>Service: </strong>{{ $data['service'] }}
<p>
    <h4>Parent's Details</h4>
<p>
    <strong>Parent Name : </strong> {{ $data['p_name'] }}<br>
    <strong>Parent Phone : </strong>{{ $data['phone'] }}<br>
    <strong>Parent Email : </strong> {{ $data['email'] }}<br>
    <strong>Address : </strong>{{ $data['address'] }}<br>
    <strong>Place Of Work : </strong>{{ $data['place_of_work'] }}<br>
    <strong>Place Of Work Address : </strong> {{ $data['place_of_work_address'] }}<br>
</p>
<h4>Who To Call For Emergency</h4>
<p>
    <strong>Name : </strong> {{ $data['p_name'] }}<br>
    <strong>Phone : </strong>{{ $data['phone'] }}<br>
    <strong>Email : </strong> {{ $data['who_to_call_email'] }}<br>
    <strong>Address : </strong>{{ $data['address'] }}<br>
</p><h4>Pick Up Details 1</h4>
<p>
    <strong>Name : </strong> {{ $data['pickup_name_1'] }}<br>
    <strong>Phone : </strong>{{ $data['pickup_phone_1'] }}<br>
    <strong>Email : </strong> {{ $data['pickup_email_1'] }}<br>
    <strong>Address : </strong>{{ $data['pickup_address_1'] }}<br>
    <strong>Picture: </strong> <img src="{{ $data['pickup_picture_1'] }}">
</p>
</p><h4>Pick Up Details 2</h4>
<p>
    <strong>Name : </strong> {{ $data['pickup_name_2'] }}<br>
    <strong>Phone : </strong>{{ $data['pickup_phone_2'] }}<br>
    <strong>Email : </strong> {{ $data['pickup_email_2'] }}<br>
    <strong>Address : </strong>{{ $data['pickup_address_2'] }}<br>
    <strong>Picture: </strong> <img src="{{ $data['pickup_picture_2'] }}">
</p>
<p>Note that {{ $data['p_name'] }} awaits your feedback.</p>
<span>Enrolled on {{ date('d, M Y @ h:i:s', strtotime($data['date'])) }}.</span>
@endif

@if( $data['type'] == 'application recieved')

<p>Hello {{ $data['p_name'] }},</p>
<p>
    Your child's application has been recieved by bamiscradle, kindly check your details below:<br> 
    <strong>Child's Name : </strong>{{ $data['name'] }}<br>
    <strong>Child's Age : </strong>{{ $data['age'] }}<br>
    <strong>Child's DOB : </strong>{{ date('d, M Y', strtotime($data['dob'])) }}<br>
    <strong>Child's Gender : </strong>{{ $data['gender'] }}<br>
    <strong>Disability : </strong>{{ $data['specify_dis'] }}<br>
    <strong>Service: </strong>{{ $data['service'] }}
<p>
    <h4>Parent's Details</h4>
<p>
    <strong>Parent Name : </strong> {{ $data['p_name'] }}<br>
    <strong>Parent Phone : </strong>{{ $data['phone'] }}<br>
    <strong>Parent Email : </strong> {{ $data['email'] }}<br>
    <strong>Address : </strong>{{ $data['address'] }}<br>
    <strong>Place Of Work : </strong>{{ $data['place_of_work'] }}<br>
    <strong>Place Of Work Address : </strong> {{ $data['place_of_work_address'] }}<br>
</p>
<h4>Who To Call For Emergency</h4>
<p>
    <strong>Name : </strong> {{ $data['p_name'] }}<br>
    <strong>Phone : </strong>{{ $data['phone'] }}<br>
    <strong>Email : </strong> {{ $data['who_to_call_email'] }}<br>
    <strong>Address : </strong>{{ $data['address'] }}<br>
</p><h4>Pick Up Details 1</h4>
<p>
    <strong>Name : </strong> {{ $data['pickup_name_1'] }}<br>
    <strong>Phone : </strong>{{ $data['pickup_phone_1'] }}<br>
    <strong>Email : </strong> {{ $data['pickup_email_1'] }}<br>
    <strong>Address : </strong>{{ $data['pickup_address_1'] }}<br>
    <strong>Picture: </strong> <img src="{{ $data['pickup_picture_1'] }}">
</p>
</p><h4>Pick Up Details 2</h4>
<p>
    <strong>Name : </strong> {{ $data['pickup_name_2'] }}<br>
    <strong>Phone : </strong>{{ $data['pickup_phone_2'] }}<br>
    <strong>Email : </strong> {{ $data['pickup_email_2'] }}<br>
    <strong>Address : </strong>{{ $data['pickup_address_2'] }}<br>
    <strong>Picture: </strong> <img src="{{ $data['pickup_picture_2'] }}">
</p>
<p>Perhaps you made mistake while entering any of this details, or you have further enquires, follow this <a href="">link</a> to contact us</p>
<span>Enrolled on {{ date('d, M Y @ h:i:s', strtotime($data['date'])) }}.</span>
@endif
@endcomponent
