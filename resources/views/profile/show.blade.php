<x-app-layout>

	
    <div class=" max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div >
                @livewire('profile.update-profile-information-form')
            </div>

            <x-section-border /> 
        

            <div >
                @livewire('profile.update-password-form')
            </div>

    </div>
    
</x-app-layout>