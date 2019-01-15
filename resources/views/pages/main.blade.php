@extends('layouts.master', ['title' => $page->title, 'meta_d' => $page->meta_d, 'meta_k' => $meta_c])

@section('content')

    <main>



        <div class="wrapper">

            <div class="main-top">

                {!! $page->body !!}

                @include('parts.subscribe')

            </div>

            <div class="main-list">

                <div class="list-item">
                    <a href="#">Product Jobs</a>

                    <div class="list-item-cnt">

                        <div class="item">
                            <a href="#" class="item-company-logo">
                                <img src="/img/company.png" alt="">
                            </a>
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                            <span class="item-new">new</span>
                        </div>
                        <div class="item highlight">
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                        </div>
                        <div class="item">
                            <a href="#" class="item-company-logo">
                                <img src="/img/company.png" alt="">
                            </a>
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                            <span class="item-new">new</span>
                        </div>
                        <div class="item">
                            <a href="#" class="item-company-logo">
                                <img src="/img/company.png" alt="">
                            </a>
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                            <span class="item-new">new</span>
                        </div>
                        <div class="item highlight">
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                        </div>
                        <div class="item">
                            <a href="#" class="item-company-logo">
                                <img src="/img/company.png" alt="">
                            </a>
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                            <span class="item-new">new</span>
                        </div>
                        <div class="item last-item">
                            <a href="#" class="item-work-name">View all 34 Product Jobs →</a>
                        </div>

                    </div>

                </div>

                <div class="list-item">
                    <a href="#">Product Jobs</a>

                    <div class="list-item-cnt">

                        <div class="item">
                            <a href="#" class="item-company-logo">
                                <img src="/img/company.png" alt="">
                            </a>
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                            <span class="item-new">new</span>
                        </div>
                        <div class="item highlight">
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                        </div>
                        <div class="item">
                            <a href="#" class="item-company-logo">
                                <img src="/img/company.png" alt="">
                            </a>
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                            <span class="item-new">new</span>
                        </div>
                        <div class="item">
                            <a href="#" class="item-company-logo">
                                <img src="/img/company.png" alt="">
                            </a>
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                            <span class="item-new">new</span>
                        </div>
                        <div class="item highlight">
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                        </div>
                        <div class="item">
                            <a href="#" class="item-company-logo">
                                <img src="/img/company.png" alt="">
                            </a>
                            <p class="item-company-name">Company 1</p>
                            <a href="#" class="item-work-name">JavaScript Developer</a>
                            <span class="item-date">Dec 21</span>
                            <span class="item-new">new</span>
                        </div>
                        <div class="item last-item">
                            <a href="#" class="item-work-name">View all 34 Product Jobs →</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection