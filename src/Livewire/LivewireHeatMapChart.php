<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\HeatMapChartModel;

/**
 * Class LivewireHeatMapChart
 * @package T\Charts\Livewire
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
