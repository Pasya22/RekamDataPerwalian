</div>
<div class="container-fluid e-menu">
    <div class="row">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light e-menu">
                <div class="logo mr-3">
                    <img src="http://elearning.unbin.ac.id/assets/img/unbin.png" alt="UNBIN">
                </div>
                <div class="e-brand d-none d-sm-block">
                    <div class="e-letter"></div>
                    <a class="navbar-brand" href="#">
                        <div class="h-title-1">Rekam Perwalian</div>
                        <div class="h-title-2"><small>Universitas Binaniaga Indonesia</small></div>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link  " href="<?= site_url('Welcome'); ?>">Home <span
                                class="sr-only">(current)</span></a>

                        <a class="nav-item nav-link active" href="<?= site_url('Welcome/Tracking'); ?>">Tracking </a>
                        <a class="nav-item nav-link " href="<?= site_url('Welcome/RekamData'); ?>">Rekam Data</a>
                        <a class="nav-item nav-link " href="<?= site_url('Welcome/Perwalian'); ?>">Perwalian</a>

                        <script>
                        $('a.mail').removeClass('mail-empty');
                        </script>


                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row mb-5">
        <div class="col-md-2 mb-1">
            <!-- <form method="post" accept-charset="utf-8"> -->
            <!-- <div class="form-group">
                     <label for="cacademic_year">Tahun Masuk</label>
                     <input type="text" class="form-control form-control-sm" id="cacademic_year" name="key"
                         maxlength="9" autocomplete="off" value="2021/2022">
                 </div> -->
            <!-- <div class="form-group">
                     <label for="csmt">Semester</label>
                     <select class="form-control form-control-sm" id="csmt" name="csmt">
                         <option value="ganjil">Ganjil</option>
                         <option value="genap" selected="">Genap</option>
                     </select>
                 </div> -->
            <!-- <button type="submit" name="cfilter" id="search-btn" value="Filter" class="btn btn-primary btn-sm">Filter</button> -->
            <!-- </form> -->


        </div>
        <!-- <div class="col-md-10 side-devider"> -->
        <!-- <div class="top_shadow"></div> -->
        <!-- <h5>List Mata Kuliah</h5> -->
        <table class="table table-striped table-hover table-sm" id="tabelData">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode matakuliah</th>
                    <!-- <th>NPM</th> -->
                    <th>Nilai</th>
                    <!-- <th>Kode Kelas</th> -->
                    <th>action</th>
                </tr>
            </thead>

            <tbody id="table_data">
                <?php
                $no = 1;
                foreach ($tampil as $rm) {
                ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $rm->kd_matkul; ?>
                    </td>

                    <td>
                        <?= $rm->hm; ?>
                    </td>
                    <td>
                        <?php if ($rm->hm == "T") : ?>
                        <a class="btn btn-warning" href="<?= site_url('Welcome/Push/') . $rm->kd_matkul; ?>">Push</a>

                        <?php endif ?>

                    </td>
                </tr>

                <?php } ?>
            </tbody>
            </tbody>

        </table>
        <div class=" bottom_shadow">
        </div>
    </div>
</div>
</div>
<script>
$(function() {
    $("#search-btn").click(function(e) {
        var tahun_masuk = $("#cacademic_year").val();
        e.preventDefault();
        $("#table_data").html("");
        var data;
        $.ajax({
            url: "<?php echo site_url('Welcome/filter'); ?>",
            type: "POST",
            data: "tahun_masuk=" + tahun_masuk,
            cache: false,
            success: function(html) {
                html = JSON.parse(html);
                for (let index = 0; index < html.length; index++) {
                    console.log(index);
                    data += '<tr valign="top">' +
                        ' <td>' + html[index] + ' </td>' +
                        '<td> ' + html[index].kd_matkul + ' </td>' +
                        '<td> ' + html[index].npm + '</td>' +
                        '<td> ' + html[index].nilai + ' </td>' +
                        '<td> ' +
                        ' <a class="btn btn-info" href=" <?= site_url('Welcome/push'); ?>' +
                        '/' + '' + html[index].npm + '">Detail</a>' + ' </td>' +
                        '</tr>';
                }
                $("#table_data").html(data);
            }
        })
    })

})
</script>