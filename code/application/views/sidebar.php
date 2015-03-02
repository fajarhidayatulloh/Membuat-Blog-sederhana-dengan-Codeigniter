
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
                        $no=1;
                        foreach ($dua as $r) {
                        ?>
                      <li class="list-group-item"><?php echo $r['katagori'] ?><br><?php echo anchor('',$r['artikel_title']);?></li>
                      <?php $no++; } ?>
                    </ul>
                </div>
            </div>
            
        </div>
        
        
        
  