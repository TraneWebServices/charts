<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\BarChartModel;

/**
 * Class LivewireBarChart
 * @package TWS\Charts\Livewire
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
