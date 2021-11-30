<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Calendar</title>
        <!-- css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">  
        <!-- jquery bootstrap -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1>Calendar Test Verion 1.0</h1>
            </div>
            <div>
                <button type="button" id="add_btn" class="btn btn-primary" data-target="#new_schedule_modal" data-toggle="modal">新增行程</button>
            </div>
            <br>
            <table id="schdule_table" class="display">
                <thead>
                    <tr>
                        <th scope="col">主旨</th>
                        <th scope="col">地點</th>
                        <th scope="col">開始時間</th>
                        <th scope="col">結束時間</th>
                        <th scope="col">附檔</th>
                        <th scope="col">內容</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
			<!-- Modal -->
			<div class="modal fade" id="new_schedule_modal" role="dialog">
			<!-- <?php require('modal.php'); ?> -->
			<!-- <div id="show_modal" name="show_modal" src="modal.php"> -->
			</div>
        </div>
    </body>
</html>
<script>
$(document).ready(function(){
	$("#new_schedule_modal").load('modal.php');
});

$("#add_btn").click(function(){
	$("#new_schedule_modal").modal('show');
});
</script>