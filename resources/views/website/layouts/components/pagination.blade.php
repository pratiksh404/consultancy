@if ($paginator->hasPages())
    <div class="pagination_wrap pt-20">
        <ul>
            @if (!$paginator->onFirstPage())
                <li><button type="button" style="cursor:pointer" wire:click="previousPage"><i
                            class="far fa-long-arrow-left"></i></button>
                </li>
            @else
                <li><button type="button" style="cursor:pointer" disabled><i class="far fa-long-arrow-left"></i></button>
                </li>
            @endif
            @if ($paginator->currentPage() > 2)
                <li><button type="button" disabled><i class="fal fa-ellipsis-h"></i></button></li>
            @endif
            @if ($paginator->currentPage() - 1 > 0)
                <li> <button type="button" style="cursor:pointer"
                        wire:click="gotoPage({{ $paginator->currentPage() - 1 }})"
                        class="{{ $paginator->currentPage() == $paginator->currentPage() - 1 ? 'current_page' : '' }}">{{ $paginator->currentPage() - 1 }}</button>
                </li>
            @endif
            <li> <button type="button" style="cursor:pointer" wire:click="gotoPage({{ $paginator->currentPage() }})"
                    class="{{ $paginator->currentPage() == $paginator->currentPage() ? 'current_page' : '' }}">{{ $paginator->currentPage() }}</button>
            </li>
            @if ($paginator->currentPage() + 1 <= $paginator->lastPage())
                <li> <button type="button" style="cursor:pointer"
                        wire:click="gotoPage({{ $paginator->currentPage() + 1 }})"
                        class="{{ $paginator->currentPage() == $paginator->currentPage() + 1 ? 'current_page' : '' }}">{{ $paginator->currentPage() + 1 }}</button>
                </li>
            @endif
            @if ($paginator->currentPage() + 2 <= $paginator->lastPage())
                <li><button type="button" disabled><i class="fal fa-ellipsis-h"></i></button></li>
            @endif
            @if ($paginator->hasMorePages())
                <li><button type="button" style="cursor:pointer" wire:click="nextPage"><i
                            class="far fa-long-arrow-right"></i></button></li>
            @else
                <li><button type="button" style="cursor:pointer" disabled><i
                            class="far fa-long-arrow-right"></i></button></li>
            @endif
        </ul>
    </div>
@endif
