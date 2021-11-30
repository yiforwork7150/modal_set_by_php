
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 id="modal_title" class="modal-title">新增行程</h4>
			</div>
			<div id="modal-body" class="modal-body">
				<form class="form">
					<div class="form-group row"><label class="col-md-3">主旨:</label><input id="subject"class="col-md-8" type="text"></div>
					<div class="form-group row"><label class="col-md-3">地點:</label><input id="location" class="col-md-8" type="text"></div>
					<div class="form-group row"><label class="col-md-3">開始時間:</label><input id="date_start" class="col-md-8 date" type="datetime-local"></div>
					<div class="form-group row"><label class="col-md-3">結束時間:</label><input id="date_end" class="col-md-8 date" type="datetime-local"></div>
				</form>
				<form class="form">
					<div class="form-group row">
						<label class="col-md-3">檔案:</label>
						<input class="col-md-5" id="file_name" type="file">
						<a id="file_link" class="col-md-2" style="display:none;" download></a>
						<!-- <button type="button" style="padding: 3px 3px;font-size: 6px;border-radius: 3px;" class="col-md-1 btn btn-danger btn-sm">清空</button> -->
					</div>
					<div class="form-group row">
						<label class="col-md-3">內文:</label>
						<textarea id="content" class="col-md-8" type="text" style="height:200px;"></textarea>
					</div>
				</form>
			</div>
			<div class="alert alert-danger" id="error_msg" style="display:none;"> </div>
			<div class="modal-footer">
				<button id="delete_btn" style="position:absolute;left:20px;" type="button" class="btn btn-danger">刪除行程</button>
				<button id="submit_btn" type="button" class="btn btn-default">送出</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
			</div>
		</div>
	</div>
