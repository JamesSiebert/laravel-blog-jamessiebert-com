@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Interested in innovative technologies?
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-blue-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded-3xl">
                    Read More
                </a>

            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/blog-promo.jpg') }}" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Looking for some interesting projects?
            </h2>

            <p class="py-8 text-gray-500 text-sm">
                Take a peek at my portfolio! This is a collection of projects completed
                over the past 6 years and covers a broad range of areas and skills.
                These projects consist of both paid jobs, proof of concepts and hobbies. Enjoy!
            </p>

            <p class="font-extrabold text-gray-600 text-sm pb-9">
                Web Apps, Virtual Reality, Unreal Engine, Unity, Raspberry Pi, NFC, Virtual Tours, 360 Video, Google Street View, Green Screens, Projection Mapping, Arch Viz and MORE!
            </p>

            <a
                href="https://jamessiebert.com/projects"
                target="_blank"
                class="uppercase bg-blue-500 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl">
                View My Projects
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-blue-900 text-white">
        <h2 class="text-2xl pb-5 text-lg">
            Im interested in...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Web Application Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Serverless Technologies
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Game Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Virtual Reality
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Cutting Edge Technologies
        </span>
    </div>

    <div class="text-center py-15">

        <h2 class="text-4xl font-bold py-10">
            Featured Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            A collection of the most informative and useful posts.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-purple-900 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Laravel, Socialite, AWS Cognito, Tutorial
                </span>

                <h2 class="text-xl pt-10">How to create a Laravel AWS SSO application</h2>
                <h3 class="text-md font-light pt-5 pb-10">
                    This is a Laravel based tutorial which will walk you through
                    the implementation of the Socialite package in addition to
                    the AWS Cognito socialite provider.<br /><br />

                    This can be used to create multiple apps that all use a single
                    AWS Cognito user account. This is great for a chain of related
                    businesses who share a single user pool. By using this authentication
                    method if a user logs into app A then switches to app B their logged
                    in status will carry between the apps. If the user logs out of one
                    app they are globally logged out of all apps.
                </h3>

                <a
                    href="/blog"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/11/27/21/31/computer-2982270_960_720.jpg" width="700" alt="">
        </div>
    </div>
@endsection
