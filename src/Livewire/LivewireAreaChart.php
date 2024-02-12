<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\AreaChartModel;

/**
 * Class LivewireAreaChart
 * @package TWS\Charts\Livewire
 */
class LivewireAreaChart extends Component
{
    public $areaCharts;

    public function mount(AreaChartModel $areaCharts)
    {
        $this->areaCharts = $areaCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-area-chart');
    }
}
