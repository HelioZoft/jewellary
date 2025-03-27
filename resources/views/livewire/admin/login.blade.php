<div>
    <h2>Admin Login</h2>
    @if (session()->has('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
    <form wire:submit.prevent="login">
        <input type="email" wire:model="email" placeholder="Email">
        <input type="password" wire:model="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</div>
