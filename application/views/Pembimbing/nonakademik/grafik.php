<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:navy;">Keterlambatan Siswa SMP Yogyakarta<br></center>
        <center><small>Tahun Ajaran 2016-2017</small></center>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('nonakademik');?>">Dashboard</a></li>
      </ol>
    </section>

    <section class="content">
                            
        <div class="row">
            <section class="col-lg-12 ">
                <div class="nav-tabs-custom">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-left">
                      <li><a href="<?php echo site_url('nonakademik/keterlambatan'); ?>">Keterlambatan Siswa</a></li>
                      <li class="active">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grafik</a>
                          <ul class="dropdown-menu">
                              <li><a tabindex="-1" href="<?php echo site_url('nonakademik/grafik'); ?>#Bulanan">Bulanan</a></li>
                              <li><a tabindex="-1" href="<?php echo site_url('nonakademik/grafik'); ?>#Tahunan">Tahunan</a></li>
                          </ul>
                      </li>
                    </ul>
                    
                      <br/><br/><br/><br/>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                  <i class="fa fa-bar-chart-o"></i>
                                  <h3 class="box-title" id="Bulanan" >Grafik Bulanan</h3>
                                </div>
                                <div class="box-body">
                                  <select id="thn" name="tahun" onchange="document.location = '<?php echo site_url('nonakademik/grafik'); ?>/'+document.getElementById('thn').value;">
                                    <option value="2017" <?php if ($tahun == '2017') { echo "selected"; } ?>>2017</option>
                                    <option value="2018" <?php if ($tahun == '2018') { echo "selected"; } ?>>2018</option>
                                  </select><br/><br/>
<script src="<?php echo base_url(); ?>assets/highcharts/code/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assetshighcharts/code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Keterlambatan Siswa Perbulan'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Siswa'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} Siswa</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Keterlambatan',
        data: [
        <?php
        for($i=1;$i<=12;$i++) {
          echo $keterlambatanbulan[$i]->jml.",";
        }
        ?>
        ]

    }]
});
    </script>
                                  <!-- <div id="bar-chart2" style="height: 300px;"></div> -->
                                </div>
                            </div>

                            <div class="box box-primary">
                                <div class="box-header with-border">
                                  <i class="fa fa-bar-chart-o"></i>
                                  <h3 class="box-title" id="Tahunan" >Grafik Tahunan</h3>
                                </div>
                                <div class="box-body">
<!-- <script src="<?php //echo base_url(); ?>highcharts/code/highcharts.js"></script>
<script src="<?php //echo base_url(); ?>highcharts/code/modules/exporting.js"></script> -->

<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



    <script type="text/javascript">

Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Keterlambatan Siswa Pertahun'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
        <?php
          foreach ($keterlambatantahun as $rowketerlambatantahun) {
            echo $rowketerlambatantahun->tahun.',';
          }
           ?>
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Siswa'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f} kali</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Keterlambatan',
        data: [
        <?php
          foreach ($keterlambatantahun as $rowketerlambatantahun) {
            echo $rowketerlambatantahun->jml.',';
          }
           ?>
        ]

    }]
});
    </script>
                                  <!-- <div id="bar-chart3" style="height: 300px;"></div> -->
                                </div>
                            </div>                         
                                                    
                      </div>
                    </div>
                </div>
            </section>
        </div>
        </section>
        </div>