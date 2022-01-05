@extends('layouts.user')

@section('content')

<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="bnr-inr overlay-black-middle" style="background-image:url({{asset('user/images/banner/bnr1.jpg')}});">
        <div class="container">
            <div class="bnr-inr-entry">
                <h1 class="text-white">Book Now</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Book Now</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- contact area -->
    <div class="">
        <!-- Our Awesome Services -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-content">
                    <form class="booking-form">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="block-form">
                                    <h3 class="form-head">How Big Is Your Home?</h3>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                            <label>Bedrooms</label>
                                            <select name="bedroom">
                                                <option value="0">0</option>
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                            <label>Bathrooms</label>
                                            <select name="bathroom">
                                                <option value="1">1</option>
                                                <option value="1.5">1.5</option>
                                                <option value="2">2</option>
                                                <option value="2.5">2.5</option>
                                                <option value="3">3</option>
                                                <option value="3.5">3.5</option>
                                                <option value="4">4</option>
                                                <option value="4.5">4.5</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                            <label>Set Frequency</label>
                                            <select name="frequency">
                                                <option value="ot">One-Time</option>
                                                <option value="wk">Weekly (20%)</option>
                                                <option value="eowk" selected="selected">Every Other Week (15%)</option>
                                                <option value="mt">Monthly (10%)</option>
                                             </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-form">
                                    <h3 class="form-head">Extras</h3>
                                    <div class="clearfix form-group">
                                        <div class="extras-book" data-toggle="button">
                                          <label class="btn active">
                                            <input type="checkbox"  checked><i class="flaticon-broom"></i> Deep Cleaning
                                          </label>
                                          <label class="btn">
                                            <input type="checkbox" ><i class="flaticon-baby-stroller"></i> Move In/Out
                                          </label>
                                          <label class="btn">
                                            <input type="checkbox" ><i class="flaticon-washing-machine"></i> Inside Cabinets
                                          </label>
                                          <label class="btn">
                                            <input type="checkbox" ><i class="flaticon-spray-1"></i> Inside Fridge
                                          </label>
                                          <label class="btn">
                                            <input type="checkbox" ><i class="flaticon-pot"></i> Inside Oven
                                          </label>
                                          <label class="btn">
                                            <input type="checkbox" ><i class="flaticon-house-1"></i> Interior Windows
                                          </label>
                                          <label class="btn">
                                            <input type="checkbox"  ><i class="flaticon-trash"></i> Green Cleaning
                                          </label>
                                          <label class="btn">
                                            <input type="checkbox"  ><i class="flaticon-bucket"></i> Wipe Window Blinds
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-form">
                                    <h3 class="form-head">Zip Code</h3>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4 col-lg-4 form-group">
                                            <input name="zip-code" class="form-control" placeholder="Enter Zip Code" type="text">
                                        </div>
                                        <div class="col-sm-6 col-md-8 col-lg-8 form-group">
                                            <input class="form-control" name="email" placeholder="Enter Email Address" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="block-form">
                                    <h3 class="form-head">Select Date</h3>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 form-group date">
                                             <div class="form-group">
                                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                                    <input type="text" name="date" id="datetimepicker1" data-toggle="datetimepicker" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="block-form">
                                        <h3 class="form-head">Account Details</h3>
                                        <div class="new-address-block">
                                            <div class="row">
                                               <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                  <input  value="" name="first-name" class="form-control" placeholder="First Name" type="text">
                                               </div>
                                               <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                  <input  value="" name="last-name" class="form-control " placeholder="Last Name" type="text">
                                               </div>
                                            </div>
                                            <div class="row">
                                               <div class="form-group col-lg-8 col-md-8 col-sm-6">
                                                  <input placeholder="Address" name="address" class="form-control"  value="" type="text">
                                               </div>
                                               <div class="form-group col-lg-4 col-md-4 col-sm-6">
                                                  <input  value="" name="apt" class="form-control" placeholder="Apt" type="text">
                                               </div>
                                            </div>
                                            <div class="row">
                                               <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                  <input  value="" name="phone" class="form-control" placeholder="Phone" type="text">
                                               </div>
                                               <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                                  <input  value="" name="alt-phone" class="form-control" placeholder="Alternative Number" type="text">
                                               </div>
                                            </div>
                                            <div class="row">

                                               <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <textarea name="note" placeholder="Notes and Special Instructions" class="form-control" ></textarea>
                                               </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="block-form">
                                        <h3 class="form-head">Enter Payment Details</h3>
                                        <div class="row">
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                 <div class="extras-book radio" data-toggle="buttons">
                                                     <label class="btn btn-primary active">
                                                         <input type="radio" name="options" id="option1"  checked>Pay On Spot
                                                     </label>
                                                     <label class="btn btn-primary">
                                                         <input type="radio" name="options" id="option2" >Pay Now
                                                     </label>
                                                 </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group ">
                                                    <input class="form-control" type="text" >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group ">
                                                    <input class="form-control" type="text" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group ">
                                                    <select name="month">
                                                      <option value="01">1-January</option>
                                                      <option value="02">2-February</option>
                                                      <option value="03">3-March</option>
                                                      <option value="04">4-April</option>
                                                      <option value="05">5-May</option>
                                                      <option value="06">6-June</option>
                                                      <option value="07">7-July</option>
                                                      <option value="08">8-August</option>
                                                      <option value="09">9-September</option>
                                                      <option value="10">10-October</option>
                                                      <option value="11">11-November</option>
                                                      <option value="12">12-December</option>
                                                   </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group ">
                                                    <select name="year">
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                     </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="site-button button-lg btn-block">COMPLETE BOOKING</button>
                                </div>
                            <div class="col-lg-4 col-md-12 sticky-box">
                                <div class="billing-list bg-primary text-white p-a30 m-b30">
                                    <h3 class="text-white m-t0">Booking Summary</h3>
                                    <ul>
                                        <li>
                                            <label>Bedrooms</label>
                                            :<span>1</span>
                                        </li>
                                        <li>
                                            <label>Bathrooms</label>
                                            :<span>1</span>
                                        </li>
                                        <li class="services-li">
                                            <label>Extras</label>
                                            :<span>Deep Cleaning,  Move In/Out,  Inside Cabinets</span>
                                        </li>
                                        <li>
                                             <label>Frequency</label>
                                             :<span>Every Other Week (15%)</span>
                                        </li>
                                        <li>
                                             <label>Location</label>
                                             :<span id="field-zipcode-value"></span>
                                        </li>
                                        <li>
                                             <label>Professional(s)</label>
                                             :<span>1 - Stays till job is complete</span>
                                        </li>
                                    </ul>
                                    <ul class="total-money">
                                        <li>
                                            <label>Total</label>
                                            :<span>Rs. 10,080</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="icon-bx-wraper bx-style-1 p-a30 center  m-b30">
                                    <div class="icon-md text-primary m-b20"> <a href="#" class="icon-cell"><i class="fa fa-id-card"></i></a> </div>
                                    <div class="icon-content">
                                        <h5 class="tilte text-uppercase">Free Coupon</h5>
                                        <p>Lorem ipsum dolor sit elit nonummy dolor is euismod end </p>
                                        <a href="#" class="site-button">Read More</a>
                                    </div>
                                </div>
                                <div class="post-media img-effect m-b20">
                                    <a href="#"><img src="{{asset('user/images/ads/img1.jpg')}}" alt=""></a>
                                </div>
                                <h3 class="m-t40 m-b10">Common Questions</h3>
                                <div class="separator bg-primary"></div>
                                <ul class="list-check-circle primary font-16">
                                    <li>Whats included in a cleaning?</li>
                                    <li>How does your pricing work?</li>
                                    <li>What is your cancellation and rescheduling policy?</li>
                                    <li>Do you provide the supplies and equipment?</li>
                                    <li>How long will my cleaning take?</li>
                                    <li>How do I tip my cleaner?</li>
                                    <li>Can I request more than 1 provider?</li>
                                    <li>When do I get charged for my cleaning?</li>
                                    <li>Do you provide the supplies and equipment?</li>
                                    <li>How long will my cleaning take?</li>
                                    <li>How do I tip my cleaner?</li>
                                    <li>Can I request more than 1 provider?</li>
                                    <li>When do I get charged for my cleaning?</li>
                                    <li>I need more help</li>
                                </ul>
                            </div>

                        </div>
                    </form>
                 </div>
            </div>
        </div>
        <!-- Our Awesome Services END -->
    </div>
    <!-- contact area END -->
</div>
<!-- Content END-->

@endsection