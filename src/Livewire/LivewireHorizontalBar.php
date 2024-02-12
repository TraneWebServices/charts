<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\HorizontalBarModel;

/**
 * Class LivewireHorizontalBar
 * @package TWS\Charts\Livewire
 */
class LivewireHorizontalBar extends Component
{
    public $horizontalBarCharts;

    public function mount(HorizontalBarModel $horizontalBarCharts)
    {
        $this->horizontalBarCharts = $horizontalBarCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-horizontal-bar');
    }
}
