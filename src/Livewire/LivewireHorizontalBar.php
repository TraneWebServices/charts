<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\HorizontalBarModel;

/**
 * Class LivewireHorizontalBar
 * @package T\Charts\Livewire
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
