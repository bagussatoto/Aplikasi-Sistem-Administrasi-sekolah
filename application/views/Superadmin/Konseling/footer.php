<!-- ./wrapper -->
</div>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url("bootstrap/js/bootstrap.min.js") ?>"></script>
<!-- Morris.js charts -->
<!-- Sparkline -->
<script src="<?php echo base_url("plugins/sparkline/jquery.sparkline.min.js") ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") ?>"></script>
<script src="<?php echo base_url("plugins/jvectormap/jquery-jvectormap-world-mill-en.js") ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url("plugins/knob/jquery.knob.js") ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url("plugins/daterangepicker/daterangepicker.js") ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url("plugins/datepicker/bootstrap-datepicker.js") ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url("plugins/slimScroll/jquery.slimscroll.min.js") ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url("plugins/fastclick/fastclick.js") ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("dist/js/app.min.js") ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("dist/js/demo.js") ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url("plugins/datatables/jquery.dataTables.min.js") ?>"></script>
<script src="<?php echo base_url("plugins/datatables/dataTables.bootstrap.min.js") ?>"></script>
</body>
<script>
  $(function () {
    // $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script src="<?php echo base_url("dist/js/app.min.js") ?>"></script>
<script src="<?php echo base_url("tema/dist/js/demo.js") ?>"></script>
<script src="<?php echo base_url("tema/plugins/flot/jquery.flot.min.js") ?>"></script>
<script src="<?php echo base_url("tema/plugins/flot/jquery.flot.resize.min.js") ?>"></script>
<script src="<?php echo base_url("tema/plugins/flot/jquery.flot.categories.min.js") ?>"></script>
<script>
  $(function () {
    // $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
  $(function () {
      
    var bar_data = {
      data: [["7A", 10], ["7B", 8], ["7C",], ["7D", 4], ["7E", 13], ["7F", 17], ["7G", 18]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart", [bar_data], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
         
    var bar_data2 = {
      data: [["Minggu 1", 10], ["Minggu 2", 8], ["Minggu 3", 4], ["Minggu 4", 13]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart1", [bar_data2], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });     
      
    var bar_data1 = {
      data: [["Januari", 10], ["Februari", 8], ["Maret", 4], ["April", 13], ["Mei", 17], ["Juni", 9]
            , ["Juli", 13], ["Agustus", 17], ["September", 9]
            , ["Oktober", 13], ["November", 17], ["Desember", 9]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart2", [bar_data1], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
      
    
    var bar_data3 = {
      data: [["2015", 10], ["2016", 8], ["2017", 17]],
      color: "#3c8dbc"
    };
    $.plot("#bar-chart3", [bar_data3], {
      grid: {
        borderWidth: 1,
        borderColor: "#f3f3f3",
        tickColor: "#f3f3f3"
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: "center"
        }
      },
      xaxis: {
        mode: "categories",
        tickLength: 0
      }
    });
      

  });

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + "<br>"
        + Math.round(series.percent) + "%</div>";
  }
</script>

</html>