@extends('layouts.master')

@section('content')
    <main>

        <div class="wrapper">

            <div class="step1">

                <div class="step-list">
                    <a href="#" class="current">1. Create your ad</a>
                    <a href="#">2. Preview</a>
                    <a href="#">3. Purchase</a>
                </div>

                <div class="step1-cnt">

                    <h1>STEP 1: CREATE YOUR AD</h1>

                    <div class="step1-block">
                        <p>First, tell us about the position</p>

                        <div class="step1-block-text-input special">
                            <span>Task title</span>
                            <div>
                                <input type="text" placeholder="Type title here">
                                <p>
                                    Example: “MGB Overhaul” or “Sheet metal Technician”. Title must describe one job task or position. General calls will be removed or edited.
                                </p>
                            </div>
                        </div>

                        <div class="step1-block-check">
                            <span>Category</span>
                            <div>
                                <ul>
                                    <li>
                                        <input type="radio" name="category" id="cat-1" value="Airframe Maintenance tasks">
                                        <label for="cat-1">Airframe Maintenance tasks</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="category" id="cat-2" value="Powerplant Maintenance tasks">
                                        <label for="cat-2">Powerplant Maintenance tasks</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="category" id="cat-3" value="Inspection">
                                        <label for="cat-3">Inspection</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="category" id="cat-4" value="Equipment repair">
                                        <label for="cat-4">Equipment repair</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="category" id="cat-5" value="Avionics">
                                        <label for="cat-5">Avionics</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="category" id="cat-6" value="Jobs">
                                        <label for="cat-6">Jobs</label>
                                    </li>
                                    <li>
                                        <input type="text" placeholder="Other (enter category)">
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="step1-block-check">
                            <span>Aircraft Type</span>
                            <div>
                                <ul>
                                    <li>
                                        <input type="radio" name="types" id="type-1" value="Fixed wing">
                                        <label for="type-1">Fixed wing</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="types" id="type-2" value="Rotary wing">
                                        <label for="type-2">Rotary wing</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="step1-block-check">
                            <span>Aircraft Make</span>
                            <div>
                                <ul>
                                    <li>
                                        <input type="radio" name="makes" id="make-1" value="Airbus">
                                        <label for="make-1">Airbus</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="makes" id="make-2" value="Augusta/Leonardo">
                                        <label for="make-2">Augusta/Leonardo</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="makes" id="make-3" value="Boeing">
                                        <label for="make-3">Boeing</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="makes" id="make-4" value="Bell">
                                        <label for="make-4">Bell</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="makes" id="make-5" value="Cessna">
                                        <label for="make-5">Cessna</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="makes" id="make-6" value="Robinson">
                                        <label for="make-6">Robinson</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="makes" id="make-7" value="Sikorsky">
                                        <label for="make-7">Sikorsky</label>
                                    </li>
                                    <li>
                                        <input type="text" placeholder="Other (enter make)">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="step1-block-text-input" style="margin-top: 30px;">
                            <span>Location</span>
                            <input type="text" placeholder="Optional, Example: “North America”, “Europe”, “U.S.A.”">
                        </div>

                        <div class="step1-block-textarea">
                            <span>Description</span>
                            <textarea id="job-desc" placeholder="Write description here"></textarea>
                        </div>

                        <div class="step1-block-apply">
                            <span>How do people apply for this task / job?</span>
                            <textarea placeholder="Example: Send a resume to jane@company.com"></textarea>
                        </div>

                    </div>


                    <div class="step1-finish">
                        <p>Help your ad stand out</p>

                        <div class="step1-finish-info">
                            <p>
                                Attract more attention to your post by highlighting it, or truly engage users by adding a highlight and a personalized company logo! <strong>These features have proven highly effective in generating more traffic to listings!</strong>
                            </p>
                            <img src="img/step1.png" alt="">
                        </div>

                        <div class="step1-finish-check first">
                            <input type="checkbox" name="" id="step1-check-1">
                            <label for="step1-check-1"><strong>Yes, highlight my ad</strong> for only $19.99.</label>
                        </div>

                        <div class="step1-finish-check second">
                            <input type="checkbox" name="" id="step1-check-2">
                            <label for="step1-check-2"><strong>Both, highlight my ad and display my company logo for only $39.99</strong></label>
                        </div>

                        <div class="step1-finish-check-last">
                            <input type="checkbox" name="" id="step1-check-3">
                            <label for="step1-check-3">Feature my job and pin it to the top for only $ 59.99!</label>
                        </div>

                        <div class="step1-finish-text">
                            <p>
                                <strong>Select 2 options for 15% discount or Feature you ad with all 3 for 30% discount</strong>
                            </p>
                        </div>

                        <a href="#">
                            Continue to Step 2 to preview your ad
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </main>
@endsection