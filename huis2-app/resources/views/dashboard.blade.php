<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="p-6 bg-white border-b border-gray-200">
                       <nav>
                       <ul class="list--links flex gap-10 text-[#9595ee] ">
                        <li><a class="p-2 hover:text-blue-600 text-ellipsis hover:bg-[rgb(204,214,255)]" href="/woningType/create">Maak heer type woning</a></li>
                        <li><a class="p-2 hover:text-blue-600 text-ellipsis hover:bg-[rgb(204,214,255)]" href="/product/create">Aanmaak woning</a></li>
                        <li><a class="p-2 hover:text-blue-600 text-ellipsis hover:bg-[rgb(204,214,255)]" href="/woningType/">bekijk all woningen Types</a></li>
                        <li><a class="p-2 hover:text-blue-600 text-ellipsis hover:bg-[rgb(204,214,255)]" href="/product/">bekijk all woningen</a></li>
                    </ul>
                       </nav>
                    </div>
                </div>

              
            </div>
        </div>
    </div>
</x-app-layout>
