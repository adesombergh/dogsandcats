<div id="contactcontent" class="container">



	<div class="section" id="contact" data-anchor="section1">
		<div class="row" style="height: 60px">
			<div class="col-sm-8 col-sm-offset-2">
				<?php if (isset($result)): ?>
				<div class="alert <?php echo $result['status']=='success' ? 'alert-success' : 'alert-danger' ?>">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $result['message']; ?>
				</div>
				<?php endif ?>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="" method="POST" class="form-horizontal" role="form" id="mailform">
					<input type="hidden" name="action" id="action" value="sendmail">
					<div class="form-group form-group-lg">
						<label for="nom" class="col-sm-2 control-label">Pseudo</label>
						<div class="col-sm-10">
							<input type="text" name="nom" id="nom" class="form-control" placeholder="Pseudo">
  							<span class="help-block hide"></span>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label for="email" class="col-sm-2 control-label">E-mail</label>
						<div class="col-sm-10">
							<input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
  							<span class="help-block hide"></span>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<label for="msg" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea name="msg" id="msg" class="form-control" rows="5" ></textarea>
  							<span class="help-block hide"></span>
						</div>
					</div>
					<div class="form-group form-group-lg">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" class="btn btn-lg btn-info">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>



</div>
