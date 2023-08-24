@extends('frontend')

@section('content')
    <div class="container px-6 mx-auto">
        @if ($message = Session::get('success'))
            <div class="p-4 mb-3 bg-green-400 rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif
        <h3 class="text-2xl text-center font-medium text-gray-700 mb-6">Contact Us</h3>
        <div class="flex justify-center">
            <div class="p-4 bg-white w-2/4 border-2 rounded-lg">
                <form action="#" class="mb-6">
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" id="email"
                            class="bg-gray-50 focus:outline-none focus:bg-white focus:border-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="name@company.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="subject"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                        <input type="text" id="subject"
                            class=" focus:outline-none focus:bg-white focus:border-gray-500 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Let us know how we can help you" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            message</label>
                        <textarea id="message" rows="4"
                            class="focus:outline-none focus:bg-white focus:border-gray-500 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Your message..."></textarea>
                    </div>
                    <button type="submit"
                        class="mt-2 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-blue-100 text-md px-4 py-2">Send
                        message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
