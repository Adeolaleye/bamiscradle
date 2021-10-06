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
@if( $data['type'] == 'new message')

<p>Hello Bamiscradle,</p>
<p>
    You have a new contact message from <strong>{{ $data['name'] }}</strong><br> 
    <strong>Phone No : </strong>{{ $data['phone'] }}<br>
    <strong>Email : </strong> {{ $data['name'] }}
<p>
    <h4>Body Of Message</h4>
<p>{{ $data['message'] }}</p>
<p>Note that {{ $data['name'] }} awaits your response.</p>
<span>Sent on {{ date('d, M Y @ h:i:s', strtotime($data['date'])) }}.</span>
@endif

@if( $data['type'] == 'message recieved')

<p>Hello {{ $data['name'] }},</p>
<p>
    Your contact message has been recieved, you will hear from us shortly.
<p>
<i class="italic">At Bamiscradle, we foster our students for learning, encourage them to try new and exciting things and give them a solid foundation to build on.</i><br>
<span>Sent on {{ date('d, M Y @ h:i:s', strtotime($data['date'])) }}.</span>
@endif
@endcomponent
