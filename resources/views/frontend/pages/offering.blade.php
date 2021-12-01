@extends('frontend.layouts.app')
@section('content')
<div class="page-form">
    <section class="section-one bg-white">
        <div class="container-fluid">
            <form id="stepByStepForm" class="form">
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
                    <div class="top">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="Apartement">
                                <label class="form-check-label poppins" for="inlineRadio1">Apartement</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="Commercial Buildings">
                                <label class="form-check-label poppins" for="inlineRadio2">Commercial
                                    Buildings</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/raddio_teenyicons_shop.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="Residential">
                                <label class="form-check-label poppins" for="inlineRadio1">Residential</label>
                            </div>

                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ant_home-filled.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="Others">
                                <label class="form-check-label poppins" for="inlineRadio2">Others</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_entypo_dots.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step step2 hidden">
                    <div class="title-step text-center">
                        <p class="text poppins">Choose the number of floors and rooms?</p>
                    </div>
                    <div class="top">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="1 - 2">
                                <label class="form-check-label poppins" for="inlineRadio1">1 - 2</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="3 - 4">
                                <label class="form-check-label poppins" for="inlineRadio2">3 - 4
                            </div>

                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="5 - 6">
                                <label class="form-check-label poppins" for="inlineRadio1">5 - 6</label>
                            </div>

                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="6 - More">
                                <label class="form-check-label poppins" for="inlineRadio2">6 - More</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step step3 hidden">
                    <div class="title-step text-center">
                        <p class="text poppins">Choose your budget?</p>
                    </div>
                    <div class="top">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="500$ - 800$">
                                <label class="form-check-label poppins" for="inlineRadio1">500$ - 800$</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="500$ - 800$">
                                <label class="form-check-label poppins" for="inlineRadio2">500$ - 800$</label>
                            </div>

                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/raddio_teenyicons_shop.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="500$ - 800$">
                                <label class="form-check-label poppins" for="inlineRadio1">500$ - 800$</label>
                            </div>

                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ant_home-filled.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label poppins" for="inlineRadio2">800$ - More</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_entypo_dots.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step step4 hidden">
                    <div class="title-step text-center">
                        <p class="text poppins">Choose the system you want?</p>
                    </div>
                    <div class="top">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="Lighting Control">
                                <label class="form-check-label poppins" for="inlineRadio1">Lighting Control</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ic_baseline.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="Access Control & Security">
                                <label class="form-check-label poppins" for="inlineRadio2">
                                    Audio & Video Control
                                </label>
                            </div>

                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/raddio_teenyicons_shop.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="Access Control & Security">
                                <label class="form-check-label poppins" for="inlineRadio1">
                                    Access Control & Security
                                </label>
                            </div>

                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ant_home-filled.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="Indoor Comfort">
                                <label class="form-check-label poppins" for="inlineRadio2">Indoor Comfort</label>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_entypo_dots.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="form-check form-check-inline poppins">
                            <div class="box-radio">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="Access Control & Security">
                                <label class="form-check-label poppins" for="inlineRadio1">
                                    Access Control & Security
                                </label>
                            </div>

                            <div class="box-img">
                                <img src="{{ asset('images/smarthome/radio_ant_home-filled.png') }}" class="lazy img-fluid radio" alt="icon">
                            </div>
                        </div>
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
                                <input type="text" class="form-control poppins" id="inputName" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="inputPhone" class="col-2 col-md-2 col-form-label poppins">Phone</label>
                            <div class="col-12 col-md-10">
                                <input type="number" class="form-control poppins" id="inputPhone"
                                    placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="inputEmail" class="col-2 col-md-2 col-form-labe poppins">Email</label>
                            <div class="col-12 col-md-10">
                                <input type="email" class="form-control poppins" id="inputEmail"
                                    placeholder="Your Email">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="inputCity" class="col-2 col-md-2 col-form-label poppins">City</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control poppins" id="inpuCity"
                                    placeholder="Please enter your city">
                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="inputCountry" class="col-2 col-md-2 col-form-label poppins">Country</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control poppins" id="inpuCountry"
                                    placeholder="Please enter your country">
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
                    <button id="validate" type="submit" class="hidden button poppins">
                        Save Project
                    </button>
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
