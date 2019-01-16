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
                    <form action="/job/add" method="post" id="step1-form">
                    <div class="step1-block">
                        <p>First, tell us about the position</p>

                        <div class="step1-block-text-input special">
                            <span>Title</span>
                            <div>
                                <input type="text" placeholder="Type title here" name="title" required>
                                <p>
                                    Example: “MGB Overhaul” or “Sheet metal Technician”. Title must describe one job task or position. General calls will be removed or edited.
                                </p>
                            </div>
                        </div>
                        {{csrf_field()}}
                        <div class="step1-block-check">
                            <span>Category</span>
                            <div>
                                <ul>
                                    @isset($maincats)
                                        @foreach($maincats as $item)
                                            <li>
                                                 <input type="radio" name="category" id="cat-{{$item->id}}" value="{{$item->id}}">
                                                 <label for="cat-1">{{$item->name}}</label>
                                            </li>
                                        @endforeach
                                    @endisset

                                    <li>
                                        <input type="text" id="autoc" name="category2" placeholder="Other (enter category)">
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="step1-block-check">
                            <span>Job Type</span>
                            <div>
                                <ul>
                                    <li>
                                        <input type="radio" name="fulltime" id="type-1" value="fulltime" >
                                        <label for="type-1">Full-Time</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="contract" id="type-2" value="fulltime">
                                        <label for="type-2">Contract</label>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="step1-block-text-input" style="margin-top: 30px;">
                            <span>Location</span>
                            <input type="text" name="location" placeholder="Optional, Example: “North America”, “Europe”, “U.S.A.”" required>
                        </div>

                        <div class="step1-block-textarea">
                            <span>Description</span>
                            <textarea id="job-desc" name="description" placeholder="Write description here" required></textarea>
                        </div>

                        <div class="step1-block-apply">
                            <span>How do people apply for this task / job?</span>
                            <textarea name="apply" placeholder="Example: Send a resume to jane@company.com" required></textarea>
                        </div>

                    </div>

                    <div class="step1-block">
                        <p>Tell us about your company</p>

                        <div class="step1-block-text-input" style="margin-bottom: 30px;">
                            <span>Name</span>
                            <input type="text" name="user-name" placeholder="Enter your company or organization’s name." required>
                        </div>

                        <div class="step1-block-text-input">
                            <span>Company Statement</span>
                            <input type="text" name="statement" placeholder="Enter your company or organization’s mission statement." required>
                        </div>

                        <div class="step1-block-text-input" style="margin: 30px 0;">
                            <span>Headquarters</span>
                            <input type="text" name="headquarters" placeholder="“Chicago, IL”, “Stockholm, Sweden”" required>
                        </div>

                        <div class="step1-block-logo">
                            <span>Logo</span>
                            <div>
                                <input type="file" name="logo" id="">
                                <p>
                                    Optional — Your company logo will appear at the top of your listing.<br>
                                    We'll resize automatically.
                                </p>
                            </div>
                        </div>

                        <div class="step1-block-text-input">
                            <span>URL</span>
                            <input type="text" name="site" placeholder="Example: https://mybusiness.com/careers/apply">
                        </div>

                        <div class="step1-block-text-input special" style="margin-top: 30px;">
                            <span>Email</span>
                            <div>
                                <input type="email" name="email" placeholder="This is where we’ll send your receipt and confirmation email." required>
                                <p>
                                    This email will use for login.
                                </p>
                            </div>
                        </div>


                        <div class="step1-block-textarea">
                            <span>Tell us more about your company.</span>
                            <textarea placeholder="Example: Company bio, description, etc." name="description" required></textarea>
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
                            <input type="checkbox" name="pay1" id="step1-check-1">
                            <label for="step1-check-1"><strong>Yes, highlight my ad</strong> for only $19.99</label>
                        </div>

                        <div class="step1-finish-check second">
                            <input type="checkbox" name="pay2" id="step1-check-2">
                            <label for="step1-check-2"><strong>Display my company logo for $29.99</strong></label>
                        </div>

                        <div class="step1-finish-check-last">
                            <input type="checkbox" name="pay3" id="step1-check-3">
                            <label for="step1-check-3">Pin my Ad to the top for $ 49.99</label>
                        </div>

                        <div class="step1-finish-text">
                            <p>
                                <strong>Select 2 options for 15% discount or Feature you ad with all 3 for 30% discount</strong>
                            </p>
                        </div>
                        <button type="submit" id="submit-button" style="display: none">ok</button>

                        <a href="javascript:void(0);" id="clickme">
                            Continue to Step 2 to preview your ad
                        </a>

                    </div>
                        </form>
                </div>

            </div>

        </div>

    </main>

    <script>
        var options = {
            url: "/api/cats",
            getValue: "name",
            list: {
                match: {
                    enabled: true
                }
            }
        };
    </script>

@endsection