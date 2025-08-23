<?php

declare(strict_types=1);

namespace Saade\FilamentFullCalendar\Widgets\Concerns;

use Illuminate\Database\Eloquent\Model;

trait InteractsWithRecords
{
    protected ?Model $record = null;

    protected ?string $model = null;

    public function getRecord(): ?Model
    {
        return $this->record;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    protected function resolveRecord(int|string $id): ?Model
    {
        if (! $this->getModel()) {
            return null;
        }

        return app($this->getModel())->find($id);
    }

    protected function setRecord(?Model $record): void
    {
        $this->record = $record;
    }

    protected function setModel(string $model): void
    {
        $this->model = $model;
    }
}
