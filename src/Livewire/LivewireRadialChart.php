<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\RadialChartModel;

/**
 * Class LivewireRadialChart
 * @package T\Charts\Livewire
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
