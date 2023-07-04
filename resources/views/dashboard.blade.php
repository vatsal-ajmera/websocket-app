<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" id="user-status">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="{{ Vite::asset('resources/js/app.js') }}"></script>
<script>
    Echo.join('presence-channel-message')
    .here(($users) => {
        console.log($users);
    })
    .joining(($user) => {
        console.log($user.name+ ' Joined the Conversion.');
        document.getElementById('user-status').innerHTML = document.getElementById('user-status').innerHTML +' <br> '+ $user.name+ ' Joined the Conversion.';
    })
    .leaving(($user) => {
        console.log($user.name+ ' Left the Conversion.');
        document.getElementById('user-status').innerHTML = document.getElementById('user-status').innerHTML +' <br> '+ $user.name+ ' Left the Conversion.'  ;
    })
    .listen('PresenceMessageEvent', (e) => {
        console.log(e)
        document.getElementById('user-status').innerHTML = e.new_message;
    });
</script>
