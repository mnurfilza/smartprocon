@extends('frontend.layouts.app')
@section('content')
<div class="page-form">

    <section class="section-one bg-white">
        <div class="container-fluid">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
            </div>
            @endif
            <form action="/customer" method="POST" enctype="multipart/form-data" id="stepByStepForm" class="form">
                @csrf
                <ul class="progress-bar">
                    <li class="progress-bar__dot full poppins">
                        1
                        <div class="title-step poppins">
                            Choose Products
                        </div>
                    </li>
                    <li class="progress-bar__connector poppins"></li>
                    <li class="progress-bar__dot poppins">
                        2
                        <div class="title-step poppins">
                            Number of Floors & Rooms
                        </div>
                    </li>
                    <li class="progress-bar__connector poppins"></li>
                    <li class="progress-bar__dot poppins">
                        3
                        <div class="title-step poppins">
                            Choose Budget
                        </div>
                    </li>
                    <li class="progress-bar__connector poppins"></li>
                    <li class="progress-bar__dot poppins">
                        4
                        <div class="title-step poppins">
                            Choose System
                        </div>
                    </li>
                    <li class="progress-bar__connector poppins"></li>
                    <li class="progress-bar__dot poppins">
                        5
                        <div class="title-step poppins">
                            Fill in the Data Form
                        </div>
                    </li>
                </ul>

                <div class="step step1">
                    <div class="title-step text-center">
                        <p class="text poppins">What are you looking for?</p>
                    </div>

                    <div class="top row m-0">
                        @foreach ($objects as $item)
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="object" id="inlineRadio1"
                                        value={{$item->id}}>
                                    <label class="form-check-label poppins" for="inlineRadio1">
                                        {{$item->nama_object}}
                                    </label>
                                </div>
                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- error message untuk option -->
                        @error('option')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="step step2 hidden">
                    <div class="title-step text-center">
                        <p class="text poppins">Choose the number of floors and rooms?</p>
                    </div>
                    <div class="top row m-0">
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="floor-and-rooms"
                                        id="inlineRadio1" value="1-2">
                                    <label class="form-check-label poppins" for="inlineRadio1">1 - 2</label>
                                </div>
                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="floor-and-rooms"
                                        id="inlineRadio2" value="3-4">
                                    <label class="form-check-label poppins" for="inlineRadio2">3 - 4</label>
                                </div>
                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="floor-and-rooms"
                                        id="inlineRadio1" value="5-6">
                                    <label class="form-check-label poppins" for="inlineRadio1">5 - 6</label>
                                </div>
                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="floor-and-rooms"
                                        id="inlineRadio2" value="6-More">
                                    <label class="form-check-label poppins" for="inlineRadio2">6 - More</label>
                                </div>
                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step step3 hidden">
                    <div class="title-step text-center">
                        <p class="text poppins">Choose your budget?</p>
                    </div>
                    <div class="top row m-0">
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="500$-800$">
                                    <label class="form-check-label poppins" for="inlineRadio1">500$ - 800$</label>
                                </div>
                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="500$-800$">
                                    <label class="form-check-label poppins" for="inlineRadio2">500$ - 800$</label>
                                </div>

                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/raddio_teenyicons_shop.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="500$-800$">
                                    <label class="form-check-label poppins" for="inlineRadio1">500$ - 800$</label>
                                </div>

                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_ant_home-filled.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="$800-More">
                                    <label class="form-check-label poppins" for="inlineRadio2">800$ - More</label>
                                </div>
                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_entypo_dots.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step step4 hidden">
                    <div class="title-step text-center">
                        <p class="text poppins">Choose the system you want?</p>
                    </div>

                    <div class="top row m-0">
                        @foreach ($data as $row)
                        <div class="box-choice col-12 col-md-6">
                            <div class="form-check form-check-inline poppins">
                                <div class="box-radio">
                                    <input class="form-check-input" type="checkbox" name="solution[]" id="inlineRadio1"
                                        value="{{ $row->id }}">
                                    <label class="form-check-label poppins"
                                        for="inlineRadio1">{{$row->nama_solution}}</label>
                                </div>
                                <div class="box-img">
                                    <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}"
                                        class="lazy img-fluid radio" alt="icon">
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- error message untuk category -->
                        @error('system')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>



                </div>

                <div class="step step5 hidden">
                    <div class="title-step text-center">
                        <p class="text poppins">Please fill out this form to get your project design</p>
                    </div>
                    <div class="box-form">
                        <div class="mb-4 row">
                            <label for="inputName" class="col-2 col-md-2 col-form-label poppins">Name</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control poppins @error('nama') is-invalid @enderror"
                                    name="name" value="{{ old('title') }}" placeholder="Your Name">

                                <!-- error message untuk title -->
                                @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="inputPhone" class="col-2 col-md-2 col-form-label poppins">Phone</label>
                            <div class="col-12 col-md-10">
                                <input type="number" class="form-control poppins @error('phone') is-invalid @enderror"
                                    name="phone_number" value="{{ old('title') }}" placeholder="Your Phone">

                                @error('phone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="inputEmail" class="col-2 col-md-2 col-form-labe poppins">Email</label>
                            <div class="col-12 col-md-10">
                                <input type="email" class="form-control poppins @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('title') }}" placeholder="Your Email">

                                @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="inputCity" class="col-2 col-md-2 col-form-label poppins">City</label>
                            <div class="col-12 col-md-10">
                                <input name="kota" class="form-control poppins @error('object') is-invalid @enderror"
                                    list="datalistOptions" id="inputCity" placeholder="Please enter your city">
                                <datalist id="datalistOptions">
                                    @foreach ($citi as $item)
                                        <option value={{$item->id}}>{{$item->nama_kota}}</option>
                                    @endforeach

                                    @error('option')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </datalist>
                            </div>

                        </div>
                        <div class="mb-4 row">
                            <label for="inputCountry" class="col-2 col-md-2 col-form-label poppins">Country</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control poppins @error('country') is-invalid @enderror"
                                    name="country" value="{{ old('title') }}" placeholder="Please enter your country">

                                @error('country')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-group poppins">
                    <button id="previous" class="disabled button poppins" disabled>
                        Previous
                    </button>
                    <button id="next" class="button poppins">
                        Next
                    </button>
                    <input id="validate" type="submit" value="Save Project" class="hidden button poppins">
                </div>
            </form>
        </div>
    </section>
</div>
<script>
    const previousButton = document.getElementById("previous");
    const nextButton = document.getElementById("next");
    const submitButton = document.getElementById('validate');
    const form = document.getElementById('stepByStepForm');
    const dots = document.getElementsByClassName('progress-bar__dot');
    const stepLine = document.getElementsByClassName('progress-bar');
    const numberOfSteps = 5;
    let currentStep = 1;

    for (let i = 0; i < dots.length; ++i) {
        dots[i].addEventListener('click', () => {
            goToStep(i + 1)
        })
    }

    previousButton.onclick = goPrevious
    nextButton.onclick = goNext

    function goNext(e) {
        e.preventDefault()
        currentStep += 1
        goToStep(currentStep)
    }

    function goPrevious(e) {
        e.preventDefault()
        currentStep -= 1
        goToStep(currentStep)
    }

    function goToStep(stepNumber) {
        currentStep = stepNumber
        let inputsToHide = document.getElementsByClassName('step')
        let inputs = document.getElementsByClassName(`step${currentStep}`)
        let indicators = document.getElementsByClassName('progress-bar__dot')

        for (let i = indicators.length - 1; i >= currentStep; --i) {
            indicators[i].classList.remove('full')
        }

        for (let i = 0; i < currentStep; ++i) {
            indicators[i].classList.add('full')
        }

        //hide all input
        for (let i = 0; i < inputsToHide.length; ++i) {
            hide(inputsToHide[i])
        }

        //only show the right one
        for (let i = 0; i < inputs.length; ++i) {
            show(inputs[i])
        }

        //if we reached final step
        if (currentStep === numberOfSteps) {
            enable(previousButton);
            hide(nextButton);
            show(submitButton);
            hide(stepLine);
        }

        //else if first step
        else if (currentStep === 1) {
            disable(previousButton);
            enable(next);
            hide(submitButton);
        } else {
            enable(previousButton);
            enable(next);
            hide(submitButton);
        }
    }

    function enable(elem) {
        elem.classList.remove("disabled");
        elem.disabled = false;
    }

    function disable(elem) {
        elem.classList.add("disabled");
        elem.disabled = true;
    }

    function show(elem) {
        elem.classList.remove('hidden')
    }

    function hide(elem) {
        elem.classList.add('hidden')
    }
</script>
@stop
