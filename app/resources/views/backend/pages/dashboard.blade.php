@extends('backend.layout.template')
@section('body')

<script type="text/javascript">
    jQuery(document).ready(function($)
    {
        // Sample Toastr Notification
        setTimeout(function()
        {
            var opts = {
                "closeButton": true,
                "debug": false,
                "positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
                "toastClass": "black",
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
        }, 3000);

        // Sparkline Charts
        $(".top-apps").sparkline('html', {
            type: 'line',
            width: '50px',
            height: '15px',
            lineColor: '#ff4e50',
            fillColor: '',
            lineWidth: 2,
            spotColor: '#a9282a',
            minSpotColor: '#a9282a',
            maxSpotColor: '#a9282a',
            highlightSpotColor: '#a9282a',
            highlightLineColor: '#f4c3c4',
            spotRadius: 2,
            drawNormalOnTop: true
         });

        $(".monthly-sales").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7,5,4,5,6,7,8,6,7,6,3,2], {
            type: 'bar',
            barColor: '#ff4e50',
            height: '55px',
            width: '100%',
            barWidth: 8,
            barSpacing: 1
        });

        $(".pie-chart").sparkline([2.5,3,2], {
            type: 'pie',
            width: '95',
            height: '95',
            sliceColors: ['#ff4e50','#db3739','#a9282a']
        });


        $(".daily-visitors").sparkline([1,5,5.5,5.4,5.8,6,8,9,13,12,10,11.5,9,8,5,8,9], {
            type: 'line',
            width: '100%',
            height: '55',
            lineColor: '#ff4e50',
            fillColor: '#ffd2d3',
            lineWidth: 2,
            spotColor: '#a9282a',
            minSpotColor: '#a9282a',
            maxSpotColor: '#a9282a',
            highlightSpotColor: '#a9282a',
            highlightLineColor: '#f4c3c4',
            spotRadius: 2,
            drawNormalOnTop: true
         });


        $(".stock-market").sparkline([1,5,6,7,10,12,16,11,9,8.9,8.7,7,8,7,6,5.6,5,7,5], {
            type: 'line',
            width: '100%',
            height: '55',
            lineColor: '#ff4e50',
            fillColor: '',
            lineWidth: 2,
            spotColor: '#a9282a',
            minSpotColor: '#a9282a',
            maxSpotColor: '#a9282a',
            highlightSpotColor: '#a9282a',
            highlightLineColor: '#f4c3c4',
            spotRadius: 2,
            drawNormalOnTop: true
         });


         $("#calendar").fullCalendar({
            header: {
                left: '',
                right: '',
            },

            firstDay: 1,
            height: 200,
        });
    });


    function getRandomInt(min, max)
    {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    </script>


    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="tile-stats tile-white stat-tile">
                <h3>15% more</h3>
                <p>Monthly visitor statistics</p>
                <span class="daily-visitors"></span>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="tile-stats tile-white stat-tile">
                <h3>32 Sales</h3>
                <p>Avg. Sales per day</p>
                <span class="monthly-sales"></span>
            </div>
        </div>


        <div class="col-md-3 col-sm-6">
            <div class="tile-stats tile-white stat-tile">
                <h3>-0.0102</h3>
                <p>Stock Market</p>
                <span class="stock-market"></span>
            </div>
        </div>


        <div class="col-md-3 col-sm-6">
            <div class="tile-stats tile-white stat-tile">
                <h3>61.5%</h3>
                <p>US Dollar Share</p>
                <span class="pie-chart"></span>
            </div>
        </div>
    </div>

    <br />

    <div class="row">
        <div class="col-md-9">

            <script type="text/javascript">
                jQuery(document).ready(function($)
                {
                    var map = $("#map-2");

                    map.vectorMap({
                        map: 'europe_merc_en',
                        zoomMin: '3',
                        backgroundColor: '#f4f4f4',
                        focusOn: { x: 0.5, y: 0.7, scale: 3 },
                        markers: [
                          {latLng: [50.942, 6.972], name: 'Cologne'},
                          {latLng: [42.6683, 21.164], name: 'Prishtina'},
                          {latLng: [41.3861, 2.173], name: 'Barcelona'},
                        ],
                        markerStyle: {
                          initial: {
                            fill: '#ff4e50',
                            stroke: '#ff4e50',
                            "stroke-width": 6,
                            "stroke-opacity": 0.3,
                              }
                        },
                        regionStyle:
                            {
                              initial: {
                                fill: '#e9e9e9',
                                "fill-opacity": 1,
                                stroke: 'none',
                                "stroke-width": 0,
                                "stroke-opacity": 1
                              },
                              hover: {
                                "fill-opacity": 0.8
                              },
                              selected: {
                                fill: 'yellow'
                              },
                              selectedHover: {
                              }
                            }
                    });
                });
            </script>

            <div class="tile-group tile-group-2">
                <div class="tile-left tile-white">
                    <div class="tile-entry">
                        <h3>Visitor Map</h3>
                        <span>Where do our visitors come from</span>
                    </div>
                    <ul class="country-list">
                        <li><span class="badge badge-secondary">3</span>  Cologne, Germany</li>
                        <li><span class="badge badge-secondary">2</span>  Pristina, Kosovo</li>
                        <li><span class="badge badge-secondary">1</span>  Barcelona, Spain</li>
                    </ul>
                </div>

                <div class="tile-right">

                    <div id="map-2" class="map"></div>

                </div>

            </div>

        </div>



        <div class="col-md-3">
            <div class="tile-stats tile-neon-red">
                <div class="icon"><i class="entypo-chat"></i></div>
                <div class="num" data-start="0" data-end="124" data-postfix="" data-duration="1400" data-delay="0">0</div>

                <h3>Comments</h3>
                <p>New comments today</p>
            </div>

            <br />

            <div class="tile-stats tile-primary">
                <div class="icon"><i class="entypo-users"></i></div>
                <div class="num" data-start="0" data-end="213" data-postfix="" data-duration="1400" data-delay="0">0</div>

                <h3>New Followers</h3>
                <p>Statistics this week</p>
            </div>


        </div>
    </div>

    <br />

    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-primary panel-table">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Top Grossing</h3>
                        <span>Weekly statistics from AppStore</span>
                    </div>

                    <div class="panel-options">
                        <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive no-margin">
                        <thead>
                            <tr>
                                <th>App Name</th>
                                <th>Download</th>
                                <th class="text-center">Graph</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Flappy Bird</td>
                                <td>2,215,215</td>
                                <td class="text-center"><span class="top-apps">4,3,5,4,5,6,3,2,5,3</span></td>
                            </tr>

                            <tr>
                                <td>Angry Birds</td>
                                <td>1,001,001</td>
                                <td class="text-center"><span class="top-apps">3,2,5,4,3,6,7,5,7,9</span></td>
                            </tr>

                            <tr>
                                <td>Asphalt 8</td>
                                <td>998,003</td>
                                <td class="text-center"><span class="top-apps">1,3,4,3,5,4,3,6,9,8</span></td>
                            </tr>


                            <tr>
                                <td>Viber</td>
                                <td>512,015</td>
                                <td class="text-center"><span class="top-apps">9,2,5,7,2,4,6,7,2,6</span></td>
                            </tr>


                            <tr>
                                <td>Whatsapp</td>
                                <td>504,135</td>
                                <td class="text-center"><span class="top-apps">1,4,5,4,4,3,2,5,4,3</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="panel panel-primary panel-table">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Events</h3>
                        <span>This month's event calendar</span>
                    </div>

                    <div class="panel-options">
                        <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="calendar" class="calendar-widget">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
