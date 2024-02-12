<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\HeatMapChartModel;

/**
 * Class LivewireHeatMapChart
 * @package TWS\Charts\Livewire
 */
class LivewireHeatMapChart extends Component
{
    public $heatMapCharts;

    public function mount(HeatMapChartModel $heatMapCharts)
    {
        $this->heatMapCharts = $heatMapCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-heatmap-chart');
    }
}
