<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\BarChartModel;

/**
 * Class LivewireBarChart
 * @package T\Charts\Livewire
 */
class LivewireBarChart extends Component
{
    public $barCharts;

    public function mount(BarChartModel $barCharts)
    {
        $this->barCharts = $barCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-bar-chart');
    }
}
