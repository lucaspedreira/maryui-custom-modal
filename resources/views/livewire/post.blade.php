<div>
    <x-meu-modal wire:model="myModal3" class="backdrop-blur" reset-form>
        <div @click.stop class="flex flex-col gap-4">

            <x-input label="Name" wire:model="title" placeholder="Your name" icon="o-user" hint="Your full name"/>
            <x-input label="Right icon" wire:model="address" icon-right="o-map-pin"/>
            <x-input label="Password" wire:model="password" icon="o-eye" type="password"/>
            <x-input label="Name" wire:model="name" placeholder="Clearable field" clearable/>

            <x-slot:actions>
                <x-button label="Cancel" @click="$wire.close()"/>
                <x-button label="Confirm" @click="$wire.save()"/>
            </x-slot:actions>
        </div>
    </x-meu-modal>

    <x-button label="Open" @click="$wire.myModal3 = true"/>
</div>
