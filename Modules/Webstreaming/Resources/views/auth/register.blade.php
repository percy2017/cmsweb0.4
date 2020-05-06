<div class="md-form">
    <input type="tel" id="phome" class="form-control @error('phome') is-invalid @enderror" name="phone" required>
    <label for="password">Número de celular</label>
    @error('phome')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="pb-4">
    <label for="">Plan</label>
    <select name="plan_id" class="browser-default custom-select" required>
        <option value="" disabled>Elige tu plan</option>
        @foreach (Modules\Webstreaming\Entities\Plan::all() as $item)
        <option @if(session('plan_id')==$item->id) selected @endif value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>
@php
    session()->forget('plan_id');
@endphp