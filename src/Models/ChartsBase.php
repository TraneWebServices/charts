<?php

namespace TWS\Charts\Models;

use Illuminate\Support\Str;
use TWS\Charts\Models\Traits\ChartContainer;
use TWS\Charts\Models\Traits\HasGrid;
use TWS\Charts\Models\Traits\HasType;
use TWS\Charts\Models\Traits\HasZoom;
use TWS\Charts\Models\Traits\HasTitle;
use TWS\Charts\Models\Traits\HasWidth;
use TWS\Charts\Models\Traits\HasXAxis;
use TWS\Charts\Models\Traits\HasColors;
use TWS\Charts\Models\Traits\HasHeight;
use TWS\Charts\Models\Traits\HasLabels;
use TWS\Charts\Models\Traits\HasStroke;
use TWS\Charts\Models\Traits\HasDataSet;
use TWS\Charts\Models\Traits\HasMarkers;
use TWS\Charts\Models\Traits\HasStacked;
use TWS\Charts\Models\Traits\HasToolBar;
use TWS\Charts\Models\Traits\HasSubTitle;
use TWS\Charts\Models\Traits\HasForeColor;
use TWS\Charts\Models\Traits\HasSparkLine;
use TWS\Charts\Models\Traits\HasDataLabels;
use TWS\Charts\Models\Traits\HasDistributed;
use TWS\Charts\Models\Traits\HasFontFamily;
use TWS\Charts\Models\Traits\HasHorizontal;
use TWS\Charts\Models\Traits\HasJsonConfig;
use TWS\Charts\Models\Traits\HasLegend;
use TWS\Charts\Models\Traits\HasTheme;
use TWS\Charts\Models\Traits\HasYAxis;

/**
 * Class ChartsBase
 * @package TWS\Charts\Models
 */
class ChartsBase
{
    use HasType;
    use HasTitle;
    use HasTheme;
    use HasSubTitle;
    use HasLabels;
    use HasDataLabels;
    use HasFontFamily;
    use HasForeColor;
    use HasDataSet;
    use HasHeight;
    use HasWidth;
    use HasColors;
    use HasHorizontal;
    use HasDistributed;
    use HasXAxis;
    use HasGrid;
    use HasMarkers;
    use HasStacked;
    use HasStroke;
    use HasToolBar;
    use HasZoom;
    use HasSparkLine;
    use HasJsonConfig;
    use ChartContainer;
    use HasLegend;
    use HasYAxis;

    public $key;

    public function __construct()
    {
        $this->key = $this->reactiveKey();
        $this->initHorizontal();
        $this->initDistributed();
        $this->initColors();
        $this->initXAxis();
        $this->initYAxis();
        $this->initGrid();
        $this->initLegend();
        $this->initMarkers();
        $this->initToolBar();
        $this->initZoom();
        $this->initDataLabels();
        $this->initSparkLine();
        $this->initFontFamily();
        $this->initForeColor();
        $this->initJsonConfig();
    }

    public function reactiveKey()
    {
        return md5(json_encode(Str::random(32)));
    }

    public function toLivewire() :array
    {
        $options = [
            'chart' => [
                'id' => $this->reactiveKey(),
                'type' => $this->type(),
                'height' => $this->height(),
                'toolbar' => json_decode($this->toolbar()),
                'zoom' => json_decode($this->zoom()),
                'fontFamily' => json_decode($this->fontFamily()),
                'foreColor' => $this->foreColor(),
                'sparkline' => json_decode($this->sparkline()),
                'stacked' => $this->stacked(),
            ],
            'plotOptions' => [
                'bar' => [
                    'horizontal' => json_decode($this->horizontal()),
                    'distributed' => json_decode($this->distributed()),
                ],
            ],
            'colors' => json_decode($this->colors()),
            'series' => json_decode($this->dataset()),
            'dataLabels' => json_decode($this->dataLabels()),
            'theme' => [
                'mode' => $this->theme(),
            ],
            'title' => [
                'text' => $this->title(),
            ],
            'subtitle' => [
                'text' => $this->subtitle() ? $this->subtitle() : '',
                'align' => $this->subtitlePosition() ? $this->subtitlePosition() : '',
            ],
            'xaxis' => [
                'categories' => json_decode($this->xAxis()),
            ],
            'yaxis' => [
                'labels' => [
                    'show' => json_decode($this->yAxis()),
                ]
              ],
            'grid' => json_decode($this->grid()),
            'markers' => json_decode($this->markers()),
            'legend' => json_decode($this->legend()),
        ];

        if($this->labels()) {
            $options['labels'] = $this->labels();
        }

        if($this->stroke()) {
            $options['stroke'] = json_decode($this->stroke());
        }

        return [
            'height' => $this->height(),
            'width' => $this->width(),
            'type' => $this->type(),
            'options' => $options,
            'series' => json_decode($this->dataset()),
            'key' => $this->reactiveKey(),
            'id' => $this->reactiveKey()
        ];
    }
}
