<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
            <script type="text/javascript">
        var change = {
            0: '0',
            2500000: 'Rp. 2.500.000',
            500000: 'Rp. 5.000.000',
            7500000: 'Rp. 7.500.000',
            10000000: 'Rp. 10.500.000'
        };
        Highcharts.chart('container', {
            chart: {
                height: 500,
                borderRadius: 10,
                borderColor: '#969696',
                borderWidth: 1,
                backgroundColor: '#e7e6e6',
                type: 'column'
            },
            title: {
                text: 'Pendapatan',
                align: 'left',
                style: {
                    color: '#f4004a',
                    fontWeight: 'bold',
                    fontSize: "15px"
                },

            },
            xAxis: {
                categories: [
                <?php foreach ($harian->result() as $result89) : ?>
                    "<?php echo $result89->hari ?><br><?php echo $result89->tanggal_rencana ?>",
                <?php endforeach; ?>
                ],
                labels: {
                    style: {
                        color: 'black',
                        fontWeight: 'bold'
                    }
                },
                title: {
                    enabled: true,
                    text: '------Rata2 pendapatan minggu ini',
                    style: {
                        fontWeight: 'normal'
                    }
                }
            },
            yAxis: {
                labels: {
                    formatter: function() {
                        var value = change[this.value];
                        return value !== 'undefined' ? value : this.value;
                    }
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b> Rp. {point.y:.1f},-</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0,
                    borderRadius: 10,
                    pointWidth: 20
                }
            },
            series: [{
                name: '',
                showInLegend: false,
                states: {
                    hover: {
                        color: '#f40049'
                    }
                },
                data: [
                <?php foreach ($harian->result() as $result89) : ?>
                    {
                        color: '#767171',
                        y: <?php echo $result89->money ?>
                    }, 
                <?php endforeach; ?>
                ]

            }]
        });
      </script>
