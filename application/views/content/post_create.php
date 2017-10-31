	<div class="content-wrapper">
		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h4 class="page-head-line">Buat Jadwal</h4>
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
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="">
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
    </script>