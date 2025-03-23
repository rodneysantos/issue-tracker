<?php

namespace Illuminate\Contracts\View;

use Illuminate\Contracts\Support\Renderable;

/**
 * This interface is needed to make the IDE support for the `view()` helper
 * that sets the title of the view.
 * 
 * @see https://github.com/bmewburn/vscode-intelephense/issues/2079#issuecomment-1001264934
 */
interface View extends Renderable
{
    public function title(string $value): static;
}