<style type="text/css">
    .RightCol {
        float: right;
        position: fixed;
        width: 300px;
        overflow-y: scroll;
        overflow-x: hidden;
        top: 0;
        bottom: 0;
    }

    .content {
        position: relative;
        margin-left: 150px;
    }

    .outer {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .row {
        display: flex;
        /* equal height of the children */
    }

    .col {
        flex: 1;
        /* additionally, equal width */

        padding: 1em;
        background-color: #e7e6e6;
        text-align: left;
    }

    .d:hover {
        background-color: #e7e6e6;
        border-radius: 15px;
    }

    .label-success {
        background-color: #00ff00;
        color: black;
    }

    .myscrl::-webkit-scrollbar {
        width: 1em;
    }

    .myscrl::-webkit-scrollbar-track {
        background-color: #a6a6a6;
        border-radius: 20px;
    }

    .myscrl::-webkit-scrollbar-thumb {
        background-color: #767171;
        border-radius: 20px;
    }
</style>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="">     
    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>
    <br>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="col-md-12">
                        <font style="font-weight: bold; font-size: 20px;" >Laporan Harian</font>
                        <a href="<?php echo base_url('Superdokter/export_per_dokter') ?>" class="btn" style="
                            margin-top: 45px; margin-left: 5px;background-color: #e7e6e6; border: none; color:#f40049; font-weight:bold; float: right; ">
                            <img src="<?php echo base_url() ?>assets/images/download.png" height="30px">
                            Download<br><span style="font-size: 11px;">per-dokter</span>
                        </a>
                        <a href="<?php echo base_url('Superdokter/export_harian') ?>" class="btn" style="margin-top: 45px;background-color: #e7e6e6; border: none; color:#f40049; font-weight:bold; float: right;">
                            <img src="<?php echo base_url() ?>assets/images/download.png" height="30px">
                            Download<br><span style="font-size: 11px;">per-hari</span>
                        </a>
                       
                        
                    </div>
                    <div class="col-md-12" style="border: 1px solid #e0e0e0; margin-top: 15px;">
                        <div style="float: left">
                            <span style="color: black; "><b>Filter :</b></span>
                            <a style="margin-left: 10px" href="<?php echo base_url('Superdokter/laporan_harian') ?>">
                                <div class="btn" style="background-color: #e7e6e6; border: none; color:black; font-weight:bold;">
                                <div class="col-md-2 outer" style="padding-top: 7px">
                                    <img src="<?php echo base_url() ?>assets/images/calendar.png" height="24px">
                                </div>
                                <div class="col-md-8" style="text-align: left; display: table-cell;vertical-align:middle; padding-right:0px">
                                    <span>Per-hari </span>
                                    <!-- <br>
                                    <span>28 Agustus 2020</span> -->
                                </div>
                               <!--  <div class="col-md-2 outer" style="padding:0px">
                                    <img style="margin-top: 15px;" src=" <?php echo base_url() ?>assets/images/down.png" height="12px">
                                </div> -->
                            </div>
                            </a>
                            <a href="<?php echo base_url('Superdokter/laporan_harian_dokter') ?>">
                                <div href="#" class="btn" style="background-color: #e7e6e6; border: none; color:black; font-weight:bold;">
                                <div class="col-md-2 outer" style="padding-top: 7px">
                                    <img src="<?php echo base_url() ?>assets/images/Doctor.png" height="24px">
                                </div>
                                <div class="col-md-8" style="text-align: left; display: table-cell;vertical-align:middle; padding-right:0px">
                                    <span>Per-dokter</span>
                                    <!-- <br>
                                    <span> Dokter Gigi</span> -->
                                </div>
                                <!-- <div class="col-md-2" style="padding:0px">
                                    <img style="margin-top: 15px;" src="<?php echo base_url() ?>assets/images/down.png" height="12px">
                                </div> -->
                            </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 70px;">
                        <div id="chart"></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin: 30px;border:1px solid #969696;border-radius:10px">
                            <div class="col-md-12">
                                <h5 style="color: #f40049; font-weight:bold">Conversion Rate</h5>
                                <div class="col-md-4 outer" style="text-align:left">
                                    <h1 style="color:black;font-weight:bold">78%</h1>
                                </div>
                                <div class="col-md-8">
                                    <p>
                                        Dari seluruh pasien yang memiliki janji telah selesai dilakukan pemeriksaan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 30px;margin-bottom: 30px;border:1px solid #969696;border-radius:10px">
                            <div class="col-md-12">
                                <h5 style="color: #f40049; font-weight:bold">E-Rekam Medis</h5>
                                <div class="col-md-5 outer" style="text-align:left">
                                    <h1 style="color:black;font-weight:bold;">100%</h1>
                                </div>
                                <div class="col-md-7">
                                    <p>
                                        E-Rekam Medis dari seluruh pasien yang melakukan pemeriksaan telah terisi lengkap
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="margin: 30px;border:1px solid #969696;border-radius:10px">
                            <div class="col-md-12">
                                <h5 style="color: #f40049; font-weight:bold">Rata2 Kepuasan</h5>
                                <div class="col-md-3 outer" style="text-align:left">
                                    <h1 style="color:black;font-weight:bold">4.5</h1>
                                </div>
                                <div class="col-md-9"><br>
                                    <p>
                                        Nilai kepuasan rata2 dari seluruh pasien yang telah selesai dilakukan pemeriksaan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="background-color:  #f2f2f2; padding:0px;height: 1100px;">
                    <div class="col-md-12" style="padding-right: 0px;">
                        <center><h4 style=" color: black;"><b>Detail Pemeriksaan</b></h4></center>
                        <a href="<?php echo base_url('Superdokter/export_detail') ?>" class="btn" style="background-color: #e7e6e6; border: none; color:#f40049; font-weight:bold; float: right;margin-right:20px">
                            <img src="<?php echo base_url() ?>assets/images/download.png" height="30px">
                            Download
                        </a>
                        <div style="width: 100%; height: 700px; overflow-y: scroll; overflow-x: hidden; margin-top:80px">
                            <?php foreach ($laporan->result() as $result) : ?>
                                <div class="col-md-12 d" style="margin: 2px;">
                                    <div class="col-md-5" style="text-align: left;">
                                        <h5 style="font-weight: bold;"><?php echo $result->jam_rencana ?></h5>
                                        <h6><?php echo $result->nama_dokter ?></h6>
                                        <br>
                                        <h6 class="label label-success">Telah Terbayar</h6>
                                        <br><br>
                                    </div>
                                    <div class="col-md-7" style="padding-right: 10px;">
                                        <h6 style="font-weight: bold ;"><?php echo $result->nama_depan ?> <?php echo $result->nama_belakang ?></h6>
                                        <p style="font-size: 10px ;">No. Rekam Medis <?php echo $result->id_rekam_medis ?></p>
                                        <p><?php echo $result->hubungan ?> <?php echo $result->nama_depan_u ?> <?php echo $result->nama_belakang_u ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="RightCol" style="margin-top: 15%;">

    <a href="#" class="btn" style="background-color: #e7e6e6; border: none; width: 300px; height: 70px ">A</a><br />
   
</div> -->