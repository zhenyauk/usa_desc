<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">

    <title>@isset($title){{$title or ''}} | {{setting('site.title')}}@else {{setting('site.title')}} @endisset</title>
    <meta name="description" content="{{$meta_d or ''}}" />
    <meta name="keywords" content="{{$meta_k or ''}}" />
</head>
<body>

<div class="mobile-header">
    <div class="mobile-header-btn">
        <i class="material-icons" id="open-menu">menu</i>
    </div>
    <div class="mobile-header-call">
        <a href="#" class="open-modal">Log In</a>
        <a href="#">Post for Free</a>
    </div>
</div>


<div class="mobile-menu">
    <p>
        <i class="material-icons" id="close-menu">close</i>
    </p>

    <ul>
        <li>
            <a href="#" class="no-click-mob">Categories</a>
            <ul>
                <li>
                    <a href="#">Copywriting</a>
                </li>
                <li>
                    <a href="#">Sales &amp; Marketing</a>
                </li>
                <li>
                    <a href="#">Programming</a>
                </li>
                <li>
                    <a href="#">Business &amp; Management</a>
                </li>
                <li>
                    <a href="#">All Other</a>
                </li>
                <li>
                    <a href="#">Customer Support</a>
                </li>
                <li>
                    <a href="#">Design</a>
                </li>
                <li>
                    <a href="#">DevOps &amp; Sysadmin</a>
                </li>
                <li>
                    <a href="#">Product</a>
                </li>
                <li>
                    <a href="#">Contract</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="no-click-mob">Resources</a>
            <ul>
                @foreach($menu['resource']->items as $item)
                    <li>
                        <a href="{{$item->url}}">{{$item->title}}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#" class="no-click-mob">Community</a>
            <ul>
                @foreach($menu['community']->items as $item)
                    <li>
                        <a href="{{$item->url}}">{{$item->title}}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>

</div>

<a href="#" id="to-top"><i class="material-icons">keyboard_arrow_up</i></a>

<header>
    <div class="wrapper">
        <div class="header-cnt">

            <div class="header-menu">
                <a href="/">
                    {{setting('site.logo_label')}}
                </a>

                <div>
                    <ul>
                        <li>
                            <a href="#" class="no-click">Categories</a>
                            <ul>
                                <li>
                                    <a href="#">Copywriting</a>
                                </li>
                                <li>
                                    <a href="#">Sales &amp; Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Programming</a>
                                </li>
                                <li>
                                    <a href="#">Business &amp; Management</a>
                                </li>
                                <li>
                                    <a href="#">All Other</a>
                                </li>
                                <li>
                                    <a href="#">Customer Support</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">DevOps &amp; Sysadmin</a>
                                </li>
                                <li>
                                    <a href="#">Product</a>
                                </li>
                                <li>
                                    <a href="#">Contract</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="no-click">Resources</a>
                            <ul>
                                @foreach($menu['resource']->items as $item)
                                    <li>
                                        <a href="{{$item->url}}">{{$item->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="no-click">Community</a>
                            <ul>
                                @foreach($menu['community']->items as $item)
                                    <li>
                                        <a href="{{$item->url}}">{{$item->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            @include('parts.search')

        </div>
    </div>
</header>
<!-- Main part open -->
<div id="main-cnt">