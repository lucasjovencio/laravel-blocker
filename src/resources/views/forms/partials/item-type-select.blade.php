<div class="form-group has-feedback row">
    <label for="typeId" class="col-md-3 control-label">{{ trans('laravelblocker::laravelblocker.forms.blockedTypeLabel') }}</label>
    <div class="col-md-9">
        <div class="input-group">
            <select class="{{ $errors->has('typeId') ? 'custom-select form-control is-invalid' : 'custom-select form-control' }}" name="typeId" id="typeId">
                <option value="">{{ trans('laravelblocker::laravelblocker.forms.blockedTypeSelect') }}</option>
                @if($blockedTypes)
                    @foreach($blockedTypes as $blockedType)
                        <option value="{{ $blockedType->id }}" data-type="{{ $blockedType->slug }}" @isset($item) @if($item->typeId == $blockedType->id) selected @endif @endisset>
                            {{ $blockedType->name }}
                        </option>
                    @endforeach
                @endif
            </select>
            <div class="input-group-append">
                <label class="input-group-text" for="typeId">
                    <i class="fa fas fa-fw fa-shield" aria-hidden="true"></i>
                </label>
            </div>
        </div>
        @if ($errors->has('typeId'))
            <span class="help-block">
                <strong>{{ $errors->first('typeId') }}</strong>
            </span>
        @endif
    </div>
</div>
