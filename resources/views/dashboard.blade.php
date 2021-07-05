@extends('welcome')
@section('content')

       <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Statistics Covid - 19 PT. KATOLEC INDONESIA </h1>

     <div class="row">

                        <div class="col-xl-12 col-lg-11">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Statistics Gejala Gejala Covid-19</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                            {!! $chart->container() !!}

                                    </div>
                                </div>
                            </div>


                        </div>
                            <div class="col-xl-12 col-lg-11">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Suhu</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                            {!! $chartPie->container() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  

    {!! $chart->script() !!}
    {!! $chartPie->script() !!}


@endsection
