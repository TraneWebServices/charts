<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\PolarAreaChartModel;

/**
 * Class LivewirePolarAreaChart
 * @package T\Charts\Livewire
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
