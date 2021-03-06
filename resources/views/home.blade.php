{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    @include('layouts.header')
{{--@endsection--}}
<style>

    .container {
        color: #444;
        padding: 10px 0;

    }
    .navbar {
        background: gray;
        padding: 0;
        text-align: center;
    }
    .nav-items {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        flex: 1;
        width: 100%;
        max-width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding: 0;
        margin: 0;
    }
    .nav-item {
        flex: 1;
        max-width: 100%;
        flex-basis: 100%;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        margin: 0 auto;
        padding: 20px 0;
        list-style-type: none;
    }
    .nav-item:hover {
        background: #333 !important;
        background: rgba(0,0,0,0.3) !important;
    }
    .nav-item:hover a {
        color: #fff;
    }
    .nav-item a {
        padding: 20px;
        text-decoration: none;
        color: #333;
    }
    .navbar.dropdown-menu .dropdown,
    .navbar.dropdown-menu .dropdown-right {
        position: relative;
        display: block;
    }
    .navbar.dropdown-menu .dropdown:hover,
    .navbar.dropdown-menu .dropdown-right:hover {
        pointer-events: auto;
    }
    .navbar.dropdown-menu .dropdown:hover .dropdown-content,
    .navbar.dropdown-menu .dropdown-right:hover .dropdown-content,
    .navbar.dropdown-menu .dropdown:hover .dropdown-content-right,
    .navbar.dropdown-menu .dropdown-right:hover .dropdown-content-right {
        opacity: 1;
        visibility: visible;
    }
    .navbar.dropdown-menu .dropdown2,
    .navbar.dropdown-menu .dropdown-right2 {
        position: relative;
        display: block;
    }
    .navbar.dropdown-menu .dropdown2:hover,
    .navbar.dropdown-menu .dropdown-right2:hover {
        pointer-events: auto;
    }
    .navbar.dropdown-menu .dropdown2:hover .dropdown-content2,
    .navbar.dropdown-menu .dropdown-right2:hover .dropdown-content2,
    .navbar.dropdown-menu .dropdown2:hover .dropdown-content-right2,
    .navbar.dropdown-menu .dropdown-right2:hover .dropdown-content-right2 {
        opacity: 1;
        visibility: visible;
    }
    .navbar.dropdown-menu .dropdown-content,
    .navbar.dropdown-menu .dropdown-content-right {
        pointer-events: auto;
        position: absolute;
        margin-top: 20px;
        z-index: 1;
        opacity: 0;
        visibility: hidden;
        background: #2af;
        padding: 0;
        min-width: 100%;
    }
    .navbar.dropdown-menu .dropdown-content li a,
    .navbar.dropdown-menu .dropdown-content-right li a {
        color: #f5f5f5;
    }
    .navbar.dropdown-menu .dropdown-content:before,
    .navbar.dropdown-menu .dropdown-content-right:before {
        top: -10px;
        margin: 0 auto;
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        border-bottom: 10px solid #2af;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
    }
    .navbar.dropdown-menu .dropdown-content {
        left: 0px;
    }
    .navbar.dropdown-menu .dropdown-content-right {
        right: 0;
    }
    .navbar.dropdown-menu .dropdown-content2,
    .navbar.dropdown-menu .dropdown-content-right2 {
        pointer-events: auto;
        position: absolute;
        z-index: 1;
        opacity: 0;
        visibility: hidden;
        background: #2af;
        padding: 0;
        width: 100%;
    }
    .navbar.dropdown-menu .dropdown-content2 {
        margin-top: -58px;
        margin-left: 100%;
    }
    .navbar.dropdown-menu .dropdown-content-right2 {
        margin-top: -58px;
        margin-left: -100%;
    }
    ul.dropdown-content,
    ul.dropdown-content2,
    ul.dropdown-content-right,
    ul.dropdown-content-right2 {
        padding: 0;
    }
    ul.dropdown-content li,
    ul.dropdown-content2 li,
    ul.dropdown-content-right li,
    ul.dropdown-content-right2 li {
        list-style-type: none;
        white-space: nowrap;
        padding: 0;
        margin: 0;
    }
    ul.dropdown-content li a,
    ul.dropdown-content2 li a,
    ul.dropdown-content-right li a,
    ul.dropdown-content-right2 li a {
        text-align: left;
        padding: 20px 25px;
        min-width: 100%;
        display: block;
    }
    ul.dropdown-content li a:hover,
    ul.dropdown-content2 li a:hover,
    ul.dropdown-content-right li a:hover,
    ul.dropdown-content-right2 li a:hover,
    ul.dropdown-content li a:active,
    ul.dropdown-content2 li a:active,
    ul.dropdown-content-right li a:active,
    ul.dropdown-content-right2 li a:active,
    ul.dropdown-content li a:focus,
    ul.dropdown-content2 li a:focus,
    ul.dropdown-content-right li a:focus,
    ul.dropdown-content-right2 li a:focus {
        background: #2af;
        background: rgba(0,0,0,0.5);
    }
    @media all and (max-width: 768px) {
        .dropdown-content {
            min-width: 100%;
        }
        .dropdown-content li a {
            right: -30vw;
            min-width: 100vw;
        }
        .dropdown-content2 {
            min-width: 100vw;
        }
    }
    .my-logo{
        max-width: 100px;
        max-height: 70px;
        padding: 0 !important;
    }

</style>