@extends('WE.layout.master')
@section('header')
    <style>
        .headerPart {
            display: flex;
            flex-direction: row;
            text-align: right;
            justify-content: flex-end;
        }

        .topLogo {
            width: 300px;
        }

        .flex-item {
            display: flex;
            justify-content: flex-end;
        }

        .input-group {
            display: flex;
            flex-direction: row;
        }

        .rightPart {
            width: 100%;
            background-image: url('/images/light-grey-world-map_1053-431.png');
            background-repeat: no-repeat;
            background-size: contain;
        }

        .agree-term {
            text-align: right;
            font-weight: bold
        }

        .bottom-text {
            padding-top: 80px;
            text-align: center;
            font-size: 40px;
            letter-spacing: 3px;
        }

        .think01Image {
            width: 20%;
        }

        .think02Image {
            width: 30%;
        }

        .think03Image {
            width: 65%;
        }

        .textBold {
            font-weight: bold;
        }
    </style>
@endsection
@section('mainBody')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-7 leftPart">
                <div class="headerPart">
                    <img src="{{URL::to('/images/headingImage.png')}}" class="topLogo pt-3">
                </div>
            </div>
            <div class="col-md-5">
                <div>
                    <form method="post" action="#" class="flex-item">
                        <div class="row flex-item pt-2">
                            <div class="col-md-5 col-sm-12 col-12" style="width: 100%;">
                                <label class="mb-0" for="emailPhone" style="font-weight: bold">Email/Phone</label>
                                <input type="text" id="emailPhone" name="emailPhone" class="form-control">
                            </div>
                            <div class="col-md-7 col-sm-12 col-12">
                                <label class="mb-0" for="password" style="font-weight: bold;">Password</label>
                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control">
                                    <button type="submit" class="btn btn-primary ml-3" style="font-size: 12px">Log In
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr style="border-top: 1px solid white"/>
        <div class="row">
            <div class="col-md-7 leftPart">
                <div class="input-group mt-5 ml-5 mt-0 pt-0">
                    <img src="{{URL::to('/images/Think_02.png')}}" class="think01Image">
                    <img src="{{URL::to('/images/Think_01.png')}}" class="think02Image">

                    <div style="display: flex; justify-content: center">
                        <img src="{{URL::to('/images/Think_03.png')}}" class="think03Image">
                    </div>
                </div>

            </div>
            <div class="col-md-5 rightPart">
                <div class="mt-5">
                    <form>
                        <input type="text" class="form-control" placeholder="Email/Phone *">
{{--                        <div class="row mt-2">--}}
{{--                            <div class="col-md-6 col-sm-12 col-12 pb-2">--}}
{{--                                <input type="text" class="form-control" placeholder="username *">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 col-sm-12 col-12">--}}
{{--                                <input type="password" class="form-control" placeholder="password *">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row mt-2">
                            <div class="col-md-6 col-sm-12 col-12 pb-2">
                                <label class="mb-0 textBold" for="citizenshipCountry">Your country of
                                    citizenship</label>
                                <input type="text" class="form-control" id="citizenshipCountry" placeholder="Country">
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <label class="mb-0 textBold" for="destinationCountry">Your preferred future
                                    destination</label>
                                <input type="text" class="form-control" id="destinationCountry" placeholder="Country">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6 col-sm-12 col-12">
                                <label class="mb-0" for="dob" style="font-weight: bold">Birthday *</label>
                                <input type="date" id="dob" class="form-control"
                                       placeholder="Completed Education Level">
                            </div>
                            <div class="col-md-6 col-sm-12 col-12">
                                <label class="mb-0" for="dob" style="font-weight: bold">We would refer you as ?
                                    *</label>
                                <select class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="agree-term mt-3">
                            <input type="checkbox"/> I agree to WE terms
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-success float-right">Sign Up</button>
                        </div>
                        <p class="bottom-text">
                            Live Your Dream
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')

@endsection


