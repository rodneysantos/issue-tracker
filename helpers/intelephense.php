<?php

namespace Illuminate\Contracts\View;

use Illuminate\Contracts\Support\Renderable;

/**
 * This interface is needed to make the IDE support for the `view()` helper
 * that sets the title of the view.
 *
 * @extends Renderable
 */
interface View extends Renderable
{
    public function title(string $value): static;
}
