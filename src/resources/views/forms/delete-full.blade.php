<form action="{{ route('laravelblocker::blocker.destroy', $item->id) }}" method="POST" accept-charset="UTF-8" data-toggle="tooltip" title="{{ trans('laravelblocker::laravelblocker.tooltips.delete') }}">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger btn-block edit-form-delete" type="button" style="width: 100%;" data-toggle="modal" data-target="#confirmDelete" data-title="{{ trans('laravelblocker::laravelblocker.modals.delete_blocked_title') }}" data-message="{{ trans('laravelblocker::laravelblocker.modals.delete_blocked_message', ['blocked' => $item->value]) }}">
        {{ trans('laravelblocker::laravelblocker.buttons.delete-larger') }}
    </button>
</form>
