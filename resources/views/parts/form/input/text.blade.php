@foreach (array_unique($fields) as $field)
<div class="col-md-{{ isset($col) ? $col: '12' }} mb-3">
    <label class="form-label">{{ Str::title(Str::replace('_', ' ', Str::of($field)->explode('#')[0])) }}</label>
    <input value="{{ isset($values[$loop->index]) ? $values[$loop->index]: '' }}" class="form-control
    @if (isset($validation) && $validation)
        @error(Str::of($field)->explode('#')[0]) is-invalid @enderror
    @endif
    " type="{{ isset(Str::of($field)->explode('#')[1]) ? Str::of($field)->explode('#')[1]:'text' }}" name="{{ Str::of($field)->explode('#')[0] }}" placeholder="Enter {{ Str::title(Str::replace('_', ' ', Str::of($field)->explode('#')[0])) }}">
    @if (isset($validation))
        @if ($validation)
            @error(Str::of($field)->explode('#')[0])
                <span class="text-danger">{{ $message }}</span>
            @enderror
        @endif
    @endif
</div>
@endforeach
