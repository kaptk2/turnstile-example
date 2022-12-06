<div>
    <x-cloudflare-turnstile::render wire:model="captcha" />

    @json($captcha)
</div>
