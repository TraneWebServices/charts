<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\RadarChartModel;

/**
 * Class LivewireRadarChart
 * @package T\Charts\Livewire
 */
class LivewireRadarChart extends Component
{
    public $radarCharts;

    public function mount(RadarChartModel $radarCharts)
    {
        $this->radarCharts = $radarCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-radar-chart');
    }
}
