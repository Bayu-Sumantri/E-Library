</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> <?=$this->session->userdata('nama_lengkap')?> (<?=$this->session->userdata('password')?>)
  </div>
  <strong>Copyright &copy; 2023 <a href="https://www.instagram.com/athar_fazli/">NobarTeam</a></strong> SIMRS RSKDDS
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Feather Icon -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace()
</script>

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- CKEditor 4 -->
<!-- <script src="https://cdn.ckeditor.com/4.21.0/full-all/ckeditor.js"></script> -->

<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


  })
  // BS-Stepper Init
</script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js ">
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#kantin').click(function() {
      if ($("#kantin").is(":checked ")) {
        $('#kantin_ket').animate({
          width: 'toggle'
        }).show().focus();
      } else {
        $("#kantin_ket").val('').hide();
      }
    });

        $('#acara').click(function() {
          if ($("#acara").is(":checked ")) {
            $('#acara_ket').animate({
              width: 'toggle'
            }).show().focus();
          } else {
            $("#acara_ket").val('').hide();
          }
        });
            $('#penjaja').click(function() {
              if ($("#penjaja").is(":checked ")) {
                $('#penjaja_ket').animate({
                  width: 'toggle'
                }).show().focus();
              } else {
                $("#penjaja_ket").val('').hide();
              }
            });
               $('#pdam').click(function() {
                if ($("#pdam").is(":checked ")) {
                  $('#sumber_ket').animate({
                    width: 'toggle'
                  }).show().focus();
                } else {
                  $("#sumber_ket").val('').hide();
                }
              });  
                 $('#sumber_lain').click(function() {
                  if ($("#sumber_lain").is(":checked ")) {
                    $('#sumber_minum_ket').animate({
                      width: 'toggle'
                    }).show().focus();
                  } else {
                    $("#sumber_minum_ket").val('').hide();
                  }
                });
                    $('#septictank').click(function() {
                      if ($("#septictank").is(":checked ")) {
                        $('#septictank_ket').animate({
                          width: 'toggle'
                        }).show().focus();
                      } else {
                        $("#septictank_ket").val('').hide();
                      }
                    });
                        $('#ventilasi_rumah').click(function() {
                          if ($("#ventilasi_rumah").is(":checked ")) {
                            $('#ventilasi_ket').animate({
                              width: 'toggle'
                            }).show().focus();
                          } else {
                            $("#ventilasi_ket").val('').hide();
                          }
                        });
                            $('#riwayat_perjalanan_muncul').click(function() {
                              if ($("#riwayat_perjalanan_muncul").is(":checked")) {
                                $('#tb_i1, #tb_i2, #tb_i3, #tb_i4').animate({
                                  width: 'toggle'
                                }).show().focus();
                              } else {
                                $("#tb_i1, #tb_i2, #tb_i3, #tb_i4").val('').hide();
                              }
                            });

    // punya athar //

                                $('#covid-19_1').click(function() {
                                  if ($("#covid-19_1").is(":checked ")) {
                                    $('#ya_konfirm').animate({
                                      width: 'toggle'
                                    }).show().focus();
                                  } else {
                                    $("#ya_konfirm ").val('').hide();
                                  }
                                });
                                    $('#dirawat_1').click(function() {
                                      if ($("#dirawat_1 ").is(":checked ")) {
                                        $('#muncul1, #muncul2, #muncul3, #muncul4, #muncul15, #muncul6').animate({
                                          width: 'toggle'
                                        }).show().focus();
                                      } else {
                                        $("#muncul1, #muncul2, #muncul3, #muncul4, #muncul15, #muncul6 ").val('').hide();
                                      }
                                    });
                                        $('#paduan_oat2').click(function() {
                                          if ($("#paduan_oat2 ").is(":checked ")) {
                                            $('#paduan_oat2_sebutkan').animate({
                                              width: 'toggle'
                                            }).show().focus();
                                          } else {
                                            $("#paduan_oat2_sebutkan ").val('').hide();
                                          }
                                        });
                                            $('#paduan_oat3').click(function() {
                                              if ($("#paduan_oat3 ").is(":checked ")) {
                                                $('#paduan_anak_sebutkan').animate({
                                                  width: 'toggle'
                                                }).show().focus();
                                              } else {
                                                $("#paduan_anak_sebutkan ").val('').hide();
                                              }
                                            });
                                                $('#sumber_obat2').click(function() {
                                                  if ($("#sumber_obat2 ").is(":checked ")) {
                                                    $('#sumber_obat_asuransi').animate({
                                                      width: 'toggle'
                                                    }).show().focus();
                                                  } else {
                                                    $("#sumber_obat_asuransi ").val('').hide();
                                                  }
                                                });
                                                    $('#sumber_obat4').click(function() {
                                                      if ($("#sumber_obat4").is(":checked ")) {
                                                        $('#sumber_obat_lain').animate({
                                                          width: 'toggle'
                                                        }).show().focus();
                                                      } else {
                                                        $("#sumber_obat_lain ").val('').hide();
                                                      }
                                                    });
                                                        $('#rujukan_1').click(function() {
                                                          if ($("#rujukan_1").is(":checked ")) {
                                                            $('#namfas_tujuan, #kab_rujukan, #provinsi_rujukan').animate({
                                                              width: 'toggle'
                                                            }).show().focus();
                                                          } else {
                                                            $("#namfas_tujuan, #kab_rujukan, #provinsi_rujukan ").val('').hide();
                                                          }
                                                        });
                                                            $('#rujukan_2').click(function() {
                                                              if ($("#rujukan_2").is(":checked ")) {
                                                                $('#no_tbc_ro').animate({
                                                                  width: 'toggle'
                                                                }).show().focus();
                                                              } else {
                                                                $("#no_tbc_ro").val('').hide();
                                                              }
                                                            });
                                                            })


  // pencarian
// function myFunction() {
//     var input, filter, table, tr, th, i, txtValue;
//     input = document.getElementById("myInput");
//     filter = input.value.toUpperCase();
//     table = document.getElementById("table_cari");
//     tr = table.getElementsByTagName("tr");
//     for (i = 0; i < tr.length; i++) {
//         th = tr[i].getElementsByTagName("th")[0];
//         txtValue = a.textContent || a.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//             tr[i].style.display = "";
//         } else {
//             tr[i].style.display = "none";
//         }
//     }
// }
                                                          </script>

                                                          <script>
// assumes you're using jQuery
                                                            $(document).ready(function() {
                                                              $('#login').hide();
                                                              <?php if($this->session->flashdata('warning')){ ?>
                                                                $('#login').html('<?php echo $this->session->flashdata('warning'); ?>').show();
                                                              <?php } ?>
                                                            });
                                                          </script>


<script>
  $(function() {
    <?php if ($this->session->flashdata('suksesmasuk')) { ?>
      swal({
        title: "Informasi!",
        text: "<?php echo $this->session->flashdata('suksesmasuk'); ?>",
        icon: "success",
      });
    <?php } ?>
    <?php if ($this->session->flashdata('sukses')) { ?>
      swal({
        title: "Informasi!",
        text: "<?php echo $this->session->flashdata('sukses'); ?>",
        icon: "success",
      });
    <?php } ?>
  });
</script>

                                                        </body>

                                                        </html>