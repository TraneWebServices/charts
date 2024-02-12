<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\PolarAreaChartModel;

/**
 * Class LivewirePolarAreaChart
 * @package TWS\Charts\Livewire
 */
class LivewirePolarAreaChart extends Component
{
    public $polarAreaCharts;

    public function mount(PolarAreaChartModel $polarAreaCharts)
    {
        $this->polarAreaCharts = $polarAreaCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-polararea-chart');
    }
}
