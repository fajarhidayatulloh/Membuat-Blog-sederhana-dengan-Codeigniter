<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
	include 'navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8"> <!-- 8 kolom pada resolusi medium dan small -->
                
            <div class="row">
                <div class="col-md-0"></div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php foreach ($baca as $r) {
                                        
                                ?>
                                <h3 class="panel-title"><?php echo $r['artikel_title']; ?>
                                </h3>
                            </div>
                            <div class="panel-body">
                                   <p><?php echo $r['artikel_isi']; ?></p>
                            </div>
                                <?php }  ?>
                        </div>
                    </div>
            </div>
        </div>
        <?php include 'sidebar.php'; ?>
    </div>
</div>
<?php include 'footer.php'; ?>