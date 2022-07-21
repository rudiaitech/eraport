      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-body">
<?php echo form_open('Admin/simpankelas'); ?>
  <div class="card-body">
    <div class="form-group">
      <label for="nama">Nama Kelas</label>
      <?php echo form_input('nama', set_value('namakls'), array('class'=>'form-control', 'id'=>'nama', 'placeholder'=>'Nama')); ?>
      <small class="text-danger">
        <?php echo form_error('namakls'); ?>
      </small>
    </div>
    <div class="form-group">
      <label for="guru">Wali Kelas</label>
      <?php echo form_dropdown('guru', $guru, '', array('class'=>'form-control', 'id'=>'guru')); ?>
      <small class="text-danger">
        <?php echo form_error('id_guru'); ?>
      </small>
    </div>
    <div class="form-group">
      <label for="tahun">Tahun Ajaran</label>
      <?php echo form_dropdown('tahun', $tahun, '', array('class'=>'form-control', 'id'=>'guru')); ?><!-- 
      <select name="tahun1" class="form-control">
        <option value="">--Pilih Tahun Ajaran--</option>}
        option
        <?php foreach($tahun1->result_object() as $thn) {
         ?>
        <option value="<?=$thn->id_ta?>"><?=$thn->semester?> <?=$thn->tahun?></option>
        <?php } ?>
      </select> -->
      <small class="text-danger">
        <?php echo form_error('tahun'); ?>
      </small>
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">    
  <?php echo form_submit('save', 'Simpan', array('class'=>'btn btn-primary mr-2')); ?>
  <a href="<?=base_url('admin/kelas/')?>" class="btn btn-light">Batal</a>
  </div>
<?php echo form_close(); ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <?=$awal ?>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>        </div></div>