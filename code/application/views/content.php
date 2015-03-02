<div class="container">
    <h2 class="panel-default">Artikel Terbaru</h2>
    <hr>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8"> <!-- 8 kolom pada resolusi medium dan small -->
            <div class="panel panel-default">
                <?php  foreach ($berita as $r) {
                    $link = set_permalink($r['id_artikel'],$r['artikel_title']);
                         ?>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-0"></div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo $r['artikel_title']; ?>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <span class="glyphicon glyphicon-pencil"> <?php echo $r['dibuat']; ?></span> 
                                    <br>
                                    <br>
                                    <?php echo word_limiter( $r['artikel_isi'],20); ?>
                                    <br><br>
                                    <div class="col-md-9"></div>
                                    <span><a href="<?php echo base_url();?>welcome/read/<?php echo $r['id_artikel'] ?>"class="col-md-3 btn btn-default">Selengkapnya &raquo;</a></b>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php  } ?>
            </div>
        </div>
        
        <div class="col-md-4 col-sm-4"> <!-- 8 kolom pada resolusi medium dan small -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title">
                      <strong>Tulisan Baru</strong>
                    </h2>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                     <?php 
                        
                        foreach ($berita as $r) {
                      ?>
                      <li class="list-group-item"><?php echo anchor('',$r['artikel_title']); ?></li>
                      <?php  } ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-sm-4"> <!-- 8 kolom pada resolusi medium dan small -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2 class="panel-title">
                      <strong>Selamat Datang</strong>
                    </h2>
                </div>
                <div class="panel-body">
                    <p class="text-left">fajarhidayatulloh.com adalah website tutorial pemrogramman web dengan PHP</p>

<p>Bagi yang berminat jadi Penulis di fajarhidayatulloh.com langsung aja Registrasi atau Bisa hubungi saya untuk contact bisa lihat dimenu portofolio.
</p>
                </div>
            </div>
        </div>
    </div>
</div>