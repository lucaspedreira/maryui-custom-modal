<div>
    <x-meu-modal wire:model="myModal3" class="backdrop-blur" reset-form>
        <div class="flex flex-col gap-4">

            <x-input label="Name" wire:model="title" placeholder="Your name" icon="o-user" hint="Your full name"/>

            <x-slot:actions>
                <x-button label="Cancel" @click="$wire.close()"/>
                <x-button label="Confirm" @click="$wire.save()"/>
            </x-slot:actions>
        </div>
    </x-meu-modal>

    <x-button label="Open Modal" @click="$wire.myModal3 = true"/>
</div>
