@extends('client.layouts.master')

@section('meta_title')
    Đăng ký
@endsection

@section('content')
<style>
    .footer-area {
        display: none !important;
    }

    
</style>

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Họ và tên -->
        <div>
            <x-input-label for="name" :value="__('Họ và tên')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Địa chỉ Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Địa chỉ Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Mật khẩu -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mật khẩu')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Xác nhận Mật khẩu -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Xác nhận Mật khẩu')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Đã có tài khoản?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Đăng ký') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@endsection


