@extends('layouts.app')

@section('content')
<div class="mx-auto w-4/5">
    <h1 class="text-5xl text-gray-800 font-bold pt-12 mb-8">
        Shopping Cart
    </h1>

    <hr class="border-1 border-gray-300">
</div>

<div class="flex flex-col mx-auto w-4/5">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                @if(Session::has('cartItems') && !empty(Session::get('cartItems')))
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th 
                            scope="col" 
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>

                        <th 
                            scope="col" 
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Details
                        </th>

                        <th 
                            scope="col" 
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Price
                        </th>

                        <th 
                            scope="col" 
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Quantity
                        </th>
                        
                        <th 
                            scope="col" 
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Total
                        </th>
                        
                        <th 
                            scope="col" 
                            class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Delete
                        </th>
                    </tr>
                </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach(Session::get('cartItems') as $key=>$val)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img 
                                            class="h-10 w-10 rounded-full" 
                                            src="{{$val['image_path']}}" 
                                            alt="">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                           {{$val['name']}}
                                        </div>

                                        <div class="text-sm font-medium text-gray-400">
                                            Apple
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-wrap" style="width:30% !important; word-wrap: word-wrap: normal;">
                                <div class="text-sm text-gray-900">  {{$val['details']}}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span 
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    $ {{number_format($val['price'], 2)}}
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <select name="quantity" id="quantity">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                               <div class="text-sm text-gray-900"> $ {{ number_format($val['price'] * $val['quantity'], 2) }}</div>
                            </td>

                            <td class="px-6 whitespace-nowrap text-right text-sm font-medium">
                                <a href={{route('dltfromcart', $key)}} role="button" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <h4>Your Cart is Empty</h4>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection