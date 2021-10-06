@extends('layouts.main')
@section('title','Bamiscradles Creche in Abuja')
@section('content')
<div class="main">
    <section class="bg-fdf6ed pb-70">
        <div class="image-container set-full-height">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wizard-container">      
                            <div class="card wizard-card apply-form" data-color="orange" id="wizardProfile">
                                <form action="{{ route('enroll') }}" method="post" enctype="multipart/form-data"> 
                                @csrf
                                    <div class="wizard-header">
                                        <div class="section-title pb-3" data-aos="fade-up">
                                            <h2>Enroll Here</h2>
                                            <p>Fill all details appropiately</p>
                                           <div style="padding: 10px 60px">@include('includes.alerts')</div> 
                                        </div>
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul class="">
                                            <li><a href="#about" data-toggle="tab">Step 1</a></li>
                                            <li><a href="#account" data-toggle="tab">Step 2</a></li>
                                            <li><a href="#address" data-toggle="tab">Step 3</a></li>
                                        </ul>
            
                                    </div>
            
                                    <div class="tab-content">
                                        <div class="tab-pane" id="about">
                                            <div class="row plr-40">
                                                <h4 class="info-text"> Let's start with the Child's Details</h4>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Child's Fullname</label>
                                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Child's Name" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <label>Parent's Name*</label>
                                                        <input type="text" name="p_name" value="{{ old('p_name') }}" class="form-control" placeholder="Mr and Mrs Ajiboye" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Child's DOB*</label>
                                                        <input type="date" name="dob" value="{{ old('dob') }}" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Child's Gender*</label><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                                            <span class="form-check-label" for="male">Male</span>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                                            <span class="form-check-label" for="female">Female</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Child's Age*</label>
                                                        <input type="text" name="age" class="form-control" value="{{ old('age') }}" placeholder="12 months" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Parent Phone No</label>
                                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="08160540083" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Parent Email Address*</label>
                                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="hello@bamiscradle.com" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Home Address*</label>
                                                        <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="No 2 Ejigno street" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Place of work*</label>
                                                        <input type="text" name="place_of_work" value="{{ old('place_of_work') }}" class="form-control" placeholder="Company's Name" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Place of work Address*</label>
                                                        <input type="text" name="place_of_work_address" value="{{ old('place_of_work_address') }}" class="form-control" placeholder="No 2 Ejigno street" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Check preferred service</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="Day care creche" id="defaultCheck0" name="service[]">
                                                            <span class="form-check-label" for="defaultCheck0">
                                                            Day care creche
                                                            </span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="On-site Creche (Event Places)" name="service[]" id="defaultCheck1">
                                                            <span class="form-check-label" for="defaultCheck1">
                                                            On-site Creche (Event Places)
                                                            </span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="service[]" value="After school care" type="checkbox" id="defaultCheck2">
                                                            <span class="form-check-label" for="defaultCheck2">
                                                            After school care
                                                            </span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="service[]" type="checkbox" value="Daily Pick Up and Drop Off" id="defaultCheck3">
                                                            <span class="form-check-label" for="defaultCheck3">
                                                            Daily Pick Up and Drop Off
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="account">
                                            <div class="row plr-40">
                                                <h4 class="info-text"> Who to contact in case of emergency</h4>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input type="text" name="who_to_call_name" value="{{ old('who_to_call_name') }}" class="form-control" placeholder="Olaleye Adeola" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Phone No*</label>
                                                        <input type="text" name="who_to_call_phone" value="{{ old('who_to_call_phone') }}" class="form-control" placeholder="08160540083" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" name="who_to_call_email" value="{{ old('who_to_call_email') }}" placeholder="info@bamiscradles.com" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Address*</label>
                                                        <input type="text" class="form-control" name="who_to_call_address" value="{{ old('who_to_call_address') }}" placeholder="No 2 Ejigno street" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Does your child has any disability?*</label><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="disability" id="no" value="No">
                                                            <span class="form-check-label" for="No">No</span>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="disability" value="yes" id="yes">
                                                            <span class="form-check-label" for="Yes">Yes</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="specify"  class="col-lg-6" style="display: none">
                                                    <div class="form-group">
                                                        <label>Specify Here?</label>
                                                        <input type="text" name="specify_dis" class="form-control" placeholder="No 2 Ejigno street" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="address">
                                            <div class="row plr-40">
                                                <h4 class="info-text">Who should pick up your child aside you</h4>
                                                <div class="col-lg-6">
                                                    <h5 class="text-center">IDENTIFY 1</h5>
                                                        {{-- <div class="picture-container">
                                                            <div class="picture">
                                                                <img src="{{ asset('assets/img/default-avatar.png') }}" class="picture-src" title=""/>
                                                                <input type="file" name="pickup_picture_1">
                                                            </div>
                                                            <h6>Choose Picture</h6>
                                                        </div> --}}
                                                        <div class="form-group">
                                                            <label>Choose Image</label>
                                                            <input type="file" class="form-control" name="pickup_picture_1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Name*</label>
                                                            <input type="text" name="pickup_name_1" value="{{ old('pickup_name_1') }}" class="form-control" placeholder="Olaleye Adeola" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone No*</label>
                                                            <input type="text" name="pickup_phone_1" value="{{ old('pickup_phone_1') }}" class="form-control" placeholder="08160540083" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email*</label>
                                                            <input type="text" name="pickup_email_1" value="{{ old('pickup_email_1') }}" class="form-control" placeholder="info@bamiscradles.com" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address*</label>
                                                            <input type="text" name="pickup_address_1" value="{{ old('pickup_address_1') }}" class="form-control" placeholder="No 2 Ejigno street" />
                                                        </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5 class="text-center">IDENTIFY 2</h5>
                                                        {{-- <div class="picture-container">
                                                            <div class="picture">
                                                                <img src="{{ asset('assets/img/default-avatar.png') }}" class="picture-src" title=""/>
                                                                <input type="file" name="pickup_picture_2">
                                                            </div>
                                                            <h6>Choose Picture</h6>
                                                        </div> --}}
                                                        <div class="form-group">
                                                            <label>Choose Image</label>
                                                            <input type="file" class="form-control" name="pickup_picture_2" value="{{ old('pickup_picture_2') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Name*</label>
                                                            <input type="text" name="pickup_name_2" class="form-control" value="{{ old('pickup_name_2') }}" placeholder="Olaleye Adeola" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone No*</label>
                                                            <input type="text" name="pickup_phone_2" value="{{ old('pickup_phone_2') }}" class="form-control" placeholder="08160540083" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email*</label>
                                                            <input type="text" name="pickup_email_2" value="{{ old('pickup_email_2') }}" class="form-control" placeholder="info@bamiscradles.com" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address*</label>
                                                            <input type="text" name="pickup_address_2"  value="{{ old('pickup_address_2') }}" class="form-control" placeholder="No 2 Ejigno street" />
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-footer height-wizard">
                                        <div class="pull-right">
                                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                            <button type="submit" class='btn btn-finish btn-fill btn-warning btn-wd btn-sm'>Finish</button>
                                        </div>
            
                                        <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function(){
      $("#yes").click(function(){
        $("#specify").show(1000);
      });
      $("#no").click(function(){
        $("#specify").hide(1000);
      });
    });
</script>
@endsection