@extends('layouts.master')

@section('content')
    <div class="container">
        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-5 pr-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                            <span class="subheading">Consultation</span>
                            <h2 class="mb-4">Free Consultation</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <form action="{{ route('appointments.store') }}" class="appointment-form ftco-animate" method="POST">
                            @csrf

                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="User Name" required autofocus>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" name=nrc placeholder="NRC" required>
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="specialist_id" id="" class="form-control" style="background-color:#3187f8 !important">
                                                <option value="">Select Your Services</option>
                                                @foreach ($specialists as $specialist)
                                                    <option value="{{$specialist->id}}">{{ $specialist->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" name="phone_no" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date" name="appointment_date" placeholder="Appointment Date" required>
                                    </div>
                                </div>
                                <div class="form-group ml-md-4">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-ios-clock"></span></div>
                                        <input type="text" class="form-control appointment_time" name="appointment_time" placeholder="Appointment Time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Appointment" class="btn btn-secondary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 p-5 bg-counter aside-stretch">
                        <h3 class="vr">About Mandaly Hospital Facts</h3>
                        <div class="row pt-4 mt-1">
                            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 p-5 bg-light">
                                    <div class="text">
                                        <strong class="number" data-number="20">0</strong>
                                        <span>Years of Experienced</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 p-5 bg-light">
                                    <div class="text">
                                        <strong class="number" data-number="30000">0</strong>
                                        <span>Happy Patients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 p-5 bg-light">
                                    <div class="text">
                                        <strong class="number" data-number="12">0</strong>
                                        <span>Number of Doctors</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 p-5 bg-light">
                                    <div class="text">
                                        <strong class="number" data-number="30">0</strong>
                                        <span>Number of Staffs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
