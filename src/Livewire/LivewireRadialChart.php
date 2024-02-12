<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\RadialChartModel;

/**
 * Class LivewireRadialChart
 * @package TWS\Charts\Livewire
 */
class LivewireRadialChart extends Component
{
    public $radialCharts;

    public function mount(RadialChartModel $radialCharts)
    {
        $this->radialCharts = $radialCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-radial-chart');
    }
}
