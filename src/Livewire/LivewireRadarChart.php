<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\RadarChartModel;

/**
 * Class LivewireRadarChart
 * @package TWS\Charts\Livewire
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
