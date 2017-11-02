    <div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4 class="page-head-line">Edit Jadwal</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Jadwal Meeting</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12 col-xs-12">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tema Meeting</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="" readonly="">
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="javascript:void(0)" onclick="srch_sch()" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-search"></span> Cari</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Dept. Terkait</label>
                                        <div class="col-sm-8">
                                            <select multiple class="form-control">
                                                <option value="1">Dept 1</option>
                                                <option value="2">Dept 2</option>
                                                <option value="3">Dept 3</option>
                                                <option value="4">Dept 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dtp">
                                                <input type="text" class="form-control input-group-addon" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jam</label>
                                        <div class="col-sm-8">
                                            <div class="input-group date dtm">
                                                <input type="text" class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Informasi</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control inputtxtarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>                            
                        </div>
                    </div>                    
                </div>
            </div>
		</div>
	</div>
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-am-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="modal_schedule" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_schedule" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Departemen</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Info</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
    <!-- DATATABLES -->
    <script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/datatables/dataTables.responsive.js')?>"></script>
    <!-- DATETIME -->
    <script src="<?php echo base_url('assets/js/dateTime/moment.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dateTime/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- EXTRA JS -->
    <script src="<?php echo base_url('assets/js/extra.js')?>"></script>
    <script>
        $(document).ready(function() {
            $('.dtp').datetimepicker({                
                  format: 'YYYY-MM-DD'
             });
            $('.dtm').datetimepicker({                
                  format: 'HH:mm'
             });
        });

        function srch_sch()
        {
            $('#modal_schedule').modal('show');
            $('.modal-title').text('Cari Jadwal');
        }
    </script>