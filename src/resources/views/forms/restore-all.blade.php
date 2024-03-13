<form action="{{ route('laravelblocker::blocker-deleted-restore-all') }}" method="POST" accept-charset="UTF-8">
    @csrf
    <button type="button" class="btn dropdown-item" data-toggle="modal" data-target="#confirmRestore" data-title="{{ trans('laravelblocker::laravelblocker.modals.resotreAllBlockedTitle') }}" data-message="{{ trans('laravelblocker::laravelblocker.modals.resotreAllBlockedMessage') }}">
        <i class="fa fa-fw fa-history" aria-hidden="true"></i> {{ trans_choice('laravelblocker::laravelblocker.buttons.restore-all-blocked', 1, ['count' => $blocked->count()]) }}
    </button>
</form>
