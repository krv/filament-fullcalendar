<?php

declare(strict_types=1);

namespace Saade\FilamentFullCalendar\Widgets\Concerns;

trait InteractsWithRawJS
{
    /**
     * A ClassName Input for adding classNames to the outermost event element.
     * If supplied as a callback function, it is called every time the associated event data changes.
     *
     * @see https://fullcalendar.io/docs/event-render-hooks
     *
     * @return string
     */
    public function eventClassNames(): ?string
    {
        return null;
    }

    /**
     * A Content Injection Input. Generated content is inserted inside the inner-most wrapper of the event element.
     * If supplied as a callback function, it is called every time the associated event data changes.
     *
     * @see https://fullcalendar.io/docs/event-render-hooks
     *
     * @return string
     */
    public function eventContent(): ?string
    {
        return null;
    }

    /**
     * Called right after the element has been added to the DOM. If the event data changes, this is NOT called again.
     *
     * @see https://fullcalendar.io/docs/event-render-hooks
     *
     * @return string
     */
    public function eventDidMount(): ?string
    {
        return null;
    }

    /**
     * Called right before the element will be removed from the DOM.
     *
     * @see https://fullcalendar.io/docs/event-render-hooks
     *
     * @return string
     */
    public function eventWillUnmount(): ?string
    {
        return null;
    }

    public function resourceLabelContent(): ?string
    {
        return null;
    }
}
