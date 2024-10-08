<form action="{{ route('laravelblocker::blocker-item-destroy', $item->id) }}" method="POST" accept-charset="UTF-8" data-toggle="tooltip" title="{{ trans('laravelblocker::laravelblocker.tooltips.destroy_blocked_tooltip') }}">
    <input type="hidden" name="_method" value="DELETE">
    @csrf
    <button class="btn btn-danger btn-block edit-form-destroy" type="button" style="width: 100%;" data-toggle="modal" data-target="#confirmDelete" data-title="{{ trans('laravelblocker::laravelblocker.modals.destroy_blocked_title') }}" data-message="{{ trans('laravelblocker::laravelblocker.modals.destroy_blocked_message', ['blocked' => $item->value]) }}">
        {{ trans('laravelblocker::laravelblocker.buttons.destroy-larger') }}
    </button>
</form>
