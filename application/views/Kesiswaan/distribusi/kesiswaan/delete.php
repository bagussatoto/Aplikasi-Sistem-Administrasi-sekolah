<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal<?php echo $m->id_pengumuman ?>" title="Delete pengumuman">
    <i class="fa fa-trash-o"></i>
</button>
    <div class="modal fade" id="myModal<?php echo $m->id_pengumuman ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Data Pengumuman Mutasi</h4>
                </div>
    <div class="modal-body">
      Yakin ingin menghapus data ?
    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?php echo base_url('distribusi/kesiswaan/delete/'.$m->id_pengumuman) ?>" class="btn btn-primary"><i class="fa fa-trash-o"></i> Ya, hapus data ini</a>
            </div>
        </div>
    </div>
</div>
