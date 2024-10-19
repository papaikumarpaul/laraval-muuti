<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
                {{ __('ADD Tenant') }}
                <a type="button" class="btn btn-primary float-right" href="{{url('/Tenant')}}">Back</a>
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form class="p-6 pb-3 text-gray-900"  action='{{route('Tenant.store')}}' method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" name="name" placeholder="name" autocomplete="current-password" >
                            <label for="floatingName">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatiDomain" name="domain" autocomplete="domain" placeholder="domain" >
                            <label for="floatiDomain">Domain Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com" autocomplete="email">
                            <label for="floatingEmail">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="password"autocomplete="current-password" placeholder="Password" >
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mt-3 pb-3 float-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
