@extends('template')

@section('logo')
    <img src="/img/logo.png" alt="logo"/>
@stop
@section('content')
    <form name="currency" method="post">
        <div class="relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 412 232">
                <path
                    d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                    fill="#648299" fill-rule="nonzero"/>
            </svg>
            <select name="currency" id="currency"
                    class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                @foreach ($currencies as $currency)
                    <option class=" mx-2 leading-6" value="{{ $currency->name }}">{{ $currency->name }}
                        Rate: {{$currency->rate / 10000}}</option>
                @endforeach
            </select>
        </div>
        <label for="amount"></label>
        <input type="number" min="1" id="amount" name="amount"
               class="border border-gray-300 rounded-full text-gray-600 pl-5 pr-10 h-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
               required>
        <button
            class="border-2 border-transparent bg-blue-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500"
            type="submit">Convert
        </button>
    </form>
    @if (empty($_POST['amount']) && empty($_POST['currency']))

    @else
        {{$_POST['currency']}} {{ $convert / 10000}}
    @endif

@stop

