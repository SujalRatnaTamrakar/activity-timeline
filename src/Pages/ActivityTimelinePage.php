<?php

namespace JaOcero\ActivityTimeline\Pages;

use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use JaOcero\ActivityTimeline\Concerns\HasSetting;
use Livewire\WithPagination;

class ActivityTimelinePage extends Page
{
    use HasSetting, InteractsWithRecord, WithPagination;

    protected static string $view = 'activity-timeline::pages.view-activities';

    public function mount(int|string $record): void
    {
        static::authorizeResourceAccess();

        $this->record = $this->resolveRecord($record);
    }
}
